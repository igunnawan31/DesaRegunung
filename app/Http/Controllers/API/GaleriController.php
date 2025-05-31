<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        return response()->json(
            Galeri::all()->map(function ($item) {
                $item->image_acara = asset('storage/' . $item->image_acara);
                return $item;
            })
        );
    }

    public function indexPagination(Request $request)
    {
        $perPage = $request->input('per_page', 12);
        $galeri = Galeri::paginate($perPage);

        $galeri->getCollection()->transform(function ($item) {
            $item->image_acara = asset('storage/' . $item->image_acara);
            return $item;
        });

        return response()->json($galeri);
    }

    public function show($id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $galeri->image_acara = asset('storage/' . $galeri->image_acara);
        
        return response()->json($galeri);
    }
}
