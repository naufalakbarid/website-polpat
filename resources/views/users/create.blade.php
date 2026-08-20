@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <a href="{{ route('users.index') }}" class="text-polpat hover:underline font-medium text-sm">&larr; Kembali ke Daftar Akun</a>
    <h2 class="text-2xl font-bold text-gray-800 mt-2">Daftarkan Admin Baru</h2>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-2xl">
    @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 text-sm border border-red-100">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password Sementara</label>
            <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Wewenang (Role)</label>
            <select name="role" id="role" onchange="toggleEkskul()" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
                <option value="">-- Pilih Wewenang --</option>
                <option value="admin_ekskul">Admin Ekskul</option>
                <option value="super_admin">Super Admin</option>
            </select>
        </div>

        <!-- Disembunyikan secara default, akan muncul lewat Javascript -->
        <div id="ekskul_container" style="display: none;">
            <label class="block text-sm font-medium text-gray-700 mb-1">Tugaskan ke Ekstrakurikuler</label>
            <select name="ekskul_id" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
                <option value="">-- Pilih Ekstrakurikuler --</option>
                @foreach($ekskul as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_ekskul }}</option>
                @endforeach
            </select>
            <p class="text-xs text-gray-500 mt-1">Kosongkan jika mendaftarkan Super Admin.</p>
        </div>

        <div class="flex justify-end pt-4 border-t">
            <button type="submit" class="bg-polpat hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-medium shadow-sm transition">
                Daftarkan Akun
            </button>
        </div>
    </form>
</div>

<script>
    // Logika Javascript untuk memunculkan dropdown ekskul
    function toggleEkskul() {
        const role = document.getElementById('role').value;
        const ekskulContainer = document.getElementById('ekskul_container');
        if (role === 'admin_ekskul') {
            ekskulContainer.style.display = 'block';
        } else {
            ekskulContainer.style.display = 'none';
        }
    }
</script>
@endsection