<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        return view('sejarah');
    }

    public function show($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('sejarahs', compact('sejarah'));
    }
}
