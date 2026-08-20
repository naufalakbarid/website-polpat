@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Manajemen Akun Admin</h2>
    <a href="{{ route('users.create') }}" class="bg-polpat hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-medium shadow-sm transition">
        + Tambah Admin Baru
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6">
        <span class="block sm:inline font-medium">{{ session('success') }}</span>
    </div>
@endif

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 text-sm uppercase tracking-wider">
                <th class="p-4 font-semibold">Nama & Email</th>
                <th class="p-4 font-semibold">Wewenang (Role)</th>
                <th class="p-4 font-semibold">Penanggung Jawab</th>
                <th class="p-4 font-semibold text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($users as $user)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4">
                    <div class="font-medium text-gray-800">{{ $user->name }}</div>
                    <div class="text-sm text-gray-500">{{ $user->email }}</div>
                </td>
                <td class="p-4">
                    @if($user->role === 'super_admin')
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Super Admin</span>
                    @else
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Admin Ekskul</span>
                    @endif
                </td>
                <td class="p-4 text-sm text-gray-600">
                    {{ $user->ekskul ? $user->ekskul->nama_ekskul : 'Semua Sistem (Global)' }}
                </td>
                <td class="p-4 flex justify-center gap-2">
                    <!-- Tombol Edit/Hapus akan kita aktifkan di iterasi berikutnya -->
                    <button class="bg-gray-100 text-gray-400 px-3 py-1 rounded-lg text-sm font-medium cursor-not-allowed">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection