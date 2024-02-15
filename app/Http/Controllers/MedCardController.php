<?php

namespace App\Http\Controllers;

use App\Models\MedCard;
use Illuminate\Http\Request;

class MedCardController extends Controller
{
    public function index()
    {
        return MedCard::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'patient' => ['required', 'integer'],
        ]);

        return MedCard::create($data);
    }

    public function show(MedCard $medCard)
    {
        return $medCard;
    }

    public function update(Request $request, MedCard $medCard)
    {
        $data = $request->validate([
            'patient' => ['required', 'integer'],
        ]);

        $medCard->update($data);

        return $medCard;
    }

    public function destroy(MedCard $medCard)
    {
        $medCard->delete();

        return response()->json();
    }
}
