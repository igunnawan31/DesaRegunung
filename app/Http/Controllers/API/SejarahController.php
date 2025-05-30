<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        return response()->json(Sejarah::all());
    }

    public function show($id)
    {
        $sejarah = Sejarah::find($id);

        if (!$sejarah) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return response()->json($sejarah);
    }
}
