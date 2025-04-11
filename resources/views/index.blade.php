@include('component.head')
<!-- Hero Section -->
<section class="bg-eerieblack text-silver py-28 px-9 relative overflow-hidden">
    <!-- Background animated pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute w-full h-full bg-grid-pattern"></div>
    </div>

    <div class="container mx-auto px-6 py-10 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="fade-in-left">
                <div class="inline-block bg-yellow px-4 py-1 rounded-full text-eerieblack font-semibold mb-4">
                    UNIVERSITAS MUHAMMADIYAH SURAKARTA
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">Laboratorium <span
                        class="text-yellow relative">Teknik Sipil<span
                            class="absolute -bottom-2 left-0 w-full h-1 bg-yellow/30"></span></span></h1>
                <p class="text-lg mb-8 text-silver/90 leading-relaxed">Laboratorium Teknik Sipil adalah fasilitas yang
                    digunakan untuk melakukan eksperimen, pengujian, dan riset dalam bidang teknik sipil.
                    Bidang ini mencakup berbagai disiplin ilmu yang berhubungan dengan konstruksi dan infrastruktur,
                    seperti struktur bangunan, material, geoteknik, transportasi, serta manajemen konstruksi.</p>

                <div class="flex flex-wrap gap-4 mb-12">
                    <a href="#programs"
                        class="bg-yellow text-eerieblack px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-all duration-300 shadow-lg hover:shadow-yellow/30 flex items-center group">
                        Jelajahi Program
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="#contact"
                        class="border-2 border-silver/30 text-silver px-8 py-3 rounded-lg font-semibold hover:border-yellow hover:text-yellow transition-all duration-300">
                        Hubungi Kami
                    </a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div class="text-center p-4 rounded-lg bg-davysgray/10 backdrop-blur-sm border border-silver/10">
                        <div class="text-yellow text-4xl font-bold counter" data-target="5">5</div>
                        <div class="text-silver text-sm mt-2">Jenis Laboratorium</div>
                    </div>
                    <div class="text-center p-4 rounded-lg bg-davysgray/10 backdrop-blur-sm border border-silver/10">
                        <div class="text-yellow text-4xl font-bold counter" data-target="4">4</div>
                        <div class="text-silver text-sm mt-2">Layanan Booking</div>
                    </div>
                    <div
                        class="text-center p-4 rounded-lg bg-davysgray/10 backdrop-blur-sm border border-silver/10 md:col-span-1 col-span-2">
                        <div class="text-yellow text-4xl font-bold counter" data-target="100">100+</div>
                        <div class="text-silver text-sm mt-2">Alat Pengujian</div>
                    </div>
                </div>
            </div>

            <!-- Modern 3D Carousel -->
            <div class="perspective-1000 relative h-[500px] w-full">
                <div class="carousel-3d relative w-full h-full">
                    <div class="carousel-item-3d absolute w-full h-full transition-all duration-1000 opacity-100 transform-style-preserve-3d"
                        data-slide="1">
                        <div class="absolute inset-0 rounded-xl overflow-hidden border-4 border-yellow/50 shadow-2xl">
                            <img src="{{ asset('image/Budi.jpg') }}" alt="Pengujian Struktur"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="carousel-item-3d absolute w-full h-full transition-all duration-1000 opacity-0 transform-style-preserve-3d"
                        data-slide="2">
                        <div class="absolute inset-0 rounded-xl overflow-hidden border-4 border-yellow/50 shadow-2xl">
                            <img src="{{ asset('image/laboran1.jpg') }}" alt="Analisis Material"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="carousel-item-3d absolute w-full h-full transition-all duration-1000 opacity-0 transform-style-preserve-3d"
                        data-slide="3">
                        <div class="absolute inset-0 rounded-xl overflow-hidden border-4 border-yellow/50 shadow-2xl">
                            <img src="{{ asset('image/bg-img.svg') }}" alt="Simulasi Geoteknik"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
                    <button
                        class="carousel-dot-3d w-3 h-3 rounded-full bg-silver opacity-50 hover:opacity-100 transition-opacity duration-300 active"
                        data-dot="1"></button>
                    <button
                        class="carousel-dot-3d w-3 h-3 rounded-full bg-silver opacity-50 hover:opacity-100 transition-opacity duration-300"
                        data-dot="2"></button>
                    <button
                        class="carousel-dot-3d w-3 h-3 rounded-full bg-silver opacity-50 hover:opacity-100 transition-opacity duration-300"
                        data-dot="3"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave divider -->
    <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
        <div class="absolute inset-0 bg-white"></div>
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="absolute bottom-0 w-full h-full">
            <path
                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                class="fill-current text-eerieblack"></path>
        </svg>
    </div>
</section>

<!-- Fasilitas Lab Section -->
<section class="bg-white py-20" id="programs">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-night">Layanan Lab Teknik Sipil</h2>
            <p class="text-night/70 max-w-2xl mx-auto">Layanan booking fasilitas lab kami dirancang untuk memenuhi
                kebutuhan penelitian, kolaborasi eksternal, dan pengelolaan bahan lab secara efisien.</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 mx-10">
            <!-- Card 1: Permohonan Penggunaan Lab untuk Penelitian -->
            <a href="/permohonan" class="group">
                <div
                    class="h-full bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-56 bg-yellow/10 relative flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-yellow/20 to-yellow/5 group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="relative z-10 text-night">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-2xl text-night font-bold mb-4 group-hover:text-yellow transition-colors duration-300">
                            Penggunaan Lab untuk Penelitian</h3>
                        <p class="text-night/70 mb-6">Ajukan permohonan penggunaan lab untuk keperluan penelitian tugas
                            akhir dengan prosedur yang mudah dan sistematis.</p>
                        <div class="flex justify-between text-night/70 text-sm border-t border-gray-100 pt-4">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Maksimal 3 Bulan
                            </span>
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                10 Orang Per Hari
                            </span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card 2: Booking Lab untuk Eksternal -->
            <a href="/booking-Eksternal" class="group">
                <div
                    class="h-full bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-56 bg-night/10 relative flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-night/20 to-night/5 group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="relative z-10 text-night">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-2xl text-night font-bold mb-4 group-hover:text-yellow transition-colors duration-300">
                            Booking Lab untuk Eksternal</h3>
                        <p class="text-night/70 mb-6">Fasilitas lab kami terbuka untuk kolaborasi dengan pihak
                            eksternal seperti industri, lembaga penelitian, atau mitra lainnya.</p>
                    </div>
                </div>
            </a>

            <!-- Card 3: Pengajuan Permohonan Bahan Lab -->
            <a href="/permohonan-bahan" class="group">
                <div
                    class="h-full bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-56 bg-yellow/10 relative flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-yellow/20 to-yellow/5 group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="relative z-10 text-night">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-2xl text-night font-bold mb-4 group-hover:text-yellow transition-colors duration-300">
                            Pengajuan Permohonan Bahan Lab</h3>
                        <p class="text-night/70 mb-6">Ajukan permohonan bahan lab yang diperlukan untuk penelitian atau
                            praktikum dengan proses yang cepat dan transparan.</p>
                        <div class="flex justify-between text-night/70 text-sm border-t border-gray-100 pt-4">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Ambil Surat Permohonan Ke Lab
                            </span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card 4: Peminjaman Ruang -->
            <a href="/pinjam-ruang" class="group">
                <div
                    class="h-full bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                    <div class="h-56 bg-night/10 relative flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-night/20 to-night/5 group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="relative z-10 text-night">
                            <div class="relative z-10 text-night">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-2xl text-night font-bold mb-4 group-hover:text-yellow transition-colors duration-300">
                            Peminjaman Ruangan</h3>
                        <p class="text-night/70 mb-6">Ajukan permohonan peminjaman ruangan untuk keperluan akademik
                            anda.</p>

                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Faculty Section -->
<section class="bg-gradient-to-b from-white to-gray-50 py-20" id="faculty">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-night">Laboratorium Teknik Sipil UMS</h2>
            <p class="text-night/70 max-w-2xl mx-auto">Tim profesional yang berdedikasi untuk mendukung kegiatan
                akademik, penelitian dan pengembangan di bidang teknik sipil</p>
        </div>

        <!-- Kepala Laboratorium -->
        <div class="mb-20">
            <h3 class="text-2xl font-bold text-center mb-12 text-night flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                Kepala Laboratorium
            </h3>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Card 1 -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('image/Budi.jpg') }}" alt="Budi Setiawan"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-night mb-2 group-hover:text-yellow transition-colors">Ir.
                                Budi Setiawan, S.T., M.T</h3>
                            <p class="text-night/70 mb-4">Struktur, Komputer & Hidraulika</p>
                            <div class="flex items-center text-sm text-night/60">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Lab Struktur & Hidraulika
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('image/agus.jpg') }}" alt="Agus Riyanto"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-night mb-2 group-hover:text-yellow transition-colors">Ir.
                                Agus Riyanto, M.T</h3>
                            <p class="text-night/70 mb-4">Transportasi, Geomatika & Tanah</p>
                            <div class="flex items-center text-sm text-night/60">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                </svg>
                                Lab Transportasi & Geomatika
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laboran -->
        <div class="mb-16">
            <h3 class="text-2xl font-bold text-center mb-12 text-night flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Laboran
            </h3>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Laboran Card 1 -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('image/laboran2.jpg') }}" alt="Bella Titisari"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-night mb-2 group-hover:text-yellow transition-colors">
                                Bella Titisari, S.T</h3>
                            <p class="text-night/70 mb-4">Laboran</p>
                        </div>
                    </div>
                </div>

                <!-- Laboran Card 2 -->
                <div class="group">
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ asset('image/laboran1.jpg') }}" alt="Didik Haryono"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-night mb-2 group-hover:text-yellow transition-colors">
                                Didik Haryono, A.Md</h3>
                            <p class="text-night/70 mb-4">Laboran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lab Features Section -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-night">Fasilitas Unggulan Lab Teknik Sipil</h2>
            <p class="text-night/70 max-w-2xl mx-auto">Laboratorium kami dilengkapi dengan peralatan modern yang
                mendukung penelitian dan pengujian berbagai aspek teknik sipil.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mx-6">
            <!-- Feature 3 - Teknologi Bahan -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-yellow/20 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-night">Laboratorium Teknologi Bahan</h3>
                <p class="text-night/70 mb-4">Pengujian berbagai jenis material konstruksi untuk memastikan kualitas
                    dan kesesuaian dengan standar teknis.</p>
                <ul class="space-y-2 text-night/70">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Kuat Tekan Beton
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Kuat Lentur
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Baja Bahan
                    </li>
                </ul>
            </div>

            <!-- Feature 4 - Bahan Perkerasan -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-yellow/20 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-night">Laboratorium Bahan Perkerasan</h3>
                <p class="text-night/70 mb-4">Pengujian material perkerasan jalan dan aspal untuk mengevaluasi
                    ketahanan, durabilitas, dan properti fisik.</p>
                <ul class="space-y-2 text-night/70">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Ekstraksi
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Density
                    </li>
                </ul>
            </div>

            <!-- Feature 5 - Geomatika -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-yellow/20 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-night">Laboratorium Geomatika</h3>
                <p class="text-night/70 mb-4">Peralatan modern untuk pengukuran, pemetaan, dan survei topografi dengan
                    tingkat akurasi tinggi.</p>
                <ul class="space-y-2 text-night/70">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Pemetaan
                    </li>
                </ul>
            </div>

            <!-- Feature 6 - Mekanika Tanah -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-16 h-16 bg-yellow/20 rounded-xl flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-night">Laboratorium Mekanika Tanah</h3>
                <p class="text-night/70 mb-4">Analisis dan pengujian properti tanah untuk dasar perencanaan fondasi dan
                    struktur bawah tanah.</p>
                <ul class="space-y-2 text-night/70">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian Sondir
                    </li>
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow flex-shrink-0 mt-0.5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Pengujian CBR
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-to-b from-white to-grey-50 py-16" id="safety-regulations">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 text-night">Peraturan Umum Keselamatan</h2>
            <p class="max-w-2xl mx-auto text-night">Pedoman keselamatan wajib dipatuhi oleh seluruh pengguna
                laboratorium</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Card A: Peralatan Keselamatan -->
            <div
                class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow-400 transform hover:-translate-y-1 transition duration-300">
                <div class="flex items-center mb-4">
                    <div
                        class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">
                        A</div>
                    <h3 class="text-xl font-bold text-night">Peralatan Keselamatan</h3>
                </div>
                <ul class="space-y-3 text-night">
                    <li class="flex items-start">
                        <span class="text-yellow-500 font-bold mr-2">•</span>
                        <p>Gunakan Alat Pelindung Diri</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 font-bold mr-2">•</span>
                        <p>Alat pemadam Kebakaran</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 font-bold mr-2">•</span>
                        <p>Kacamata Keselamatan</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-500 font-bold mr-2">•</span>
                        <p>Pelindung Tangan</p>
                    </li>
                </ul>
            </div>

            <!-- Card B: Penyimpanan -->
            <div
                class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow transform hover:-translate-y-1 transition duration-300">
                <div class="flex items-center mb-4">
                    <div
                        class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">
                        B</div>
                    <h3 class="text-xl font-bold text-night">Penyimpanan</h3>
                </div>
                <div class="text-night">
                    <p>Semua daerah penyimpanan harus ditentukan secara jelas dan dipisahkan dari tempat kerja rutin
                        (sebagai contoh tidak ada penyimpanan di etalase).</p>
                </div>
            </div>

            <!-- Card C: Pembuangan Limbah -->
            <div
                class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow-400 transform hover:-translate-y-1 transition duration-300">
                <div class="flex items-center mb-4">
                    <div
                        class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">
                        C</div>
                    <h3 class="text-xl font-bold text-night">Pembuangan Limbah</h3>
                </div>
                <div class="text-night">
                    <p class="mb-3">Pembuangan bahan yang digunakan harus dilakukan segera sesuai dengan panduan
                        pembuangan limbah.</p>
                </div>
            </div>

            <!-- Card D: Operasi -->
            <div
                class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow transform hover:-translate-y-1 transition duration-300">
                <div class="flex items-center mb-4">
                    <div
                        class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">
                        D</div>
                    <h3 class="text-xl font-bold text-night">Operasi</h3>
                </div>
                <div class="text-night">
                    <p class="mb-3">Anggota laboratorium dan peralatan harus terlindung dari suhu, listrik, dan
                        bahaya kimia selama pengoperasian alat.</p>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Kontak listrik tidak boleh kelebihan beban</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Kabel listrik harus disimpan dalam keadaan baik</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Kabel di lantai harus dilindungi dengan jembatan kabel</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card E: Praktik Keselamatan Pribadi -->
            <div
                class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow-400 transform hover:-translate-y-1 transition duration-300">
                <div class="flex items-center mb-4">
                    <div
                        class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">
                        E</div>
                    <h3 class="text-xl font-bold text-night">Praktik Keselamatan Pribadi</h3>
                </div>
                <div class="text-night">
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Merokok <span class="font-bold text-red-600">TIDAK</span> diijinkan di dalam gedung</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Tidak ada makanan/minuman yang boleh disimpan/dikonsumsi di laboratorium</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Cuci tangan sebelum meninggalkan laboratorium</p>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-500 font-bold mr-2">•</span>
                            <p>Sepatu keselamatan atau minimal sepatu tertutup wajib digunakan</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('component.footer')
@vite(['resources/js/Landing.js'])
</body>

</html>
