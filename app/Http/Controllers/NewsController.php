<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;

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

        return response()->json(['news' => $news]);
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

    public function destroy(Request $request, int $id)
    {

        if ($request->user('sanctum')->can('update', News::class)) {
            $isDeleted = $this->newsService->delete($id);
        } else {
            return response('Unauthorized', 403);
        }

        return $isDeleted ? response(['status' => 'success']) : response(['status' => 'error', 'error' => ['news.id' => 'unknown id']], 423);
    }
}
