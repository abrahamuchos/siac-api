<?php

namespace App\Http\Requests\Appointments;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int idDoctor
 * @property int idMedicalUnit
 * @property string reason
 * @property string description
 * @property string date
 * @property string startTime
 * @property string endTime
 */
class UpdateRequest extends FormRequest
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
            'idDoctor' => 'numeric',
            'idMedicalUnit' => 'numeric',
            'reason' => 'string|required',
            'description' => 'string|required',
            'date' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
        ];
    }
}
