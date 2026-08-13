@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <a href="{{ route('berita.index') }}" class="text-polpat hover:underline font-medium text-sm">&larr; Kembali ke Daftar Berita</a>
    <h2 class="text-2xl font-bold text-gray-800 mt-2">Tambah Berita Baru</h2>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-3xl">
    @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 text-sm border border-red-100">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Judul Berita</label>
            <input type="text" name="judul" value="{{ old('judul') }}" required placeholder="Contoh: Juara 1 Pramuka..." class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <select name="kategori" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
                <option value="">-- Pilih Kategori --</option>
                <option value="Prestasi" {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                <option value="Pengumuman" {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                <option value="Kegiatan" {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Konten Berita</label>
            <textarea name="konten" rows="6" required placeholder="Tuliskan isi berita di sini..." class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">{{ old('konten') }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Unggah Foto (Opsional)</label>
            <input type="file" name="foto" accept="image/jpeg, image/png, image/jpg" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-polpat hover:file:bg-orange-100">
            <p class="text-xs text-gray-500 mt-1">Format: JPG, JPEG, PNG. Maksimal ukuran: 2MB.</p>
        </div>    

        <div class="flex justify-end pt-4 border-t">
            <button type="submit" class="bg-polpat hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-medium shadow-sm transition">
                Simpan & Terbitkan
            </button>
        </div>
    </form>
</div>
@endsection