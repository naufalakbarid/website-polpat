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

    public function store(Request $request) { /* Akan diisi di Tahap 2 */ }
    public function show(string $id) { /* Tidak dipakai */ }
    public function edit(string $id) { /* Akan diisi di Tahap 2 */ }
    public function update(Request $request, string $id) { /* Akan diisi di Tahap 2 */ }
    public function destroy(string $id) { /* Akan diisi di Tahap 2 */ }
}
