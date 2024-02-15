<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Doctor::class);

        return DoctorResource::collection(Doctor::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Doctor::class);

        $data = $request->validate([
            'name' => ['required'],
            'last_name' => ['required'],
            'speciality_id' => ['required', 'integer'],
            'patronymic' => ['required'],
            'contact_information_id' => ['required', 'integer'],
        ]);

        return new DoctorResource(Doctor::create($data));
    }

    public function show(Doctor $doctor)
    {
        $this->authorize('view', $doctor);

        return new DoctorResource($doctor);
    }

    public function update(Request $request, Doctor $doctor)
    {
        $this->authorize('update', $doctor);

        $data = $request->validate([
            'name' => ['required'],
            'last_name' => ['required'],
            'speciality_id' => ['required', 'integer'],
            'patronymic' => ['required'],
            'contact_information_id' => ['required', 'integer'],
        ]);

        $doctor->update($data);

        return new DoctorResource($doctor);
    }

    public function destroy(Doctor $doctor)
    {
        $this->authorize('delete', $doctor);

        $doctor->delete();

        return response()->json();
    }
}
