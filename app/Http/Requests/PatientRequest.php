<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'medical_record_number' => ['required'],
            'name' => ['required'],
            'nik' => ['required'],
            'bpjs_number' => ['required'],
            'birth_date' => ['required', 'date'],
            'gender' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
