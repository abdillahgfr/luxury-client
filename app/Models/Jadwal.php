<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table = 'jadwal_bimtek';
     protected $fillable = [
        'judul',
        'slug_judul',
        'foto',
        'content'
       
    ];
}
