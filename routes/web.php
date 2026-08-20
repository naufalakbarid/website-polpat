<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    $prestasi = Berita::latest()->take(4)->get();
    return view('welcome', compact('prestasi'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::resource('dashboard/berita', BeritaController::class)->middleware('auth');

Route::resource('dashboard/users', UserController::class)->middleware(['auth', 'role:super_admin']);

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
Route::view('/profil-sekolah', 'profil.index')->name('profil.sekolah');