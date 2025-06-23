<?php

use App\Http\Controllers\API\GaleriController;
use App\Http\Controllers\API\SejarahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

