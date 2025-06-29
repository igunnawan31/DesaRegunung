<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $Asset = Asset::orderBy('date_acara', 'desc')->paginate(8);
        return view("$lang.Asset", compact('Asset'));
    }

    public function indexasset()
    {
        $lang = app()->getLocale();
        $Assetposts = Asset::latest()->get();
        return view("$lang.sejarah", compact('Assetposts'));
    }

    public function getPaginatedAsset(Request $request)
    {
        $data = Asset::orderBy('date_acara', 'desc')->paginate(8);
        return response()->json($data);
    }

    public function show($lang, $id)
    {
        $asset = Asset::findOrFail($id);
        return view("$lang.assets", compact('asset'));
    }
}

