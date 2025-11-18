<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthSocialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/line', [AuthSocialController::class, 'redirectToProvider'])->name('redirect.line');
Route::get('login/line/callback', [AuthSocialController::class, 'handleLineCallback']);


// Route::get('/auth/google','redirect')->name('auth.google.redirect');
// Route::get('/auth/google/callback','callback')->name('auth.google.callback');
