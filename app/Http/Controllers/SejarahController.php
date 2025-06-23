<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $sejarah = Sejarah::orderBy('date_sejarah')->paginate(8);
        return view("$lang.sejarah", compact('sejarah'));
    }

    public function show($lang, $id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view("$lang.sejarahs", compact('sejarah'));
    }

    public function getPaginatedSejarah(Request $request)
    {
        $data = Sejarah::orderBy('date_sejarah')->paginate(8);
        return response()->json($data);
    }
}

