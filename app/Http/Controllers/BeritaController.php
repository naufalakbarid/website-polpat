<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with('user')->latest()->get();
        
        return view('berita.index', compact('berita'));
    }

    public function create() { /* Akan diisi di Epic 3 */ }
    public function store(Request $request) { /* Akan diisi di Epic 3 */ }
    public function show(string $id) { /* Opsional */ }
    public function edit(string $id) { /* Akan diisi di Epic 3 */ }
    public function update(Request $request, string $id) { /* Akan diisi di Epic 3 */ }
    public function destroy(string $id) { /* Akan diisi di Epic 3 */ }
}
