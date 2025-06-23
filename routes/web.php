<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KesanPesanController;
use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Redirect default root to ID
Route::get('/', fn() => redirect('/id'));

// Group for language prefix
Route::prefix('{lang}')
    ->where(['lang' => 'id|en'])
    ->middleware(['setlocale'])
    ->group(function () {
        
        Route::get('/', function ($lang) {
            return view("$lang.beranda");
        });

        Route::get('/sejarah', [SejarahController::class, 'index']);
        Route::get('/sejarah/{id}', [SejarahController::class, 'show']);

        Route::get('/artikel', [ArtikelController::class, 'index']);
        Route::get('/artikel/{id}', [ArtikelController::class, 'show']);

        Route::get('/galeri', [GaleriController::class, 'index']);
        Route::get('/galeri/{id}', [GaleriController::class, 'show']);

        Route::get('/profildesa', [GaleriController::class, 'indexprofil']);

        Route::get('/informasi', function ($lang) {
            return view("$lang.informasi");
        });

        Route::get('/umkm', function ($lang) {
            return view("$lang.umkm");
        });

        Route::get('/kesanpesan', [KesanPesanController::class, 'index'])->name('kesanpesan.index');
        Route::post('/kesanpesan', [KesanPesanController::class, 'store'])->name('kesanpesan.store');

        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])->group(function () {
            Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
        });
    });
