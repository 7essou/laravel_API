<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CorsMiddleware;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function(){
Route::get('/logout',[logoutController::class,'logout']);
});
Route::apiResource('reservation',ReservationController::class);
Route::apiResource('review',ReviewController::class);
Route::apiResource('image',ImageController::class);
Route::apiResource('user',UserController::class);
Route::apiResource('artist',ArtistController::class);
Route::post('/auth',[AuthController::class,'Auth']);