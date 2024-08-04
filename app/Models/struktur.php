<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struktur extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'struktur_organisasi';

    // Tentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'jabatan',
        'keterangan',
        'nama',
        'nip',
        'gambar',
    ];

    // Jika menggunakan timestamps (created_at dan updated_at)
    public $timestamps = false;
    
}
