<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'patient_id' => ['required', 'exists:patients,id'],
            'doctor_id' => ['required', 'exists:users,id'],
            'department_id' => ['required', 'integer'],
            'visit_date' => ['required', 'date']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
