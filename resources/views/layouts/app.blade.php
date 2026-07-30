<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Polisi 4 Bogor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #F8F9FA; color: #333333; }
        .text-polpat { color: #F26522; }
        .bg-polpat { background-color: #F26522; color: white; }
        .btn-polpat { background-color: #F26522; color: white; border: none; }
        .btn-polpat:hover { background-color: #d9561a; color: white; }
        .border-polpat { border-bottom: 3px solid #F26522; display: inline-block; padding-bottom: 5px; }
    </style>
</head>
<body>

    <!-- BLOK 1: Header & Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-polpat" href="/">SD POLISI 4 BOGOR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ekstrakurikuler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN  -->
    <main>
        @yield('content')
    </main>

    <!-- BLOK 6: Footer -->
    <footer class="bg-dark text-white pt-5 pb-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2026 SD Polisi 4 Kota Bogor. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>