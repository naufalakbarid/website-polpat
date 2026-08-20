<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('ekskul')->latest()->get();
        
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $ekskul = Ekskul::all();
        
        return view('users.create', compact('ekskul'));
    }

public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:super_admin,admin_ekskul',
            'ekskul_id' => 'nullable|exists:ekskuls,id'
        ]);

        if ($validated['role'] === 'super_admin') {
            $validated['ekskul_id'] = null;
        } else if ($validated['role'] === 'admin_ekskul' && empty($validated['ekskul_id'])) {
            return back()->withErrors(['ekskul_id' => 'Peringatan: Admin Ekskul wajib ditugaskan ke salah satu ekstrakurikuler!'])->withInput();
        }

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'Akun admin baru berhasil didaftarkan dan dienkripsi!');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $ekskul = Ekskul::all();
        
        return view('users.edit', compact('user', 'ekskul'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8', // Boleh kosong
            'role' => 'required|in:super_admin,admin_ekskul',
            'ekskul_id' => 'nullable|exists:ekskuls,id'
        ]);

        if ($validated['role'] === 'super_admin') {
            $validated['ekskul_id'] = null;
        } else if ($validated['role'] === 'admin_ekskul' && empty($validated['ekskul_id'])) {
            return back()->withErrors(['ekskul_id' => 'Peringatan: Admin Ekskul wajib ditugaskan ke salah satu ekstrakurikuler!'])->withInput();
        }

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'Data akun admin berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        
        if (auth()->id() === $user->id) {
            abort(403, 'TINDAKAN ILEGAL: Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Akses admin berhasil dicabut!');
    }
}
