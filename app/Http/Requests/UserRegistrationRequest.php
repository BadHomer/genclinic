<?php

namespace App\Http\Requests;

use App\Enums\SexEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserRegistrationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'second_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'login' => ['required', 'string', 'unique:users', 'max:32'],
            'password' => ['required', 'confirmed' ,Password::defaults()],
            'snils' => ['nullable', 'required', 'unique:patients', 'numeric'],
            'passport' => ['required', 'unique:patients', 'numeric'],
            'birthday' => ['required', 'date'],
            'sex' => ['required', Rule::in(['male', 'female']),],
            'email' => ['required', 'unique:users','email'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'unique:users', 'numeric'],
        ];
    }
}
