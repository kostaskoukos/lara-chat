<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:225', 'unique:users,name'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'name.string' => 'Please enter a valid name',
            'name.max' => 'This name is too long',
            'name.unique' => 'This name is already taken',

            'email.required' => 'An email is required',
            'email.email' => 'Please enter a valid email',
            'email.unique' => 'This email is already taken',

            'password.required' => 'The password field is required',
            'password.string' => 'Please enter a valid password',
            'password.confirmed' => 'Please confirm your password',
            'password.min' => 'This password is too short',
        ];
    }
}
