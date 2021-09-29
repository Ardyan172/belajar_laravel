<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    protected $table = 'komik';
    protected $fillable = [
        'judulKomik', 'penulis', 'penerbit', 'sampul'
    ];
}
