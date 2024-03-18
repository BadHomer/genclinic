<?php

namespace App\Services;

use App\Http\Resources\EducationsResource;
use App\Models\Doctor;
use App\Models\Education;

class EducationService
{
    public function create(array $educationData, Doctor $doctor): EducationsResource
    {
        $education = Education::make($educationData);
        $education->doctor()->associate($doctor);
        return new EducationsResource($education);
    }
}
