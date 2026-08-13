<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'super_admin') {
            $berita = Berita::with('user')->latest()->get();
        } else {
            $berita = Berita::with('user')->where('user_id', Auth::id())->latest()->get();
        }
        
        return view('berita.index', compact('berita'));
    }

    public function create()
    {
        return view('berita.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'konten' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $validated['user_id'] = Auth::id();

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('foto_berita', 'public');
            $validated['foto'] = $path;
        }

        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Berita beserta foto berhasil diterbitkan!');
    }
    public function show(string $id) { /* Opsional */ }
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        
        if (Auth::user()->role !== 'super_admin' && $berita->user_id !== Auth::id()) {
            abort(403, 'AKSES DITOLAK: Anda hanya boleh mengedit berita dari ekstrakurikuler Anda sendiri.');
        }

        return view('berita.edit', compact('berita'));
    }

    public function update(Request $request, string $id)
    {
        $berita = Berita::findOrFail($id);

        if (Auth::user()->role !== 'super_admin' && $berita->user_id !== Auth::id()) {
            abort(403, 'AKSES DITOLAK: Modifikasi ilegal terdeteksi.');
        }

        $validated = $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'konten' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }
            $path = $request->file('foto')->store('foto_berita', 'public');
            $validated['foto'] = $path;
        }

        $berita->update($validated);
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        if (Auth::user()->role !== 'super_admin') {
            abort(403, 'AKSES DITOLAK: Fitur hapus data hanya dapat dilakukan oleh Super Administrator.');
        }

        $berita = Berita::findOrFail($id);
        
        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }
        
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus permanen!');
    }
}
