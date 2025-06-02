<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KesanPesanController;
use App\Http\Controllers\SejarahController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return view('beranda');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/profildesa', function () {
    return view('profildesa');
});

Route::get('/umkm', function () {
    return view('umkm');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/sejarahs', function() {
    return view('sejarah'); 
});

Route::get('/sejarah/{id}', function($id) {
    return view('sejarahs', ['id' => $id]); 
});

Route::get('/kesanpesan', function() {
    return view('kesanpesan');
});

Route::get('/profildesa', [GaleriController::class, 'index']);

Route::get('/sejarahs', [SejarahController::class, 'index']);
Route::get('/sejarah/{id}', [SejarahController::class, 'show']);

Route::get('/kesanpesan', [KesanPesanController::class, 'index'])->name('kesanpesan.index');
Route::post('/kesanpesan', [KesanPesanController::class, 'store'])->name('kesanpesan.store');