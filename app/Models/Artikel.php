<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_artikel',
        'tanggal_rilis',
        'copyright_by',
        'gambar_1',
        'gambar_2',
        'gambar_3',
        'gambar_4',
        'description_1',
        'description_2',
        'description_3',
        'description_4',
        'description_5',
    ];
}
