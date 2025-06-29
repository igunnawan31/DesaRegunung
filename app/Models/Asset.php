<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_asset',
        'tipe_asset',
        'description_singkat',
        'description_asset',
        'gambar_asset',
        'gambar_asset2',
        'gambar_asset3',
        'gambar_asset4',
    ];
}
