<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use App\Services\PatientService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\Routing\Attribute\Route;

class PatientController extends Controller
{
    use AuthorizesRequests;

    public function __construct(public PatientService $patientService)
    {
    }

    public function index()
    {
        $this->authorize('viewAny', Patient::class);

        return PatientResource::collection(Patient::all());
    }

    public function store(PatientRequest $request)
    {
        $this->authorize('create', Patient::class);

        $patients = $this->patientService->createPatient($request->validated());

        return new PatientResource($patients);
    }

    public function show(Patient $patient)
    {
        $this->authorize('view', $patient);

        return new PatientResource($patient);
    }

    public function update(PatientRequest $request, Patient $patient)
    {
        $this->authorize('update', $patient);

        $this->patientService->updatePatient($patient, $request->validated());

        return new PatientResource($patient);
    }

    public function destroy(Patient $patient)
    {
        $this->authorize('delete', $patient);

        $this->patientService->deletePatient($patient);

        return response()->json();
    }
}
