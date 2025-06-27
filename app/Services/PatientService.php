<?php

namespace App\Services;

use App\Models\Patient;

class PatientService
{
    public function __construct()
    {
    }

    public function createPatient(array $data) : Patient
    {
        return Patient::create($data);
    }

    public function updatePatient(Patient $patient, array $data) : bool
    {
        return $patient->update($data);
    }

    public function deletePatient(Patient $patient) : bool
    {
        return $patient->delete();
    }
}
