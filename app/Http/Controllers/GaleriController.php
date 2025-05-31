<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeriposts = Galeri::latest()->take(4)->get();

        return view('profildesa', compact('galeriposts'));
    }

}
