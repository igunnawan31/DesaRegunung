<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $fillable = [
        'name_sejarah',
        'image_sejarah',
        'date_sejarah',
        'description1',
        'description2',
        'description3',
    ];
}
