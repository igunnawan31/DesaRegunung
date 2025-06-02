<?php

namespace App\Http\Controllers;

use App\Models\KesanPesan;
use Illuminate\Http\Request;

class KesanPesanController extends Controller
{
    public function index()
    {
        $komentar = KesanPesan::latest()->paginate(10);
        return view('kesanpesan', compact('komentar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'kesan_pesan' => 'required|string',
        ]);

        KesanPesan::create($validated);

        return redirect()->route('kesanpesan.index')->with('success', 'Terima kasih atas kesan dan pesan Anda!');
    }
}
