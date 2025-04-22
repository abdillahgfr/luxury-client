<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
     protected $table = "blog";
     protected $primaryKey = 'id';
     protected $fillable = [
        'judul',
        'slug_judul', 
        'desc', 
        'image',
        'content',
        'author',
        'views'
    ];
    
}

 