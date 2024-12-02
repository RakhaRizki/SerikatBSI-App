@extends('layouts.app')

@section('title', 'Serikat Pekerja BSI')

@section('content')

    <body class="flex flex-col min-h-screen">

        <!-- Hero Section -->
        <section id="hero" class="text-white py-12 sm:py-20" style="background-color: #00A59F;">
            <div class="max-w-screen-xl mx-auto px-4 flex flex-col items-center justify-center lg:flex-row lg:space-x-8">
                <!-- Left Image/Illustration (on laptop and larger, image is on the left) -->
                <div class="w-full lg:w-1/2 mb-8 lg:mb-0 lg:mr-8"> <!-- Added margin-right for spacing -->
                    <img src="{{ asset('img/hero.jpg') }}" alt="Hero Image" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <!-- Right Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 text-white">Serikat Pekerja Bank BSI</h1>
                    <p class="text-lg sm:text-xl mb-8 leading-relaxed">
                        Serikat Pekerja adalah
                        Organisasi yang dibentuk dari, oleh, dan untuk pekerja baik di perusahaan maupun di luar perusahaan,
                        yang bersifat bebas, terbuka, mandiri, demokratis, & bertanggung jawab guna memperjuangkan, membela
                        serta melindungi hak dan kepentingan pekerja serta meningkatkan kesejahteraan pekerja & keluarganya.
                    </p>
                    <div class="text-center lg:text-left">
                        <a href="#overview"
                            class="inline-block bg-[#F7AE48] text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:shadow-xl hover:scale-105 transform transition-all duration-300 no-underline">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <main class="flex-grow">

            <!-- Overview Section -->
            <section id="overview" class="py-16 bg-green-50">
                <div class="max-w-screen-xl mx-auto text-center px-4">
                    <h2 class="text-4xl font-extrabold text-green-600 mb-8 sm:mt-12">Overview Serikat Pekerja Bank BSI</h2>
                    <p class="text-lg sm:text-xl text-gray-700 mb-12 leading-relaxed">
                        Serikat Pekerja Bank BSI adalah organisasi yang bertujuan untuk memperjuangkan hak-hak pekerja di
                        Bank BSI,
                        menjaga hubungan industrial yang harmonis, serta meningkatkan kesejahteraan anggota.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
                        <!-- Vision Card -->
                        <div
                            class="relative bg-gradient-to-br from-white via-green-50 to-green-100 p-8 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border-l-4 border-green-600">
                            <div
                                class="absolute -top-4 -left-4 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-bullseye fa-lg"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-green-600 mb-4 mt-6">Visi</h3>
                            <p class="text-lg text-gray-700 mb-4">
                                Meningkatkan Kesejahteraan Pegawai melalui Peningkatan Kinerja Perusahaan
                            </p>
                            <p class="text-lg text-gray-700 mb-4">
                                <strong>Pegawai & Perusahaan:</strong>
                                Terwujudnya pelaksanaan peraturan perundang-undangan ketenagakerjaan di BSI serta
                                terjaminnya perlindungan hak-hak Pegawai, ketenangan dan kelangsungan kerja
                            </p>
                            <p class="text-lg text-gray-700">
                                <strong>Antar Usaha:</strong>
                                Terhimpun dan bersatunya Pegawai BSI untuk mewujudkan rasa setia kawan dan tali persaudaraan
                                antara sesama Pegawai.
                            </p>
                        </div>
                        <!-- Mission Card -->
                        <div
                            class="relative bg-gradient-to-br from-white via-green-50 to-green-100 p-8 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border-l-4 border-green-600">
                            <div
                                class="absolute -top-4 -left-4 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-tasks fa-lg"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-green-600 mb-4 mt-6">Misi</h3>
                            <ul class="list-disc pl-6 text-lg text-gray-700 space-y-2">
                                <li>Menjembatani Komunikasi Perusahaan dengan Pegawai & Sesama pegawai bsi</li>
                                <li>Meningkatkan Keharmonisan hubungan antara Perusahaan dengan Pegawai & sesama pegawai bsi
                                </li>
                                <li>Meningkatkan Perlindungan terhadap Hak dan kepentingan Pegawai</li>
                                <li>Meningkatkan Keterampilan, Pengetahuan & Produktivitas Pegawai</li>
                                <li>Meningkatkan Kesejahteraan Pegawai dan keluarganya</li>
                            </ul>
                        </div>
                        <!-- History Card -->
                        <div
                            class="relative bg-gradient-to-br from-white via-green-50 to-green-100 p-8 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border-l-4 border-green-600">
                            <div
                                class="absolute -top-4 -left-4 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center">
                                <i class="fas fa-history fa-lg"></i>
                            </div>
                            <h3 class="text-2xl font-semibold text-green-600 mb-4 mt-6">Sejarah Pendirian</h3>
                            <p class="text-lg text-gray-700">
                                Serikat Pekerja Bank BSI didirikan pada tahun 2010, dengan tujuan untuk memberikan
                                perlindungan
                                bagi pekerja dan menciptakan kesejahteraan bagi seluruh anggota di Bank BSI.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Section -->
            <section id="galeri" class="py-16 bg-green-50">
                <div class="max-w-screen-xl mx-auto text-center px-4">
                    <h2 class="text-4xl font-extrabold text-green-600 mb-8">Galeri Kegiatan</h2>
                    <p class="text-lg sm:text-xl text-gray-700 mb-12 leading-relaxed">
                        Dokumentasi berbagai kegiatan yang telah dilakukan oleh Serikat Pekerja Bank BSI.
                    </p>

                    <!-- Gallery Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4">
                        <!-- Gallery Item 1 -->
                        <div
                            class="relative group overflow-hidden rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                            <img src="{{ asset('img/gallery/galeri1.jpg') }}" alt="Gallery Image 1"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Kegiatan 1</p>
                            </div>
                        </div>
                        <!-- Gallery Item 2 -->
                        <div
                            class="relative group overflow-hidden rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                            <img src="{{ asset('img/gallery/galeri2.jpg') }}" alt="Gallery Image 2"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Kegiatan 2</p>
                            </div>
                        </div>
                        <!-- Gallery Item 3 -->
                        <div
                            class="relative group overflow-hidden rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                            <img src="{{ asset('img/gallery/galeri3.jpg') }}" alt="Gallery Image 3"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Kegiatan 3</p>
                            </div>
                        </div>
                        <!-- Gallery Item 4 -->
                        <div
                            class="relative group overflow-hidden rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                            <img src="{{ asset('img/gallery/galeri4.jpg') }}" alt="Gallery Image 4"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Kegiatan 4</p>
                            </div>
                        </div>
                        <!-- Gallery Item 5 -->
                        <div
                            class="relative group overflow-hidden rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                            <img src="{{ asset('img/gallery/galeri5.jpg') }}" alt="Gallery Image 5"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Kegiatan 5</p>
                            </div>
                        </div>
                        <!-- Gallery Item 6 -->
                        <div
                            class="relative group overflow-hidden rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                            <img src="{{ asset('img/gallery/galeri6.jpg') }}" alt="Gallery Image 6"
                                class="w-full h-64 object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg font-bold">Kegiatan 6</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Aktifitas Section --}}
            <section id="aktivitas" class="py-16 bg-green-50">
                <div class="max-w-screen-xl mx-auto text-center px-6">
                    <!-- Title -->
                    <h2 class="text-4xl font-extrabold text-green-600 mb-10 tracking-wide">
                        Aktifitas Serikat Pekerja Bank BSI
                    </h2>
                    <p class="text-lg sm:text-xl text-gray-700 mb-16 leading-relaxed max-w-3xl mx-auto">
                        Kami berkomitmen untuk memperjuangkan hak-hak anggota, meningkatkan kesejahteraan, dan menjaga
                        hubungan
                        industrial yang harmonis dengan manajemen melalui berbagai kegiatan yang bermakna.
                    </p>

                    <!-- Activities Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                        <!-- Activity 1 -->
                        <div
                            class="relative group bg-white p-10 rounded-3xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl flex flex-col items-center justify-between space-y-6">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-green-200 to-green-100 opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-500">
                            </div>
                            <i
                                class="fas fa-users fa-4x text-green-600 transition-transform group-hover:scale-110 duration-300"></i>
                            <h3
                                class="text-2xl font-bold text-green-700 group-hover:text-green-500 transition-colors duration-300 text-center">
                                Pelatihan & Pengembangan
                            </h3>
                            <p class="text-lg text-gray-600 text-center">
                                Memberikan pelatihan untuk meningkatkan keterampilan pekerja di Bank BSI.
                            </p>
                        </div>

                        <!-- Activity 2 -->
                        <div
                            class="relative group bg-white p-10 rounded-3xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl flex flex-col items-center justify-between space-y-6">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-green-200 to-green-100 opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-500">
                            </div>
                            <i
                                class="fas fa-gavel fa-4x text-green-600 transition-transform group-hover:scale-110 duration-300"></i>
                            <h3
                                class="text-2xl font-bold text-green-700 group-hover:text-green-500 transition-colors duration-300 text-center">
                                Negosiasi & Perlindungan
                            </h3>
                            <p class="text-lg text-gray-600 text-center">
                                Melakukan negosiasi untuk perlindungan hak-hak pekerja serta kesejahteraan anggota.
                            </p>
                        </div>

                        <!-- Activity 3 -->
                        <div
                            class="relative group bg-white p-10 rounded-3xl shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl flex flex-col items-center justify-between space-y-6">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-green-200 to-green-100 opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-500">
                            </div>
                            <i
                                class="fas fa-calendar-check fa-4x text-green-600 transition-transform group-hover:scale-110 duration-300"></i>
                            <h3
                                class="text-2xl font-bold text-green-700 group-hover:text-green-500 transition-colors duration-300 text-center">
                                Kegiatan Sosial
                            </h3>
                            <p class="text-lg text-gray-600 text-center">
                                Mengadakan kegiatan sosial yang mendukung kesejahteraan anggota.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </body>

@endsection
