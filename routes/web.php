<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Berita;

Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    $prestasi = Berita::latest()->take(4)->get();
    return view('welcome', compact('prestasi'));
});

Route::view('/profil', 'profil');
Route::view('/sdm', 'sdm');
Route::view('/fasilitas', 'fasilitas');
Route::view('/akademik', 'akademik');
Route::view('/ekstrakurikuler', 'ekstrakurikuler');
Route::view('/berita', 'berita');
Route::view('/kontak', 'kontak');