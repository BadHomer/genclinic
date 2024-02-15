<?php

namespace App\Http\Controllers;

use App\Http\Resources\MedicalHistoryResource;
use App\Models\MedicalHistory;
use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    public function index()
    {
        return MedicalHistoryResource::collection(MedicalHistory::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'med_card_id' => ['required', 'integer'],
            'doctor_id' => ['required', 'integer'],
            'description' => ['required'],
            'status_id' => ['required', 'integer'],
        ]);

        return new MedicalHistoryResource(MedicalHistory::create($data));
    }

    public function show(MedicalHistory $medicalHistory)
    {
        return new MedicalHistoryResource($medicalHistory);
    }

    public function update(Request $request, MedicalHistory $medicalHistory)
    {
        $data = $request->validate([
            'med_card_id' => ['required', 'integer'],
            'doctor_id' => ['required', 'integer'],
            'description' => ['required'],
            'status_id' => ['required', 'integer'],
        ]);

        $medicalHistory->update($data);

        return new MedicalHistoryResource($medicalHistory);
    }

    public function destroy(MedicalHistory $medicalHistory)
    {
        $medicalHistory->delete();

        return response()->json();
    }
}
