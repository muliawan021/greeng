<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'userId', 'judul', 'isiArtikel',
    ];
}
