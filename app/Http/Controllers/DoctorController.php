<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
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
        $doctorCollectionResource = $this->doctorService->getAll();

        return response(['specs' => $doctorCollectionResource]);
    }

    public function store(DoctorRequest $request)
    {
        $doctorResource = $this->doctorService->create($request->validated(), $request->file('photo_path'));

        return response(['doctor' => $doctorResource]);

    }

    public function show(int $id)
    {
        $doctorResource = $this->doctorService->getById($id);

        return response(['doctor' => $doctorResource]);
    }

    public function update(DoctorRequest $request, int $id)
    {
        $doctorResource = $this->doctorService->update($id, $request->validated(), $request->file('photo_path'));

        return response(['doctor' => $doctorResource]);
    }

    public function destroy(int $id)
    {
        $this->doctorService->delete($id);

        return response(['status'=> 'success']);
    }
}
