<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:50',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email Wajib Diisi !',
            'name.required' => 'Nama Lengkap Wajib Diisi !',
            'password.required' => 'Password Wajib Diisi !',
            'password.confirmed' => 'Konfirmasi Password Tidak Sama !'
        ];
    }
}
