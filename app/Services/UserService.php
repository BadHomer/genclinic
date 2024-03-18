<?php

namespace App\Services;

use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;

class UserService
{
    public function createUser(array $userData): User
    {
        $patientService = new PatientService();

        $patient = $patientService->createPatient($userData);
        $user = User::make($userData);

        $user->password = \Hash::make($userData['password']);

        $user->datable()->associate($patient);

        $user->save();

        return $user;
    }
}
