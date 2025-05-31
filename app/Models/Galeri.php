<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name_acara',
        'image_acara',
        'date_acara',
        'description_acara',
    ];
}
