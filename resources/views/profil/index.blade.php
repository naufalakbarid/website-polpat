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
            <span class="text-[#F58549] font-medium">Profil</span>
        </div>

    </div>
</section>


<!-- CONTENT -->
<section class="bg-white py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">


                <!-- INFO SEKOLAH -->
                <div class="mt-8 rounded-xl bg-blue-50 p-6 text-center">

                    <div class="mb-4 flex justify-center">
                    <img
                        src="{{ asset('images/logo-sekolah.png') }}"
                        alt="Logo SDN Polisi 4 Bogor"
                        class="w-24 h-24 object-contain"
    >
                    </div>

                    <h3 class="text-xl font-bold text-gray-900">
                        SDN Polisi 4 Bogor
                    </h3>

                    <p class="text-gray-600 text-sm mt-3 leading-relaxed">
                        Membentuk generasi cerdas, berkarakter,
                        dan berprestasi.
                    </p>

                    <div class="w-12 h-1 bg-[#F58549] mx-auto mt-5 rounded-full"></div>

                </div>

            </aside>


            <!-- MAIN CONTENT -->
            <main class="lg:col-span-3">

                <div class="bg-white rounded-xl">

                    <section id="visi-misi" class="py-20 scroll-mt-24">
                    <!-- Visi -->
                    <div class="mb-8">

                        <h2 class="text-3xl font-bold text-gray-900">
                            Visi
                        </h2>

                        <div class="w-12 h-1 bg-[#F58549] mt-3 rounded-full"></div>

                        <p class="text-gray-600 mt-4">
                            Visi SDN Polisi 4 Bogor.
                        </p>

                    </div>

                    <!-- Misi -->
                    <div class="mb-8">

                        <h2 class="text-3xl font-bold text-gray-900">
                            Misi
                        </h2>

                        <div class="w-12 h-1 bg-[#F58549] mt-3 rounded-full"></div>

                        <p class="text-gray-600 mt-4">
                            <ul>
                                <li> 1. </li>
                                <li> 2. </li>
                                <li> 3. </li>
                            </ul>
                        </p>

                    </div>
                    </section>

                    <section id="sejarah-kepemimpinan" class="py-20 scroll-mt-24">
                    <!-- Sejarah Kepemimpinan -->
                    <div class="mb-8">

                        <h2 class="text-3xl font-bold text-gray-900">
                            Sejarah Kepemimpinan
                        </h2>

                        <div class="w-12 h-1 bg-[#F58549] mt-3 rounded-full"></div>

                        <p class="text-gray-600 mt-4">
                            Berikut merupakan daftar kepala sekolah yang pernah memimpin SDN Polisi 4 Bogor dari masa ke masa.
                        </p>

                    </div>


                    <!-- CARD PIMPINAN -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">


                        <!-- CARD 1 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah1.jpg') }}"
                                    alt="Kepala Sekolah 1"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-[#F58549] text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 2 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah2.jpg') }}"
                                    alt="Kepala Sekolah 2"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-[#F58549] text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 3 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah3.jpg') }}"
                                    alt="Kepala Sekolah 3"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-[#F58549] text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 4 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah4.jpg') }}"
                                    alt="Kepala Sekolah 4"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-[#F58549] text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 5 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah5.jpg') }}"
                                    alt="Kepala Sekolah 5"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-[#F58549] text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                        <!-- CARD 6 -->
                        <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition">

                            <div class="aspect-[4/3] bg-gray-200">
                                <img
                                    src="{{ asset('storage/foto_profil/kepala-sekolah6.jpg') }}"
                                    alt="Kepala Sekolah"
                                    class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 text-center">

                                <h3 class="font-bold text-gray-900">
                                    Nama Kepala Sekolah
                                </h3>

                                <p class="text-[#F58549] text-sm mt-1">
                                    Kepala Sekolah Tahun 20**-20**
                                </p>

                            </div>

                        </div>


                    </div>

                </div>

            </main>
            </section>

        </div>

    </div>

</section>

@endsection