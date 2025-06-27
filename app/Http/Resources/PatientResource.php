<?php

namespace App\Http\Resources;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Patient */
class PatientResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ihs' => $this->ihs,
            'medical_record_number' => $this->medical_record_number,
            'name' => $this->name,
            'nik' => $this->nik,
            'bpjs_number' => $this->bpjs_number,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'register_at' => $this->register_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
