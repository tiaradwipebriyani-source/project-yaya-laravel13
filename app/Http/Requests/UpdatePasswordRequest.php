<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Jika true pengguna sudah login jika false pengguana belum login
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'current_password' => ['required', 'string', 'current_password'],
            'password' => ['required', 'string', Password::defaults(), 'confirmed'],
        ];
    }

    /**
     * Kustomisasi pesan error dalam Bahasa Indonesia.
     */
    public function messages(): array
    {
        return [
            'current_password.required' => 'Password saat ini wajib diisi.',
            'current_password.current_password' => 'Password saat ini tidak cocok dengan catatan kami.',
            'password.required' => 'Password baru wajib diisi.',
            'password.min' => 'Password baru minimal harus :min karakter.',
            'password.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ];
    }

    /**
     * Kustomisasi nama atribut agar lebih ramah dibaca (Opsional).
     */
    public function attributes(): array
    {
        return [
            'current_password' => 'password saat ini',
            'password' => 'password baru',
        ];
    }
}
