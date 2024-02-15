<?php

namespace App\Http\Controllers;

use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Patient::class);

        return PatientResource::collection(Patient::all());
    }

    public function store(Request $request)
    {
        $this->authorize('create', Patient::class);

        $data = $request->validate([
            'name' => ['required'],
            'last_name' => ['required'],
            'patronymic' => ['required'],
            'contact_information_id' => ['required'],
            'snils' => ['required'],
        ]);

        return new PatientResource(Patient::create($data));
    }

    public function show(Patient $patient)
    {
        $this->authorize('view', $patient);

        return new PatientResource($patient);
    }

    public function update(Request $request, Patient $patient)
    {
        $this->authorize('update', $patient);

        $data = $request->validate([
            'name' => ['required'],
            'last_name' => ['required'],
            'patronymic' => ['required'],
            'contact_information_id' => ['required'],
            'snils' => ['required'],
        ]);

        $patient->update($data);

        return new PatientResource($patient);
    }

    public function destroy(Patient $patient)
    {
        $this->authorize('delete', $patient);

        $patient->delete();

        return response()->json();
    }
}
