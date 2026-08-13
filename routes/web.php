<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    $prestasi = Berita::latest()->take(4)->get();
    return view('welcome', compact('prestasi'));
});

Route::get('/dashboard', function () {
    return 'Selamat Datang di Dashboard ' . Auth::user()->name; 
})->middleware('auth');

Route::get('/portal-pembina', [AuthController::class, 'showLogin'])->name('login');
Route::post('/portal-pembina', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/profil', 'profil');
Route::view('/sdm', 'sdm');
Route::view('/fasilitas', 'fasilitas');
Route::view('/akademik', 'akademik');
Route::view('/ekstrakurikuler', 'ekstrakurikuler');
Route::view('/berita', 'berita');
Route::view('/kontak', 'kontak');