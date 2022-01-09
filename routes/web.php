<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/facebook', [SocialController::class, 'redirectFacebook'])->name('redirectFacebook');
Route::get('auth/facebook/callback', [SocialController::class, 'callbackFacebook'])->name('callbackFacebook');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
