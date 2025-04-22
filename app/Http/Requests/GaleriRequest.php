<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
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
            'foto' => 'required|mimes:jpg,png,webp,jpeg',
          
        ];
    }

    public function messages()
    {
        return [

            'judul.required' => 'Caption Galeri wajib diisi !!!',
            'foto.required' => 'Foto Galeri wajib diisi !!!',
            'foto.mimes' => 'Format Foto Wajib JPEG, PNG, WEBP, JPEG',
           
            
           
        ];
    }
}
