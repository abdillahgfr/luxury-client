<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalUpdateRequest extends FormRequest
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
     * @return array
     */
   public function rules()
    {
        return [
            'judul' => 'required',
            'foto' => 'mimes:jpg,png,webp,jpeg',
            'content' => 'required',
        
        ];
    }

    public function messages()
    {
        return [

            'judul.required' => 'Judul Materi wajib diisi !!!',
           
            'foto.mimes' => 'Format Foto Wajib JPEG, PNG, WEBP, JPEG',
            'content.required' => 'Konten wajib diisi !!!',
            
           
        ];
    }
}
