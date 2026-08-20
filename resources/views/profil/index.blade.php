@extends('layouts.app')

@section('content')

<!-- HEADER HALAMAN -->
<section class="bg-gray-100 pt-32 pb-10">
    <div class="max-w-7xl mx-auto px-6">

        <h1 class="text-4xl font-bold text-gray-900">
            Profil Sekolah
        </h1>

        <div class="flex items-center gap-2 mt-3 text-sm">
            <span class="text-gray-600">Beranda</span>
            <span>›</span>
            <span class="text-blue-600 font-medium">Profil</span>
        </div>

    </div>
</section>


<!-- CONTENT -->
<section class="bg-white py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">


            <!-- SIDEBAR -->
            <aside class="lg:col-span-1">

                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">

                    <!-- Active -->
                    <a href="#sejarah"
                       class="flex items-center gap-4 px-5 py-4 bg-blue-900 text-white font-semibold">
                        <span>▣</span>
                        <span>Sejarah</span>
                    </a>

                    <a href="#visi"
                       class="flex items-center gap-4 px-5 py-4 border-b hover:bg-gray-50 transition">
                        <span>◎</span>
                        <span>Visi & Misi</span>
                    </a>

                    <a href="#tujuan"
                       class="flex items-center gap-4 px-5 py-4 border-b hover:bg-gray-50 transition">
                        <span>⚑</span>
                        <span>Tujuan</span>
                    </a>

                    <a href="#struktur"
                       class="flex items-center gap-4 px-5 py-4 border-b hover:bg-gray-50 transition">
                        <span>♧</span>
                        <span>Struktur Organisasi</span>
                    </a>

                    <a href="#pimpinan"
                       class="flex items-center gap-4 px-5 py-4 border-b bg-blue-50 text-blue-700 font-semibold">
                        <span>♙</span>
                        <span>Pimpinan Sekolah</span>
                    </a>

                    <a href="#prestasi"
                       class="flex items-center gap-4 px-5 py-4 border-b hover:bg-gray-50 transition">
                        <span>🏆</span>
                        <span>Prestasi</span>
                    </a>

                    <a href="#dokumen"
                       class="flex items-center gap-4 px-5 py-4 hover:bg-gray-50 transition">
                        <span>□</span>
                        <span>Dokumen</span>
                    </a>

                </div>


                <!-- INFO SEKOLAH -->
                <div class="mt-8 rounded-xl bg-blue-50 p-6 text-center">

                    <div class="text-5xl mb-4">
                        🏫
                    </div>

                    <h3 class="text-xl font-bold text-gray-900">
                        SD Polisi 4 Bogor
                    </h3>

                    <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                        Membentuk generasi cerdas, berkarakter,
                        dan berprestasi.
                    </p>

                    <div class="w-12 h-1 bg-blue-600 mx-auto mt-5 rounded-full"></div>

                </div>

            </aside>


            <!-- MAIN CONTENT -->
            <main class="lg:col-span-3">

                <div class="bg-white rounded-xl">

                    <!-- TITLE -->
                    <div class="mb-8">

                        <h2 class="text-3xl font-bold text-gray-900">
                            Pimpinan Sekolah
                        </h2>

                        <div class="w-12 h-1 bg-blue-600 mt-3 rounded-full"></div>

                        <p class="text-gray-600 mt-4">
                            Berikut adalah daftar pimpinan yang bertugas
                            di SD Polisi 4 Bogor.
                        </p>

                    </div>


                    <!-- CARD PIMPINAN -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">


                        <!-- CARD 1 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah.jpg') }}"
                                    alt="Kepala Sekolah"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-blue-600 text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 2 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('images/pimpinan/wakil-kepala.jpg') }}"
                                    alt="Wakil Kepala Sekolah"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-blue-600 text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 3 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('images/pimpinan/ketua-komite.jpg') }}"
                                    alt="Ketua Komite"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-blue-600 text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 4 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('images/pimpinan/bendahara.jpg') }}"
                                    alt="Bendahara"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Bendahara
                                </h3>

                                <p class="text-blue-600 text-sm mt-1">
                                    Bendahara Sekolah
                                </p>

                            </div>

                        </div>


                        <!-- CARD 5 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('images/pimpinan/koordinator-1.jpg') }}"
                                    alt="Koordinator"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Koordinator
                                </h3>

                                <p class="text-blue-600 text-sm mt-1">
                                    Koordinator Kurikulum
                                </p>

                            </div>

                        </div>


                        <!-- CARD 6 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('images/pimpinan/koordinator-2.jpg') }}"
                                    alt="Koordinator"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Koordinator
                                </h3>

                                <p class="text-blue-600 text-sm mt-1">
                                    Koordinator Kesiswaan
                                </p>

                            </div>

                        </div>


                    </div>

                </div>

            </main>

        </div>

    </div>

</section>

@endsection