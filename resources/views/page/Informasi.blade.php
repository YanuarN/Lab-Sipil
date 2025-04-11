@include('component.head')
    <!-- Hero Section -->
    <section class="bg-eerieblack text-silver py-20 relative overflow-hidden px-10">
        <div class="container mx-auto my-8 py-5">
            <div class="text-center relative z-10">
                <h1 class="text-5xl font-bold mb-6">Informasi <span class="text-yellow">Laboratorium</span> Teknik Sipil UMS</h1>
                <p class="text-lg mb-8 opacity-90 max-w-3xl mx-auto">Temukan informasi kontak, tata tertib, prosedur operasional standar, dan informasi keselamatan untuk penggunaan fasilitas laboratorium teknik sipil.</p>
                <div class="flex justify-center gap-4">
                    <a href="#kontak" class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Informasi Kontak</a>
                    <a href="#tata-tertib" class="bg-transparent border border-yellow text-yellow px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow/10 hover:shadow-lg transition-all">Tata Tertib Lab</a>
                </div>
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
    
    <!-- Contact Information Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-16" id="kontak">
        <div class="container mx-auto py-16" id="kontak-hotline">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Layanan Hotline Laboratorium</h2>
                <p class="text-night max-w-2xl mx-auto">Kontak cepat untuk layanan darurat dan informasi laboratorium teknik sipil UMS.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Emergency Services Column -->
                <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg">
                    <div class="h-16 bg-yellow flex items-center px-6">
                        <h3 class="text-xl text-eerieblack font-bold">Layanan Darurat</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between border-b border-silver/20 pb-4">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-night w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Ade Usman</span>
                                </div>
                                <p class="text-night hover:underline">0895 3462 1487</p>
                            </li>
                            <li class="flex items-center justify-between border-b border-silver/20 pb-4">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-night w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Nur Rohman</span>
                                </div>
                                <p class="text-night hover:underline">0812 2587 789</p>
                            </li>
                            <li class="flex items-center justify-between border-b border-silver/20 pb-4">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-night w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Fakultas Teknik</span>
                                </div>
                                <p class="text-night hover:underline">+62 271 717417 ext 3253</p>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-night w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Medical Center UMS</span>
                                </div>
                                <p" class="text-night hover:underline">+62 271 7717417</p>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Laboratory Services Column -->
                <div class="bg-davysgray rounded-lg overflow-hidden shadow-lg">
                    <div class="h-16 bg-yellow flex items-center px-6">
                        <h3 class="text-xl text-eerieblack font-bold">Layanan Laboratorium</h3>
                    </div>
                    <div class="p-6">
                        {{-- <div class="mb-8">
                            <div class="flex justify-center mb-2">
                                <div class="w-24 h-12 bg-yellow rounded-full flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-eerieblack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                            </div>
                        </div> --}}
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between border-b border-silver/20 pb-4">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-eerieblack w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Off. Lab. Teknik Sipil</span>
                                </div>
                                <p class="text-eerieblack hover:underline">0822 2682 1294</p>
                            </li>
                            <li class="flex items-center justify-between border-b border-silver/20 pb-4">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-eerieblack w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Didik Haryono, A.Md</span>
                                </div>
                                <p class="text-eerieblack hover:underline">0812 2531 3658</p>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="bg-yellow text-eerieblack w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <span class="text-night font-medium">Bella Titisari, S.T</span>
                                </div>
                                <p class="text-night hover:underline">0811 1340 7816</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Emergency Call to Action -->
            <div class="mt-12 bg-eerieblack rounded-lg p-6 max-w-3xl mx-auto shadow-lg border-l-4 border-yellow">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-eerieblack mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <div>
                        <h4 class="text-lg font-bold text-yellow">Penting!</h4>
                        <p class="text-silver">Dalam keadaan darurat, hubungi langsung nomor kontak di atas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rules Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 text-night py-16" id="tata-tertib">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Tata Tertib Laboratorium Teknik Sipil</h2>
                <p class="max-w-2xl mx-auto">Tata tertib ini disusun untuk memastikan keamanan, kenyamanan, dan efektivitas penggunaan laboratorium bagi seluruh pengguna.</p>
            </div>
            
            <div class="max-w-5xl mx-auto space-y-10">
                <!-- Wajib Di Taati - Single Column -->
                <div class="bg-eerieblack rounded-lg p-8 shadow-lg">
                    <h3 class="text-2xl text-yellow font-bold mb-6">Wajib Di Taati dan Dilaksanakan</h3>
                    <ul class="space-y-4 text-white">
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">1</div>
                            <p>Wajib menggunakan alat-alat praktikum sesuai dengan prosedur yang benar dan mematuhi petunjuk umum Keschatan dan Keselamatan Kerja (K3).</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">2</div>
                            <p>Wajib berpakaian sopan, rapi dan bersepatu tertutup, sarung tangan dan masker jika diperlukan.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">3</div>
                            <p>Wajib memelihara suasana yang aman, tenang dan kondusif.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">4</div>
                            <p>Berlaku sopan, santun dan menjunjung etika akademik dalam laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">5</div>
                            <p>Menjaga kebersihan dan kenyamanan ruang laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">6</div>
                            <p>Menjunjung tinggi dan menghargai pembimbing, laboran dan asisten laboratorium dan sesama pengguna laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">7</div>
                            <p>Membersihkan peralatan yang digunakan dalam praktikum maupun penelitian dan mengembalikannya kepada petugas laboratorium (laboran).</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">8</div>
                            <p>Membaca, memahami dan mengikuti prosedur operasional untuk setiap peralatan dan kegiatan selama praktikum dan di ruang laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">9</div>
                            <p>Wajib meminta ijin kepada asdos jika hendak meningkatkan praktikum.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">10</div>
                            <p>Wajib memelihara alat-alat praktikum apabila didapati merusak/memecahkan alat praktikum maka wajib untuk mengganti.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">11</div>
                            <p>Wajib membersihkan dan menata kembali setelah selesai praktikum.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">12</div>
                            <p>Bagi Mahasiswa Tugas Akhir yang melakukan penelitian dilaboratorium harap konfirmasi dan mendaflar dahulu ke laboran.</p>
                        </li>
                    </ul>
                </div>
    
                <!-- Tidak Diperbolehkan - Single Column -->
                <div class="bg-eerieblack rounded-lg p-8 shadow-lg">
                    <h3 class="text-2xl text-yellow font-bold mb-6">Pengguna Laboratorium Tidak Diperbolehkan</h3>
                    <ul class="space-y-4 text-white">
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">1</div>
                            <p>Membawa peralatan praktikum keluar laboratorium tanpa seijin dari laboran.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">2</div>
                            <p>Mencuri alat-alat yang ada di laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">3</div>
                            <p>Mengoperasikan alat-alat tertentu tanpa didampingi oleh asisten dosen maupun laboran.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">4</div>
                            <p>Dilarang menyentuh, menggeser dan menggunakan peralatan di laboratorium yang tidak sesuai dengan acara praktikum matakuliah yang diambil.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">5</div>
                            <p>Tidur selama kegiatan praktikum berlangsung.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">6</div>
                            <p>Merokok di dalam lingkungan laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">7</div>
                            <p>Makan dan minum selama kegiatan di laboratorium.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">8</div>
                            <p>Membuang sampah sembarangan di lingkungan laboratorium.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SOP Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-20" id="sop">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Standar Operasional Prosedur (SOP)</h2>
                <p class="text-night max-w-2xl mx-auto">Berikut adalah prosedur standar yang berlaku untuk penggunaan laboratorium Teknik Sipil UMS.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <!-- SOP Card 1 -->
                <div class="bg-white border border-silver/30 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition duration-300">
                    <div class="h-16 bg-yellow flex items-center px-6">
                        <h3 class="text-xl text-eerieblack font-bold">SOP Peminjaman Alat dan Bahan Praktikum Untuk Mahasiswa</h3>
                    </div>
                    <div class="p-6">
                        <ol class="list-decimal pl-5 space-y-3 text-night">
                            <li>Asisten mengisi form peminjaman alat dan bahan praktikum sesuai dengan praktikum yang
                                akan dilaksanakan untuk diserahkan kepada laboran.</li>
                            <li>Laboran mendampingi asisten untuk menyiapkan peralatan dan bahan untuk kegiatan
                                praktikum sesuai dengan form peminjaman alat dan bahan.</li>
                            <li>Asisten melakukan cek atas alat dan bahan yang akan digunakan, sebelum diserahkan kepada
                                mahasiswa. Jika alat dalam keadaan rusak maka alat tidak boleh dipinjamkan dan jika alat
                                dalam keadaan baik maka alat boleh dipinjamkan.</li>
                            <li>Setelah kegiatan praktikum selesai, mahasiswa (praktikan) membersihkan peralatan dan sisa
                                bahan yang digunakan dan mengembalikan peralatan kepada asisten.</li>
                            <li>Asisten praktikum melakukan cek atas peralatan yang dipinjam dan sisa bahan yang
                                digunakan dalam kegiatan praktikum, untuk memastikan kondisinya sama dengan saat
                                peralatan akan dipinjam. Jika kondisi alat rusak/hilang maka mahasiswa (praktikan) harus
                                mengganti dengan alat yang sama sebagai syarat keluarnya nilai. Jika alat dalam keadaan baik
                                maka diserahkan kepada laboran.</li>
                            <li>Laboran menyimpan alat dan bahan praktikum ke tempat semula.</li>
                        </ol>
                    </div>
                </div>
                
                <!-- SOP Card 2 -->
                <div class="bg-white border border-silver/30 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition duration-300">
                    <div class="h-16 bg-yellow flex items-center px-6">
                        <h3 class="text-xl text-eerieblack font-bold">SOP Penggunaan Lab untuk Penelitian Tugas Akhir</h3>
                    </div>
                    <div class="p-6">
                        <ol class="list-decimal pl-5 space-y-3 text-night">
                            <li>Mahasiswa mendaftar untuk penelitian pada https://web-lab-sipil</li>
                            <li>Mengisi jadwal penggunaan lab sesuai slot waktu yang tersedia</li>
                            <li>Mahasiwa mengumpulkan berkas permohonan penggunaan alat dan pernyataan kepada
                                laboran.</li>
                            <li>Laboran membuatkan kartu peminjaman alat pada mahasiswa</li>
                            <li>Laboran mempersiapkan alat yang diperlukan untuk penelitian.</li>
                            <li>Mahasiswa menyerahkan kartu pinjaman alat pada asisten untuk control pemakaian</li>
                            <li>Setelah penelitian selesai, mahasiswa mengembalikan alat kepada laboran/asisten
                                laboratorium.</li>
                            <li>Mahasiswa yang telah selesai penelitian membayar biaya sewa alat dan penggunaan bahan
                                dan laboran memberikan surat bebas laboratorium.</li>
                            <li>Laboran memeriksa alat yang telah dikembalikan untuk memastikan kondisi alat. Jika alat
                                dalam keadaan baik maka diterima laboran, jika alat dalam keadaan rusak maka dikembalikan
                                ke peneliti untuk diganti.</li>
                            <li>Laboran menyimpan alat.</li>
                        </ol>
                    </div>
                </div>
                
                <!-- SOP Card 3 -->
                <div class="bg-white border border-silver/30 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="h-16 bg-yellow flex items-center px-6">
                        <h3 class="text-xl text-eerieblack font-bold">SOP Peminjaman Alat dan Bahan untuk Pihak Luar</h3>
                    </div>
                    <div class="p-6">
                        <ol class="list-decimal pl-5 space-y-3 text-night">
                            <li>Pihak luar membawa surat permohonan pengajuan penggunaan laboratorium kepada Kepala Laboratorium.</li>
                            <li>Pihak luar mengajukan permohonan peminjaman alat dan penggunaan bahan kepada Kepala Laboratorium.</li>
                            <li>Kepala Laboratorium menerima permohonan peminjaman alat dan penggunaan bahan dari pihak luar.</li>
                            <li>Kepala Laboratorium mengkoordinasikan permohonan peminjaman alat dan kebutuhan bahan kepada laboran.</li>
                            <li>Laboran memeriksa kondisi alat dan bahan sesuai permohonan peminjaman alat dan bahan yang diajukan pihak luar. Jika ada alat yang tidak sesuai maka laboran akan menginformasikan kepada pihak luar. Jika alat sesuai dengan yang dibutuhkan/tidak sedang digunakan maka boleh dipinjamkan.</li>
                            <li>Laboran menyiapkan alat dan bahan sesuai dengan permohonan peminjaman alat dan kebutuhan bahan.</li>
                            <li>Laboran menentukan jangka waktu peminjaman alat.</li>
                            <li>Laboran menyerahkan alat dan bahan yang dibutuhkan kepada pihak luar.</li>
                            <li>Pihak luar memeriksa alat dan bahan yang diterima. Jika tidak sesuai maka pihak luar akan melaporkan kepada laboran. Jika sudah sesuai, maka alat dan bahan dapat dibawa.</li>
                            <li>Pihak luar mengembalikan alat sesuai jangka waktu yang ditentukan.</li>
                            <li>Laboran memeriksa kembali alat yang dipinjam. Jika kondisinya baik, maka diterima. Jika kondisinya rusak (pecah, dll) atau hilang, maka pihak luar harus mengganti alat tersebut dengan spesifikasi yang sama.</li>
                            <li>Pihak luar membayar biaya sewa alat dan biaya pembelian bahan.</li>
                            <li>Laboran menyimpan alat.</li>
                        </ol>
                    </div>
                </div>
                
                <!-- SOP Card 4 -->
                <div class="bg-white border border-silver/30 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="h-16 bg-yellow flex items-center px-6">
                        <h3 class="text-xl text-eerieblack font-bold">SOP Pelaksanaan Kegiatan Praktikum di Laboratorium</h3>
                    </div>
                    <div class="p-6">
                        <ol class="list-decimal pl-5 space-y-3 text-night">
                            <li>Dosen pembimbing/pengampu praktikum melakukan koordinasi dengan laboran dan asisten praktikum terkait waktu pelaksanaan, kebutuhan dan fasilitas untuk kegiatan praktikum.</li>
                            <li>Asisten membuat daftar kebutuhan alat dan bahan praktikum.</li>
                            <li>Laboran menganalisis kebutuhan alat dan bahan praktikum.</li>
                            <li>Asisten didampingi laboran mempersiapkan alat dan bahan praktikum.</li>
                            <li>Mahasiswa praktikum mendaftar kegiatan praktikum sesuai dengan mata kuliah yang diambil didampingi asisten.</li>
                            <li>Asisten membuat jadwal pelaksanaan praktikum.</li>
                            <li>Mahasiswa (praktikan) mengikuti briefing pada awal sebelum mulai praktikum.</li>
                            <li>Wajib membawa kartu praktikum yang telah disediakan oleh asdos.</li>
                            <li>Mahasiswa (praktikan) mengambil alat dan bahan yang telah dipinjam kepada asisten.</li>
                            <li>Mahasiswa atau praktikan melaksanakan praktikum didampingi asisten.</li>
                            <li>Wajib datang 15 menit sebelum praktikum dimulai.</li>
                            <li>Wajib meminta izin kepada asdos jika hendak meninggalkan praktikum.</li>
                            <li>Bagi yang tidak mengikuti praktikum selama masa praktikum, wajib mengulangi di semester berikutnya.</li>
                            <li>Setelah kegiatan praktikum selesai, mahasiswa (praktikan) membersihkan peralatan dan sisa bahan yang digunakan dan mengembalikan peralatan kepada asisten.</li>
                            <li>Asisten praktikum melakukan cek atas peralatan yang dipinjam dan sisa bahan yang digunakan dalam kegiatan praktikum, untuk memastikan kondisinya sama dengan saat peralatan akan dipinjam. Jika kondisi alat rusak/hilang maka mahasiswa (praktikan) harus mengganti dengan alat yang sama sebagai syarat keluarnya nilai. Jika alat dalam keadaan baik maka diserahkan kepada laboran.</li>
                            <li>Laboran menyimpan alat dan bahan praktikum ke tempat semula.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Safety Information Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-16" id="kebijakan-k3">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Kebijakan Keselamatan dan Kesehatan Kerja (K3)</h2>
                <p class="max-w-2xl mx-auto text-night">Kebijakan keselamatan yang berlaku untuk seluruh pengguna laboratorium Teknik Sipil UMS.</p>
            </div>
            
            <div class="bg-eerieblack rounded-lg p-8 shadow-lg max-w-5xl mx-auto mb-12">
                <h3 class="text-2xl text-yellow font-bold mb-6">Kebijakan K3 Laboratorium Teknik Sipil</h3>
                <ul class="space-y-6 text-white">
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">1</div>
                        <p class="pt-1">Mengutamakan keselamatan dosen, mahasiswa, karyawan, dan pengunjung dari pengguna di Laboratorium Teknik Sipil.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">2</div>
                        <p class="pt-1">Menjamin semua dosen, mahasiswa, dan karyawan mengetahui dan melaksanakan pekerjaan secara produktif dengan cara yang aman melalui petunjuk yang benar, instruksi pekerjaan yang tepat, instruksi pemakaian peralatan yang tepat dan pengawasan yang tepat.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">3</div>
                        <p class="pt-1">Menyediakan fasilitas, peralatan, perlengkapan keselamatan kerja yang layak dan memadai serta menjamin penggunaan secara tepat.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">4</div>
                        <p class="pt-1">Memastikan bahwa kebijakan K3 yang diminta dan direkomendasikan telah dipatuhi.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">5</div>
                        <p class="pt-1">Meningkatkan kesadaran dan memberikan pengertian bahwa kecelakan dapat dicegah.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">6</div>
                        <p class="pt-1">Memberikan pengertian bahwa target utama K3 Lab Teknik Sipil FT UMS adalah "zero accident".</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack min-w-[28px] h-7 rounded-full flex items-center justify-center font-bold mr-4">7</div>
                        <p class="pt-1">Meningkatkan perlindungan dan pelestarian lingkungan dalam segala aktivitas dan meminimalisir kerusakan yang mungkin terjadi.</p>  
                    </li>
                </ul>
            </div>
            
            <!-- Prohibited Activities -->
            <div class="bg-eerieblack rounded-lg p-8 shadow-lg max-w-5xl mx-auto mb-12">
                <h3 class="text-2xl text-yellow font-bold mb-6">Hal-hal yang Dilarang dalam Laboratorium</h3>
                <ul class="space-y-4 text-white">
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">1</div>
                        <p>Merokok di lingkungan laboratorium.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">2</div>
                        <p>Tidak memakai alat perlindungan diri ketika melakukan kegiatan praktikum/penelitian.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">3</div>
                        <p>Membuang sampah sembarangan di lingkungan laboratorium.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-yellow text-eerieblack w-6 h-6 rounded-full flex items-center justify-center font-bold mr-4 mt-1">4</div>
                        <p>Makan dan minum selama kegiatan praktikum/penelitian.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Warning Signs Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-16" id="tanda-peringatan">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Tanda-tanda yang Perlu Diperhatikan</h2>
                <p class="max-w-2xl mx-auto text-night">Perhatikan tanda-tanda peringatan berikut untuk keselamatan bersama.</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-8 mb-12 border-l-8 border-yellow max-w-5xl mx-auto">
                <h3 class="text-2xl font-bold mb-6 text-night flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-yellow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    Tanda-tanda yang Perlu Diperhatikan
                </h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <ul class="space-y-3 text-night">
                            <li class="flex items-start">
                                <span class="text-yellow font-bold mr-2">•</span>
                                <p>Pada setiap alat-alat laboratorium</p>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow font-bold mr-2">•</span>
                                <p>Jalur-jalur evakuasi</p>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow font-bold mr-2">•</span>
                                <p>Larangan-larangan terkait</p>
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="p-3 rounded border border-gray-300 bg-gray-50 text-center">
                            <div class="bg-yellow text-night text-sm font-bold py-1 rounded mb-2">CAUTION</div>
                            <div class="h-16 flex items-center justify-center">
                                <img src="{{ asset('image/caution.svg') }}" alt="Caution sign" class="mx-auto w-full h-full object-contain" />
                            </div>
                        </div>
                        <div class="p-3 rounded border border-gray-300 bg-gray-50 text-center">
                            <div class="bg-yellow text-night text-sm font-bold py-1 rounded mb-2">JALUR EVAKUASI</div>
                            <div class="h-16 flex items-center justify-center">
                                <img src="{{ asset('image/evakuasi.png') }}" alt="Caution sign" class="mx-auto w-full h-full object-contain" />
                            </div>
                        </div>
                        <div class="p-3 rounded border border-gray-300 bg-gray-50 text-center">
                            <div class="bg-yellow text-night text-sm font-bold py-1 rounded mb-2">APAR</div>
                            <div class="h-16 flex items-center justify-center">
                                <img src="{{ asset('image/apar.png') }}" alt="Caution sign" class="mx-auto w-full h-full object-contain" />
                            </div>
                        </div>
                        <div class="p-3 rounded border border-gray-300 bg-gray-50 text-center">
                            <div class="bg-yellow text-night text-xs font-bold py-1 rounded mb-2">TEGANGAN TINGGI</div>
                            <div class="h-16 flex items-center justify-center">
                                <img src="{{ asset('image/voltage.png') }}" alt="Caution sign" class="mx-auto w-full h-full object-contain" />
                            </div>
                        </div>
                        <div class="p-3 rounded border border-gray-300 bg-gray-50 text-center">
                            <div class="bg-yellow text-night text-xs font-bold py-1 rounded mb-2">AWAS LICIN</div>
                            <div class="h-16 flex items-center justify-center">
                                <img src="{{ asset('image/licin.png') }}" alt="Caution sign" class="mx-auto w-full h-full object-contain" />
                            </div>
                        </div>
                        <div class="p-3 rounded border border-gray-300 bg-gray-50 text-center">
                            <div class="bg-yellow text-night text-xs font-bold py-1 rounded mb-2">MUDAH TERBAKAR</div>
                            <div class="h-16 flex items-center justify-center">
                                <img src="{{ asset('image/flame.png') }}" alt="Caution sign" class="mx-auto w-full h-full object-contain" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Procedures Section -->
    <section class="bg-gradient-to-b from-white to-gray-50 py-16" id="prosedur-darurat">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-night">Bagaimana Jika Terjadi Kecelakaan dan Luka?</h2>
                <p class="max-w-2xl mx-auto text-night">Prosedur penanganan kecelakaan di laboratorium Teknik Sipil UMS.</p>
            </div>
            
            <div class="bg-davysgray rounded-xl shadow-lg p-8 max-w-5xl mx-auto border-l-4 border-yellow">
                <h3 class="text-2xl font-bold mb-6 text-yellow flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="#FFD700" stroke="black" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Prosedur Darurat
                </h3>
                <ol class="space-y-4 text-night">
                    <li class="flex items-start">
                        <span class="bg-yellow text-eerieblack font-bold rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">1</span>
                        <p>Laporkan semua kecelakaan kepada laboran/coordinator laboratorium secepatnya.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-yellow text-eerieblack font-bold rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">2</span>
                        <p>Jangan panik.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-yellow text-eerieblack font-bold rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">3</span>
                        <p>Jika bahan-bahan kimia yang mengenai bagian tubuh, secepatnya cuci dengan air mengalir selama minimal 20 menit.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-yellow text-eerieblack font-bold rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">4</span>
                        <p>Jika terjadi kebakaran, maka gunakan APAR yang berada pada sudut-sudut ruangan yang telah disediakan APAR.</p>
                    </li>
                    <li class="flex items-start">
                        <span class="bg-yellow text-eerieblack font-bold rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-1">5</span>
                        <p>Jika terjadi luka,benturan,terkena benda keras. Segera lakukan pertolongan pertama membawa ke MMC UMS.</p>
                    </li>
                </ol>
                
                <div class="mt-8 bg-eerieblack rounded-lg p-6 border-l-4 border-yellow">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <div>
                            <h4 class="text-lg font-bold text-yellow">Penting!</h4>
                            <p class="text-silver">Dalam keadaan darurat, hubungi langsung nomor kontak emergency yang tersedia di halaman informasi kontak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="bg-gradient-to-b from-white to-grey-50 py-16" id="safety-regulations">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-night">Peraturan Umum Keselamatan</h2>
                <p class="max-w-2xl mx-auto text-night">Pedoman keselamatan wajib dipatuhi oleh seluruh pengguna laboratorium</p>
            </div>
    
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Card A: Peralatan Keselamatan -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow-400 transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">A</div>
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
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">B</div>
                        <h3 class="text-xl font-bold text-night">Penyimpanan</h3>
                    </div>
                    <div class="text-night">
                        <p>Semua daerah penyimpanan harus ditentukan secara jelas dan dipisahkan dari tempat kerja rutin (sebagai contoh tidak ada penyimpanan di etalase).</p>
                    </div>
                </div>
    
                <!-- Card C: Pembuangan Limbah -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow-400 transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">C</div>
                        <h3 class="text-xl font-bold text-night">Pembuangan Limbah</h3>
                    </div>
                    <div class="text-night">
                        <p class="mb-3">Pembuangan bahan yang digunakan harus dilakukan segera sesuai dengan panduan pembuangan limbah.</p>
                    </div>
                </div>
    
                <!-- Card D: Operasi -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">D</div>
                        <h3 class="text-xl font-bold text-night">Operasi</h3>
                    </div>
                    <div class="text-night">
                        <p class="mb-3">Anggota laboratorium dan peralatan harus terlindung dari suhu, listrik, dan bahaya kimia selama pengoperasian alat.</p>
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
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-yellow-400 transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow text-night rounded-full w-10 h-10 flex items-center justify-center font-bold text-xl mr-4">E</div>
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
    </section> --}}

    @include('component.footer')