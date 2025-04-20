@include('component.head')
    <!-- Hero Section -->
    <section class="bg-eerieblack text-silver py-32 relative overflow-hidden px-10">
        <div class="container mx-auto py-5">
            <div class="text-center relative z-10">
                <h1 class="text-5xl font-bold mb-6">Profil <span class="text-yellow">Laboratorium Teknik Sipil</span></h1>
                <p class="text-lg mb-8 opacity-90 max-w-3xl mx-auto">Mengenal lebih dekat tentang visi, misi, dan struktur organisasi Laboratorium Teknik Sipil Universitas Muhammadiyah Surakarta.</p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
            <div class="absolute inset-0 bg-white"></div>
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="absolute bottom-0 w-full h-full">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" 
                      class="fill-current text-eerieblack"></path>
            </svg>
        </div>
    </section>
    
    <!-- Vision & Mission Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-24" id="vision-mission">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4 text-eerieblack">Visi & Misi</h2>
                <p class="text-night max-w-2xl mx-auto">Komitmen kami dalam mengembangkan pendidikan dan penelitian di bidang Teknik Sipil</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-7xl mx-auto">
                <!-- Vision Card -->
                <div class="transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="bg-davysgray rounded-xl p-8 shadow-lg h-full border-t-4 border-yellow">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-yellow rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-eerieblack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-3xl font-bold text-night">Visi</h3>
                        </div>
                        <p class="text-night text-lg leading-relaxed">Mengembangkan ilmu pengetahuan dan teknologi untuk merancang, membangun, dan mengelola infrastruktur sipil yang inovatif dan berkelanjutan berdasarkan nilai keislaman.</p>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="bg-davysgray rounded-xl p-8 shadow-lg h-full border-t-4 border-yellow">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-yellow rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-eerieblack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-3xl font-bold text-night">Misi</h3>
                        </div>
                        <ul class="space-y-6">
                            <li class="flex items-start group">
                                <div class="w-6 h-6 bg-yellow rounded-full flex-shrink-0 flex items-center justify-center mr-4 mt-1 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-eerieblack font-bold text-sm">1</span>
                                </div>
                                <p class="text-night">Menyelenggarakan pendidikan bidang teknik sipil dalam lingkungan Islami dengan keunggulan dalam pelaksanaan dan perancangan serta menekankan pembentukan karakter Islami, tangguh, dan mampu bekerja secara tim.</p>
                            </li>
                            <li class="flex items-start group">
                                <div class="w-6 h-6 bg-yellow rounded-full flex-shrink-0 flex items-center justify-center mr-4 mt-1 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-eerieblack font-bold text-sm">2</span>
                                </div>
                                <p class="text-night">Mengembangkan penelitian yang inovatif di bidang teknik sipil dengan mengedepankan keunggulan di bidang konservasi sumberdaya alam (reuse, reduce, recycle).</p>
                            </li>
                            <li class="flex items-start group">
                                <div class="w-6 h-6 bg-yellow rounded-full flex-shrink-0 flex items-center justify-center mr-4 mt-1 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-eerieblack font-bold text-sm">3</span>
                                </div>
                                <p class="text-night">Mengembangkan pengabdian kepada masyarakat dalam pemecahan permasalahan di bidang teknik sipil guna mendorong sinergi antara program studi dengan institusi luar.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Organizational Structure Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-20" id="structure">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 text-night">
                <h2 class="text-4xl font-bold mb-4">Struktur Organisasi</h2>
                <p class="text-night max-w-2xl mx-auto">Struktur organisasi laboratorium yang terorganisir dengan baik untuk mendukung kegiatan pembelajaran, penelitian dan pengabdian masyarakat.</p>
            </div>
            
            <div class="bg-davysgray rounded-lg p-8 shadow-lg mb-12 max-w-5xl mx-auto">
                <img src="{{ asset('image/struktur-organisasi.jpeg') }}" alt="Struktur Organisasi" class="w-full h-auto rounded-md">
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-20 h-20 bg-yellow/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Kepala Laboratorium</h3>
                    <p class="text-night">Bertanggung jawab atas seluruh kegiatan dan pengembangan laboratorium.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-20 h-20 bg-yellow/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Koordinator Bidang</h3>
                    <p class="text-night">Mengkoordinasikan kegiatan dan penelitian untuk bidang laboratorium tertentu.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <div class="w-20 h-20 bg-yellow/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Laboran</h3>
                    <p class="text-night">Mengelola operasional harian, peralatan, dan membantu kegiatan praktikum mahasiswa.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Laboratories Types Section -->
    <section class="bg-white py-20" id="lab-types">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 text-night">
                <h2 class="text-4xl font-bold mb-4">Jenis Laboratorium</h2>
                <p class="text-night max-w-2xl mx-auto">Laboratorium Teknik Sipil UMS memiliki berbagai laboratorium yang lengkap untuk mendukung kegiatan akademik dan penelitian.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="{{ asset('image/lab-bahan.jpg') }}" alt="Lab Teknologi Bahan" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Lab Tek. Bahan</h3>
                        <p class="text-night">pengujian Kekuatan Tekan Beton, Pengujian Kuat Lentur, Pengujian Tarik Baja</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="{{ asset('image/lab-pekerasan.jpg') }}" alt="Lab Bahan Pekerasan" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Lab Bahan Pekerasan</h3>
                        <p class="text-night">Pengujian Ekstraksi, Pengujian Density</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="{{ asset('image/lab-geomatika.jpg') }}" alt="Lab Geomatika" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Lab Geomatika</h3>
                        <p class="text-night">Pengujian Pemetaan</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="{{ asset('image/lab-tanah.jpg') }}" alt="Lab Mekanika Tanah" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Lab Mekanika Tanah</h3>
                        <p class="text-night">Pengujian Sondir, Pengujian CBR</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="{{ asset('image/lab-jalan.jpg') }}" alt="Lab Jalan Raya" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Lab Jalan Raya</h3>
                        <p class="text-night">Pengujian kekuatan aspal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('component.footer')
</body>
</html>