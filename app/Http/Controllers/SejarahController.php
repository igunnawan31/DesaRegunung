<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();

        $sejarah = Sejarah::orderBy('date_sejarah')->paginate(8, ['*'], 'sejarah');
        $Assetposts = Asset::latest()->paginate(8, ['*'], 'asset');

        return view("$lang.sejarah", compact('sejarah', 'Assetposts'));
    }

    public function show($lang, $id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view("$lang.sejarahs", compact('sejarah'));
    }

    public function indexasset()
    {
        $lang = app()->getLocale();
        $Assetposts = Asset::latest()->get();
        return view("$lang.sejarah", compact('Assetposts'));
    }

    public function getPaginatedSejarah(Request $request)
    {
        $data = Sejarah::orderBy('date_sejarah')->paginate(8);
        return response()->json($data);
    }
}

