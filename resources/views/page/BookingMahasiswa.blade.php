@extends('layouts.app')

@section('content')
    <section class="page-header relative overflow-hidden bg-eerieblack pt-36 pb-16">
        <div class="container px-4 mx-5">
            <div class="max-w-4xl">
                <h1 class="text-3xl font-bold mb-6 text-white tracking-tight">
                    Permohonan Penggunaan <span
                        class="text-yellow inline-block transform hover:scale-105 transition-transform duration-300">Laboratorium
                        Untuk Penelitian</span>
                </h1>
                <p class="text-xl leading-relaxed text-gray-300 mb-8">
                    Selamat datang di sistem reservasi laboratorium! Kami menyediakan fasilitas modern dan lengkap untuk
                    mendukung penelitian Anda. Jadwalkan kunjungan Anda sekarang untuk pengalaman penelitian yang optimal.
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
            <div class="absolute inset-0 bg-gray-100"></div>
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="absolute bottom-0 w-full h-full">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    class="fill-current text-eerieblack"></path>
            </svg>
        </div>
    </section>
    <section>
        <div class="container mx-auto px-4 py-8 bg-gray-100">
            <div class="max-w-5xl mx-auto">
                <!-- Calendar Card -->
                <div class="bg-white rounded-lg overflow-hidden shadow-2xl mb-8">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold text-night">Daftar Pengguna Lab</h2>
                            <div class="flex space-x-2">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-600">Tersedia</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-amber-600 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-600">Hampir Penuh</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-red-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-600">Penuh</span>
                                </div>
                            </div>
                        </div>

                        <div id="calendar" class="bg-white rounded-lg shadow"></div>

                        <div class="mt-4 text-sm text-gray-600">
                            <p>* Klik pada tanggal untuk membuat reservasi</p>
                            <p>* Kapasitas maksimal tiap hari adalah 10 pengguna</p>
                        </div>
                    </div>
                </div>

                <!-- Selected Date Info -->
                <div id="selected-date-container" class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-8 hidden">
                    <div class="flex items-center">
                        <div class="bg-blue-500 rounded-full p-1 mr-2">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-blue-800 font-medium">Tanggal yang dipilih: <span id="selectedDate"
                                class="font-bold"></span></p>
                    </div>
                </div>

                <!-- Booking Form -->
                <div id="bookingForm" class="hidden">
                    <!-- Error Alert -->
                    @if ($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                            <div class="flex items-center mb-2">
                                <div class="bg-red-500 rounded-full p-1">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                <p class="text-red-800 font-medium ml-2">Mohon perbaiki kesalahan berikut:</p>
                            </div>
                            <ul class="list-disc pl-8 text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Card -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-2xl mb-8">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-night mb-6">Permohonan <span
                                    class="text-yellow">Penelitian</span></h2>
                            <p class="text-gray-600 mb-8">Isi form permohonan penggunaan laboratorium dan peralatan
                                penelitian. Pastikan untuk mengisi semua informasi dengan benar.</p>

                            <form action="{{ route('permohonan.store') }}" method="POST" onsubmit="return handleSubmit()">
                                @csrf

                                <!-- Data Pemohon Section -->
                                <div class="mb-8">
                                    <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                                        <div
                                            class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                            1</div>
                                        Data Pemohon
                                    </h3>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="nama" class="block text-gray-700 font-medium mb-2">Nama <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="nama" name="nama" value="{{ old('nama') }}" required>
                                        </div>
                                        <div>
                                            <label for="email" class="block text-gray-700 font-medium mb-2">Email <span
                                                    class="text-red-500">*</span></label>
                                            <input type="email"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="email" name="email" value="{{ old('email') }}" required>
                                        </div>
                                        <div>
                                            <label for="nim" class="block text-gray-700 font-medium mb-2">NIM <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="nim" name="nim" value="{{ old('nim') }}" required>
                                            @error('nim')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="nomor" class="block text-gray-700 font-medium mb-2">Nomor WA
                                                <span class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="nomor" name="nomor" value="{{ old('nomor') }}" required>
                                        </div>
                                        <div>
                                            <label for="prodi" class="block text-gray-700 font-medium mb-2">Program
                                                Studi <span class="text-red-500">*</span></label>
                                            <select
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="prodi" name="prodi" required>
                                                <option value="">-- Pilih Program Studi --</option>
                                                <option value="Sarjana Teknik Sipil">Sarjana Teknik Sipil</option>
                                                <option value="Magister Teknik Sipil">Magister Teknik Sipil</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="instansi" class="block text-gray-700 font-medium mb-2">Pekerjaan
                                                <span class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="instansi" name="instansi" value="{{ old('instansi') }}" required>
                                        </div>
                                        <div>
                                            <label for="alamat_di_solo"
                                                class="block text-gray-700 font-medium mb-2">Alamat di Solo <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="alamat_di_solo" name="alamat_di_solo"
                                                value="{{ old('alamat_di_solo') }}" required>
                                        </div>
                                        <div>
                                            <label for="alamat_rumah" class="block text-gray-700 font-medium mb-2">Alamat
                                                Rumah <span class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="alamat_rumah" name="alamat_rumah" value="{{ old('alamat_rumah') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Data Penelitian Section -->
                                <div class="mb-8">
                                    <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                                        <div
                                            class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                            2</div>
                                        Data Penelitian
                                    </h3>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="judul_penelitian"
                                                class="block text-gray-700 font-medium mb-2">Judul Penelitian <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="judul_penelitian" name="judul_penelitian"
                                                value="{{ old('judul_penelitian') }}" required>
                                        </div>
                                        <div>
                                            <label for="lab_tujuan" class="block text-gray-700 font-medium mb-2">Lab
                                                Tujuan <span class="text-red-500">*</span></label>
                                            <select
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="lab_tujuan" name="lab_tujuan" required>
                                                <option value="">-- Pilih Lab Tujuan --</option>
                                                @foreach ($lab as $lab)
                                                    <option value="{{ $lab->id }}">{{ $lab->nama_lab }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label for="pembimbing"
                                                class="block text-gray-700 font-medium mb-2">Pembimbing <span
                                                    class="text-red-500">*</span></label>
                                            <select
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="pembimbing" name="pembimbing" required>
                                                <option value="">-- Pilih Pembimbing --</option>
                                                @foreach ($dosen as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="hidden" name="kepalalab" id="kepalalab" value="">
                                    </div>
                                </div>

                                <!-- Waktu Penelitian Section -->
                                <div class="mb-8">
                                    <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                                        <div
                                            class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                            3</div>
                                        Waktu Penelitian
                                    </h3>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="tanggal_mulai"
                                                class="block text-gray-700 font-medium mb-2">Tanggal Mulai <span
                                                    class="text-red-500">*</span></label>
                                            <input type="date"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="tanggal_mulai" name="tanggal_mulai"
                                                value="{{ old('tanggal_mulai') }}" required readonly
                                                onchange="updateMinEndDate()">
                                        </div>
                                        <div>
                                            <label for="tanggal_selesai"
                                                class="block text-gray-700 font-medium mb-2">Tanggal Selesai <span
                                                    class="text-red-500">*</span></label>
                                            <input type="date"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all"
                                                id="tanggal_selesai" name="tanggal_selesai"
                                                value="{{ old('tanggal_selesai') }}" required min=""
                                                onchange="validateDates()">
                                        </div>
                                    </div>
                                </div>

                                <!-- Alat Penelitian Section -->
                                <div class="mb-8">
                                    <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                                        <div
                                            class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                            4</div>
                                        Alat Penelitian
                                    </h3>

                                    <div class="mb-4">
                                        <div id="alat-container" class="space-y-3">
                                            <!-- Item alat pertama -->
                                            <div class="alat-item flex flex-col sm:flex-row gap-3 p-3 bg-gray-50 rounded-md">
                                                <select name="alat[]" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" required>
                                                    <option value="">-- Pilih Alat --</option>
                                                    @foreach ($daftar_alat as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_alat }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="button" class="hapus-alat w-full sm:w-auto px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition-all">
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                        <button type="button" id="tambah-alat" class="mt-4 w-full sm:w-auto flex items-center justify-center px-4 py-2 bg-yellow text-eerieblack rounded-md hover:bg-amber-400 transition-all">
                                            <span class="text-lg mr-2">+</span>
                                            Tambah Alat
                                        </button>
                                    </div>
                                </div>
                                </div>
                                <!-- Actions -->
                                <div class="flex justify-center mt-12 space-x-4">
                                    <button type="button" id="tutup-form"
                                        class="px-6 py-3 border-2 border-night text-night font-semibold rounded-md hover:bg-night hover:text-white transition-all">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="px-6 py-3 bg-yellow text-eerieblack font-semibold rounded-md hover:bg-yellow-500 hover:shadow-lg transition-all">
                                        Submit Permohonan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    @vite(['resources/js/BookingMhs.js'])
@endpush
