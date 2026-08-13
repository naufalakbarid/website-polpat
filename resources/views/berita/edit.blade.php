@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <a href="{{ route('berita.index') }}" class="text-polpat hover:underline font-medium text-sm">&larr; Kembali ke Daftar Berita</a>
    <h2 class="text-2xl font-bold text-gray-800 mt-2">Edit Berita</h2>
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

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT') <!-- Wajib untuk metode Update -->
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Judul Berita</label>
            <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <select name="kategori" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">
                <option value="Prestasi" {{ old('kategori', $berita->kategori) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                <option value="Pengumuman" {{ old('kategori', $berita->kategori) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                <option value="Kegiatan" {{ old('kategori', $berita->kategori) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Konten Berita</label>
            <textarea name="konten" rows="6" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none">{{ old('konten', $berita->konten) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Foto (Opsional)</label>
            @if($berita->foto)
                <div class="mb-3 text-sm text-gray-500">
                    Foto saat ini terpasang. Unggah foto baru jika ingin menggantinya.
                </div>
            @endif
            <input type="file" name="foto" accept="image/jpeg, image/png, image/jpg" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-polpat focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-polpat hover:file:bg-orange-100">
        </div>

        <div class="flex justify-end pt-4 border-t">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg font-medium shadow-sm transition">
                Perbarui Berita
            </button>
        </div>
    </form>
</div>
@endsection