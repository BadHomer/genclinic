<?php

namespace App\Http\Controllers;

use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use App\Services\DoctorService;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private DoctorService $doctorService;

    public function __construct()
    {
        $this->doctorService = new DoctorService();
    }

    public function index()
    {
        $doctors = $this->doctorService->getAll();

        return response(['doctors' => $doctors]);
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

    public function show(int $id)
    {
        //$this->authorize('view', $doctor);
        $doctor = $this->doctorService->getById($id);
        return response(['doctor' => $doctor]);
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
