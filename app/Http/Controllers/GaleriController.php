<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $galeri = Galeri::orderBy('date_acara', 'desc')->paginate(8);
        return view("$lang.galeri", compact('galeri'));
    }

    public function indexprofil()
    {
        $lang = app()->getLocale();
        $galeriposts = Galeri::latest()->take(4)->get();
        return view("$lang.profildesa", compact('galeriposts'));
    }

    public function getPaginatedGaleri(Request $request)
    {
        $data = Galeri::orderBy('date_acara', 'desc')->paginate(8);
        return response()->json($data);
    }

    public function show($id)
    {
        $item = Galeri::findOrFail($id);
        return response()->json([
            'id' => $item->id,
            'name_acara' => $item->name_acara,
            'image_acara' => asset('storage/' . $item->image_acara),
            'date_acara' => $item->date_acara,
            'description_acara' => $item->description_acara,
        ]);
    }
}

