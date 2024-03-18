<?php

namespace App\Services;

use App\Http\Resources\DoctorResource;
use App\Models\Doctor;

class DoctorService
{
    public function getAll(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return DoctorResource::collection(Doctor::all());
    }

    public function getById(int $id): DoctorResource
    {
        return new DoctorResource(Doctor::findOrFail($id));
    }
}
