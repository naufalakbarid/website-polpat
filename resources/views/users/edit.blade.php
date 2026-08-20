@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <a href="{{ route('users.index') }}" class="text-polpat hover:underline font-medium text-sm">&larr; Kembali ke Daftar Akun</a>
    <h2 class="text-2xl font-bold text-gray-800 mt-2">Edit Akun Admin</h2>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-2xl">
    @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 text-sm border border-red-100">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Password</label>
            <input type="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
            <p class="text-xs text-gray-500 mt-1">Isi minimal 8 karakter jika ingin mengganti sandi.</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Wewenang (Role)</label>
            <select name="role" id="role" onchange="toggleEkskul()" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
                <option value="super_admin" {{ $user->role == 'super_admin' ? 'selected' : '' }}>Super Admin</option>
                <option value="admin_ekskul" {{ $user->role == 'admin_ekskul' ? 'selected' : '' }}>Admin Ekskul</option>
            </select>
        </div>

        <div id="ekskul_container" style="{{ $user->role == 'admin_ekskul' ? 'display:block;' : 'display:none;' }}">
            <label class="block text-sm font-medium text-gray-700 mb-1">Tugaskan ke Ekstrakurikuler</label>
            <select name="ekskul_id" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
                <option value="">-- Pilih Ekstrakurikuler --</option>
                @foreach($ekskul as $item)
                    <option value="{{ $item->id }}" {{ $user->ekskul_id == $item->id ? 'selected' : '' }}>{{ $item->nama_ekskul }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end pt-4 border-t">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg font-medium shadow-sm transition">
                Perbarui Akun
            </button>
        </div>
    </form>
</div>

<script>
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