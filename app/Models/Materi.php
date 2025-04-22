<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    //
    protected $table = 'materi_bimtek';
    protected $fillable = [
        'judul',
        'slug_judul',
        'kategori',
        'foto',
        'content',
        'pilihan_materi',
    ];
}
