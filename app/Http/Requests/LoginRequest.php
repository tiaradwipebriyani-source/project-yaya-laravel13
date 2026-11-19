<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
     * @return array<string, Validation|array<mixed>|string>
     */
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
            'email.required' => 'Email Wajib Diisi.',
            'email.email' => 'Format Email Tidak Valid.',
            'password.required' => 'Password Wajib Diisi.',
        ];
    }
    public function authenticate(): void
    {
        if (!Auth::attempt($this->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => 'Email atau password yang Anda masukkan salah.',
            ]);
        }
        $this->session()->regenerate();
    }
}
