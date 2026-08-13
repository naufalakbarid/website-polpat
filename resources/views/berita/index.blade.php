@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6" role="alert">
        <span class="block sm:inline font-medium">{{ session('success') }}</span>
    </div>
    @endif
    <h2 class="text-2xl font-bold text-gray-800">Manajemen Berita & Prestasi</h2>
    <a href="{{ route('berita.create') }}" class="bg-polpat hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-medium shadow-sm transition">
        + Tambah Berita Baru
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 text-sm uppercase tracking-wider">
                <th class="p-4 font-semibold">Judul Berita</th>
                <th class="p-4 font-semibold">Kategori</th>
                <th class="p-4 font-semibold">Penulis</th>
                <th class="p-4 font-semibold">Tanggal</th>
                <th class="p-4 font-semibold text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($berita as $item)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 text-gray-800 font-medium">{{ $item->judul }}</td>
                <td class="p-4 text-sm text-gray-500">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">{{ $item->kategori }}</span>
                </td>
                <td class="p-4 text-sm text-gray-600">{{ $item->user->name }}</td>
                <td class="p-4 text-sm text-gray-600">{{ $item->created_at->format('d M Y') }}</td>
                <td class="p-4 flex justify-center gap-2">
                    <a href="{{ route('berita.edit', $item->id) }}" class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-lg text-sm font-medium hover:bg-yellow-200 transition">Edit</a>                    
                    @if(Auth::user()->role === 'super_admin')
                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini secara permanen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-100 text-red-700 px-3 py-1 rounded-lg text-sm font-medium hover:bg-red-200 transition">Hapus</button>
                    </form>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-8 text-center text-gray-500">Belum ada berita yang diterbitkan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection