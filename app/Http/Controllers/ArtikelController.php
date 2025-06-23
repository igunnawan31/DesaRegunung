<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $artikel = Artikel::orderBy('tanggal_rilis')->paginate(8);
        return view("$lang.artikel", compact('artikel'));
    }

    public function show($lang, $id)
    {
        $artikel = Artikel::findOrFail($id);
        return view("$lang.artikels", compact('artikel'));
    }

    public function getPaginatedArtikel(Request $request)
    {
        $data = Artikel::orderBy('tanggal_rilis')->paginate(8);
        return response()->json($data);
    }
}

