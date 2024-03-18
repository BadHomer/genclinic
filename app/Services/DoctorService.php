<?php

namespace App\Services;

use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\UploadedFile;

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

    public function create(array $doctorData, UploadedFile $img): DoctorResource
    {
        $doctor = Doctor::make($doctorData);
        $doctor->photo_path = '/storage/' . $img->storePublicly('doctors', 'public');

        $doctor->save();

        return new DoctorResource($doctor);
    }

    public function update(int $id, array $doctorData, UploadedFile|null $img): DoctorResource
    {
        $doctor = Doctor::findOrFail($id)->fill($doctorData);
        $doctor->photo_path = '/storage/' . $img?->storePublicly('doctors', 'public');

        $doctor->save();

        return new DoctorResource($doctor);
    }

    public function delete(int $id): bool|null
    {
        return Doctor::findOrFail($id)->delete();
    }
}
