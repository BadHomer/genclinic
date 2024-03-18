<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'speciality_id' => ['nullable', 'exists:specialities'],
            'user_id' => ['required', 'integer'],
            'photo_path' => ['required'],
        ];
    }
}
