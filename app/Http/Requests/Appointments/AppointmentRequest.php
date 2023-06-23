<?php

namespace App\Http\Requests\Appointments;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'idPatient' => 'required|numeric',
            'idDoctor' => 'required|numeric',
            'idMedicalUnit' => 'required|numeric',
            'reason' => 'required|string|max:100',
            'description' => 'required|string|max:350',
            'date' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
        ];
    }
}
