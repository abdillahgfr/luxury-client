<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            
            'judul' => 'required',
            'author' => 'required',
            'content' => 'required',
            'desc' => 'required|max:500',
            'image' => 'required|mimes:webp,jpg',
           

        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul Blog Wajib Diisi !',
            'author.required' => 'Author Tidak Ditemukan !',
            'desc.required' => 'Deksripsi Wajib Diisi !!',
            'desc.max' => 'Deksripsi Minimal 500 Karakter !!',
            'content.required' => 'Konten Wajib Diisi !!',
            'image.required' => 'Image Blog Wajib Diisi !',
            'image.mimes' => 'Image Blog wajib webp atau jpg !',
            
        ];
    }
}
