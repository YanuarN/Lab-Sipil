@include('component.head')
    <!-- Hero Section -->
    <section class="bg-eerieblack text-silver py-44 relative overflow-hidden px-10">
        <div class="container mx-auto  py-5">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <h1 class="text-5xl font-bold mb-6">Building the <span class="text-yellow">Future</span> Through Engineering Excellence</h1>
                    <p class="text-lg mb-8 opacity-90">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet provident libero, sint aut consectetur enim vitae qui, itaque unde perferendis, fuga voluptate! Fugiat voluptatibus quaerat soluta, alias ut odit iure.</p>
                    <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Discover Our Programs</button>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                        <div class="text-center border-l border-silver/20 pl-6">
                            <div class="text-yellow text-4xl font-bold">40+</div>
                            <div class="text-silver uppercase text-sm mt-2">Faculty Members</div>
                        </div>
                        <div class="text-center border-l border-silver/20 pl-6">
                            <div class="text-yellow text-4xl font-bold">95%</div>
                            <div class="text-silver uppercase text-sm mt-2">Employment Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-yellow text-4xl font-bold">25+</div>
                            <div class="text-silver uppercase text-sm mt-2">Research Labs</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-dark rounded-lg p-6 shadow-2xl">
                        <div class="bg- w-full h-96 rounded-md relative">
                            {{-- <div class="absolute w-32 h-32 bg-yellow/20 border border-yellow top-12 left-12"></div>
                            <div class="absolute w-48 h-24 bg-yellow/20 border border-yellow top-48 left-20"></div>
                            <div class="absolute w-24 h-40 bg-yellow/20 border border-yellow top-28 left-56"></div>
                            <div class="absolute w-16 h-16 border-2 border-yellow rounded-full flex items-center justify-center text-yellow top-6 right-6">N</div> --}}
                            <img src="{{ asset('image/civil.jpg')}}" alt="Engineering" class="w-full h-full object-cover rounded-md">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="bg-white py-20" id="programs">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Fasilitas Lab</h2>
                <p class="text-night max-w-2xl mx-auto">Layanan booking fasilitas lab kami dirancang untuk memenuhi kebutuhan penelitian, kolaborasi eksternal, dan pengelolaan bahan lab secara efisien.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: Permohonan Penggunaan Lab untuk Penelitian -->
                <a href="/permohonan" class="bg-davysgray rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 bg-night relative flex items-center justify-center">
                        <img src="{{ asset('image/research-icon.png') }}" alt="Penelitian" class="w-20 h-20 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl text-yellow font-bold mb-4">Penggunaan Lab untuk Penelitian</h3>
                        <p class="text-white mb-6">Ajukan permohonan penggunaan lab untuk keperluan penelitian penelitian tugas akhir.</p>
                        <div class="flex justify-between text-night text-sm border-t border-silver/20 pt-4">
                            <span class="text-yellow">Maksimal 3 Bulan</span>
                            <span class="text-yellow">10 Orang Per Hari</span>
                        </div>
                    </div>
                </a>
    
                <!-- Card 2: Booking Lab untuk Eksternal -->
                <a href="/booking-Eksternal">
                    <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="h-48 bg-night relative flex items-center justify-center">
                            <img src="{{ asset('image/external-icon.png') }}" alt="Eksternal" class="w-20 h-20 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl text-yellow font-bold mb-4">Booking Lab untuk Eksternal</h3>
                            <p class="text-white mb-6">Fasilitas lab kami terbuka untuk kolaborasi dengan pihak eksternal seperti industri, lembaga penelitian, atau mitra lainnya.</p>
                            <div class="flex justify-between text-night text-sm border-t border-silver/20 pt-4">
                                <span class="text-yellow">Maksimal 1 Bulan</span>
                                <span class="text-yellow">Prioritas Kolaborasi</span>
                            </div>
                        </div>
                    </div>
                </a>
    
                <!-- Card 3: Pengajuan Permohonan Bahan Lab -->
                <a href="/permohonan-bahan">
                    <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="h-48 bg-night relative flex items-center justify-center">
                            <img src="{{ asset('image/material-icon.png') }}" alt="Bahan Lab" class="w-20 h-20 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl text-yellow font-bold mb-4">Pengajuan Permohonan Bahan Lab</h3>
                            <p class="text-white mb-6">Ajukan permohonan bahan lab yang diperlukan untuk penelitian atau praktikum dengan proses yang cepat dan transparan.</p>
                            <div class="flex justify-between text-night text-sm border-t border-silver/20 pt-4">
                                <span class="text-yellow">Ambil Surat Permohonan Ke Lab</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section class="bg-eerieblack py-20" id="faculty">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 text-white">
                <h2 class="text-4xl font-bold mb-4">Laboratorium Teknik Sipil UMS</h2>
                <p class="max-w-2xl mx-auto px-4">Learn from world-renowned experts with extensive industry experience and research achievements</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 px-4 md:px-8 lg:px-20 xl:px-52">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 md:h-64 bg-night bg-cover bg-center" style="background-image: url('');"></div>
                    <div class="p-4 md:p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Ir. Budi Setiawan,S.T.,M.T</h3>
                        <p class="text-night mb-4">Struktur, Komputer dan Hidraulika</p>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Kepala Laboratorium</div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 md:h-64 bg-night bg-cover bg-center" style="background-image: url('');"></div>
                    <div class="p-4 md:p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Ir. Agus Riyanto.,M.T</h3>
                        <p class="text-night mb-4">Transportasi, Geomatika dan Mekanika Tanah</p>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Kepala Laboratorium</div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 md:h-64 bg-night bg-cover bg-center" style="background-image: url('');"></div>
                    <div class="p-4 md:p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Bella Titisari,S.T</h3>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Laboran</div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow">
                    <div class="h-48 md:h-64 bg-night bg-cover bg-center" style="background-image: url('');"></div>
                    <div class="p-4 md:p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-2">Didik Haryono,A.Md</h3>
                        <div class="bg-yellow/20 text-night px-4 py-1 rounded-full text-sm font-semibold">Laboran</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section class="bg-white py-20" id="research">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="h-[450px] bg-night rounded-lg overflow-hidden"></div>
                <div>
                    <h2 class="text-4xl font-bold mb-6">Research Excellence</h2>
                    <p class="text-night mb-8">Our department conducts cutting-edge research addressing critical challenges in civil infrastructure, sustainability, and resilience. Faculty and students collaborate on innovative solutions to real-world engineering problems.</p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Sustainable Infrastructure Materials and Design</p>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Smart Cities and Transportation Networks</p>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Structural Health Monitoring and Resilience</p>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-yellow w-6 h-6 rounded-full flex items-center justify-center text-eerieblack font-bold mr-4">●</div>
                            <p class="text-night">Water Resources and Environmental Engineering</p>
                        </div>
                    </div>
                    <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Explore Research Labs</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('component.footer')
</body>
</html>