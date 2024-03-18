<?php

namespace App\Services;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\UploadedFile;

class NewsService
{
    public function getAll(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return NewsResource::collection(News::all());
    }

    public function getById(int $id): NewsResource
    {
        return new NewsResource(News::findOrFail($id));
    }

    public function store(array $newsData,UploadedFile $img): NewsResource
    {
        $newsData['img_path'] = '/storage/' . $img->storePublicly('news', 'public');

        $news = News::make($newsData);

        $news->save();

        return new NewsResource($news);
    }

    public function update(int $id, array $newsData, UploadedFile | null $img): NewsResource {
        $news = News::findOrFail($id);

        if($img !== null) {
            $newsData['img_path'] = '/storage/' . $img->storePublicly('news', 'public');
        }

        $news->fill($newsData);
        $news->save();

        return new NewsResource($news);
    }

    public function delete(int $id)
    {
        return News::findOrFail($id)->delete();
    }
}
