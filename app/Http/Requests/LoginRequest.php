<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authenticate()
    {
        if (auth()->attempt($this->only('email', 'password'))) {

            $this->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()
                ->withInput()
                ->withErrors(['attempt' => "could not match the above credentials with an existing user"]);
        }
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'The email field is required',
            'email.string' => 'Please enter a valid email address',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'This email address is already taken',

            'password.required' => 'The password field is required',
            'password.string' => 'Please enter a valid password',
        ];
    }
}
