<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Doctor */
class DoctorResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->info->getFullName(),
            'educations' => EducationsResource::collection($this->educations),
            'speciality' => $this->speciality->name,
        ];
    }
}
