<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoRequest extends FormRequest
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
            //
              'nama'  => 'required',
              'email'  => 'required',
              'no_telp'  => 'required',
              'tgl_pelaksanaan'  => 'required',
              'origin' => 'required',
              'paket' => 'required',
              'person' => 'required',
              'item' => 'required',
        ];
    }
    
    public function messages(){
        return [
            'nama.required'  => 'Name Required !!!',
            'email.required'  => 'Email Required !!!',
            'no_telp.required'  => 'Phone Number Required !!!',
            'origin.required'  => 'Country Required !!!',
            'tgl_pelaksanaan.required'  => 'Implementation date Required !!!',
            'paket.required' => 'Package Required !!!',
            'person.required' => 'Person Required !!!',
              
            ];
    }
}
