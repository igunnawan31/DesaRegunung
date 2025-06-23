<?php

namespace App\Http\Controllers;

use App\Models\KesanPesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class KesanPesanController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $komentar = KesanPesan::latest()->paginate(10);
        return view("$lang.kesanpesan", compact('komentar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'kesan_pesan' => 'required|string',
        ]);

        $originalLang = app()->getLocale();
        $translatedLang = $originalLang === 'id' ? 'en' : 'id';

        $translatedText = $this->translateText($validated['kesan_pesan'], $originalLang, $translatedLang);

        $data = [
            'nama' => $validated['nama'],
            'asal' => $validated['asal'],
            'kesan_pesan_id' => $originalLang === 'id' ? $validated['kesan_pesan'] : $translatedText,
            'kesan_pesan_en' => $originalLang === 'en' ? $validated['kesan_pesan'] : $translatedText,
        ];

        KesanPesan::create($data);

        return redirect()->route('kesanpesan.index', ['lang' => $originalLang])
            ->with('success', 'Terima kasih atas kesan dan pesan Anda!');
    }

    public function translateText($text, $source, $target) {
        try {
            $response = Http::timeout(10)->post('http://localhost:5050/translate', [
                'q' => $text,
                'source' => $source,
                'target' => $target,
                'format' => 'text',
            ]);

            if ($response->successful()) {
                Log::info('Translate request', compact('text', 'source', 'target'));
                Log::info('Translate response', ['body' => $response->body()]);
                return $response->json()['translatedText'] ?? $text;
            } else {
                Log::error('Translation failed', ['response' => $response->body()]);
                return $text;
            }
        } catch (\Exception $e) {
            Log::error('Translation error: ' . $e->getMessage());
            return $text;
        }
    }
}

