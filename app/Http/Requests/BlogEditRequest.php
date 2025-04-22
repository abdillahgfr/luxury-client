<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogEditRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     * 
     */
    public function rules()
    {
        return [
            
            
            'image' => 'mimes:webp,jpg',
           

        ];
    }

    public function messages()
    {
        return [
           
            'image.mimes' => 'Image Blog wajib webp atau jpg !',
            
        ];
    }
}
