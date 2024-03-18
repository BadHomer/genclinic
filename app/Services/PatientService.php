<?php

namespace App\Services;

use App\Models\Patient;

class PatientService
{
    public function createPatient($patientData)
    {
        return Patient::create($patientData);
    }
}
