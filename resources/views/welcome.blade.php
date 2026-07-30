@extends('layouts.app')

@section('content')
    <!-- BLOK 2: Hero Banner (Poster PPDB & Sekolah) -->
    <div class="container-fluid p-0 mb-5">
        <div class="bg-light text-center py-5" style="background-color: #e9ecef;">
            <h1 class="display-5 fw-bold text-polpat">Selamat Datang di SD Polisi 4 Bogor</h1>
            <p class="lead">Sekolah Berprestasi, Berkarakter, dan Berwawasan Global.</p>
            <!-- Simulasi Tombol Poster PPDB -->
            <a href="https://ppdb.dinas.contoh" target="_blank" rel="noopener noreferrer" class="btn btn-polpat btn-lg mt-3 shadow">
                INFO PENDAFTARAN PPDB ONLINE
            </a>
        </div>
    </div>

    <div class="container">     
           <!-- BLOK 3: Highlight Info Juara -->
        <div class="row mb-5">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold border-polpat">Info Juara & Prestasi</h3>
            </div>
            
            @foreach ($prestasi as $item)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-img-top bg-secondary text-white text-center py-4">Foto Ilustrasi Lomba</div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
                        <p class="card-text text-muted small">{{ $item->konten }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- BLOK 4: Sambutan Kepala Sekolah (30/70) -->
        <div class="row align-items-center mb-5 bg-white p-4 shadow-sm rounded">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <div class="bg-secondary rounded-circle mx-auto" style="width: 200px; height: 200px;">
                    <!-- Foto Kepsek -->
                </div>
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold text-polpat">Sambutan Kepala Sekolah</h4>
                <p>Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa. Kami berkomitmen untuk terus meningkatkan kualitas pendidikan di SD Polisi 4 Bogor dengan memadukan nilai-nilai karakter dan pemanfaatan teknologi modern...</p>
                <button class="btn btn-outline-secondary btn-sm">Baca Selengkapnya</button>
            </div>
        </div>
    </div>
@endsection