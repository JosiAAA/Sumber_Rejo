<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_donasi extends Model
{
    use HasFactory;
    protected $table = 'list_donasi'; 
    protected $fillable = ['user_id', 'nominal'];
    public $timestamps = false;
}


