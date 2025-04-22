<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KontakRequest extends FormRequest
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
            'nama' => 'required',
             'email' => 'required',
              'no_telp' => 'required|numeric|min:11',
               'perihal' => 'required',
                'pesan' => 'required|max:1000',
             
           
        
        ];
    }

    public function messages()
    {
        return [

            'nama.required' => 'Nama wajib diisi !!!',
             'email.required' => 'Email wajib diisi !!!',
              'no_telp.required' => 'No Telp / WhatsApp wajib diisi !!!',
              'no_telp.numeric' => 'No Telp / WhatsApp wajib Angka !!!',
                 'no_telp.min' => 'No Telp / WhatsApp Minimal 11 Nomor!!!',
               'perihal.required' => 'Perihal wajib diisi !!!',
               'pesan.required' => 'Pesan wajib diisi !!!',
            
            
           
        ];
    }
}
