<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PO extends Model
{
    //
    protected $table = 'po_online';
    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'origin',
        'tgl_pelaksanaan',
        'paket',
        'person',
        'item',
        'content',
        'discount'

    ];
}
