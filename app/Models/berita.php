<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',    
        'role_pemilik',
        'gambar',
        'tanggal',
        'jam',
        'deskripsi',
        'viewer',
    ];
    public $timestamps = false; // Nonaktifkan timestamps


    public function incrementViews()
    {
        $this->viewer += 1;
        $this->save();
    }
}
