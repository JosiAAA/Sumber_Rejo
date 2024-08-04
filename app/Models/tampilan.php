<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tampilan extends Model
{
    protected $table = 'tampilan';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
