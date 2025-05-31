<?php

use App\Http\Controllers\API\GaleriController;
use App\Http\Controllers\API\SejarahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sejarah', [SejarahController::class, 'index']);
Route::get('/sejarah/{id}', [SejarahController::class, 'show']);

Route::get('/galeri', [GaleriController::class, 'indexPagination']);
Route::get('/galeri/{id}', [GaleriController::class, 'show']);
