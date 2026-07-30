<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $prestasi = Berita::where('kategori', 'Prestasi')->latest()->take(3)->get();

        return view('welcome', compact('prestasi'));
    }
}