<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\News */
class NewsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,
            'title' => $this->title,
            'img_path' => $this->img_path,
            'text' => $this->text,
            'created_at' => $this->created_at->format('d-m-y H:i'),
        ];
    }


}
