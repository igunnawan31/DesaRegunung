<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesanPesan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'asal', 'kesan_pesan_id','kesan_pesan_en'];
}
