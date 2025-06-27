<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PatientRequest extends FormRequest
{
    public function rules(): array
    {
        $isStore = $this->routeIs('patients.store');

        return [
            'name' => ['required'],
            'ihs' => ['nullable'],
            'medical_record_number' => ['nullable'],
            'nik' => ['required', Rule::requiredIf($isStore)],
            'bpjs_number' => ['required', Rule::requiredIf($isStore)],
            'birth_date' => ['required', 'date', Rule::requiredIf($isStore)],
            'gender' => ['required', Rule::requiredIf($isStore)],
            'address' => ['required', Rule::requiredIf($isStore)],
            'phone' => ['required', Rule::requiredIf($isStore)],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
