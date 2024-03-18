<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use App\Services\NewsService;

class NewsController extends Controller
{
    private NewsService $newsService;

    public function __construct()
    {
        $this->newsService = new NewsService;
    }

    public function index()
    {
        $news = $this->newsService->getAll();

        return response(['news' => $news]);
    }

    public function store(NewsRequest $request)
    {
        if ($request->user('sanctum')->can('create', News::class)) {
            $news = $this->newsService->store($request->validated(), $request->file('img'));
        } else {
            return response('Unauthorized', 403);
        }

        return response(['news' => $news]);
    }

    public function show(int $id)
    {
        $news = $this->newsService->getById($id);

        return response(['news' => $news]);
    }

    public function update(NewsRequest $request, int $id)
    {
        if ($request->user('sanctum')->can('update', News::class)) {
            $news = $this->newsService->update($id, $request->validated(), $request->file('img'));
        } else {
            return response('Unauthorized', 403);
        }

        return response(['news' => new NewsResource($news)]);
    }

    public function destroy(News $news)
    {
        $this->authorize('delete', $news);

        $news->delete();

        return response()->json();
    }
}
