<?php

namespace App\Http\Resources;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Visit */
class VisitResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'department_id' => $this->department_id,
            'visit_date' => $this->visit_date,
            'queue_number' => $this->queue_number,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'patient_id' => $this->patient_id,
            'doctor_id' => $this->doctor_id,

            'patient' => new PatientResource($this->whenLoaded('patient')),
        ];
    }
}
