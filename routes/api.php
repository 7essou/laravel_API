<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('user',UserController::class);
Route::apiResource('artist',ArtistController::class);
Route::apiResource('reservation',ReservationController::class);
Route::apiResource('review',ReviewController::class);
Route::apiResource('image',ImageController::class);
