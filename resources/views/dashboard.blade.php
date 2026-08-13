@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang!</h1>
    <p class="text-gray-600">
        Anda masuk sebagai <span class="font-semibold text-polpat">{{ Auth::user()->name }}</span>. Pilih menu di sebelah kiri untuk mulai mengelola konten sistem.
    </p>
</div>
@endsection