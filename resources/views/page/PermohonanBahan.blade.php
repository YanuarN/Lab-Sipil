@include('component.head')
<section class="page-header bg-eerieblack text-silver pt-32 pb-10 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Permohonan <span class="text-yellow">Bahan</span></h1>
        <p class="text-lg max-w-2xl">Ajukan permohonan bahan untuk kebutuhan penelitian Anda. Lengkapi formulir berikut dengan informasi yang diperlukan.</p>
    </div>
</section>
<div class="bg-slate-600 min-h-screen pt-10 pb-40">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Card Container -->
            <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                <!-- Success Alert -->
                @if(session('success'))
                    <div class="bg-green-50 border-l-4 border-green-500 p-4 m-6">
                        <div class="flex items-center mb-2">
                            <div class="bg-green-500 rounded-full p-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="text-green-800 font-medium ml-2">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                <!-- Error Alert -->
                @if(session('error'))
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 m-6">
                        <div class="flex items-center mb-2">
                            <div class="bg-red-500 rounded-full p-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                            <p class="text-red-800 font-medium ml-2">{{ session('error') }}</p>
                        </div>
                    </div>
                @endif

                <!-- Form Validation Errors -->
                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 m-6">
                        <div class="flex items-center mb-2">
                            <div class="bg-red-500 rounded-full p-1">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
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

                <!-- Form Content -->
                <form action="{{ route('permohonan-bahan.store') }}" method="POST" class="p-8">
                    @csrf
                    
                    <!-- Data Pemohon Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                            <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">1</div>
                            Data Pemohon
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="nama" name="nama" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="nim" class="block text-gray-700 font-medium mb-2">NIM</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="nim" name="nim" value="{{ old('nim') }}" required>
                                @error('nim')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="judul_penelitian" class="block text-gray-700 font-medium mb-2">Judul Penelitian</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="judul_penelitian" name="judul_penelitian" value="{{ old('judul_penelitian') }}" required>
                                @error('judul_penelitian')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="instansi_tujuan" class="block text-gray-700 font-medium mb-2">Instansi yang Dituju</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="instansi_tujuan" name="instansi_tujuan" value="{{ old('instansi_tujuan') }}" required>
                                @error('instansi_tujuan')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="alamat_instansi" class="block text-gray-700 font-medium mb-2">Alamat Instansi</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="alamat_instansi" name="alamat_instansi" value="{{ old('alamat_instansi') }}" required>
                                @error('alamat_instansi')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Anggota Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                            <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">2</div>
                            Anggota Penelitian
                        </h3>
                        
                        <div id="anggota-container" class="space-y-4">
                            @if(old('anggota'))
                                @foreach(old('anggota') as $index => $anggota)
                                    <div class="anggota-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50">
                                        <div>
                                            <label class="block text-gray-700 font-medium mb-2">Nama Anggota</label>
                                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                                name="anggota[{{ $index }}][nama]" value="{{ $anggota['nama'] ?? '' }}">
                                        </div>
                                        <div class="relative">
                                            <label class="block text-gray-700 font-medium mb-2">NIM Anggota</label>
                                            <div class="flex">
                                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                                    name="anggota[{{ $index }}][nim]" value="{{ $anggota['nim'] ?? '' }}">
                                                <button type="button" class="hapus-anggota px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="anggota-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Nama Anggota</label>
                                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                            name="anggota[0][nama]">
                                    </div>
                                    <div class="relative">
                                        <label class="block text-gray-700 font-medium mb-2">NIM Anggota</label>
                                        <div class="flex">
                                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                                name="anggota[0][nim]">
                                            <button type="button" class="hapus-anggota px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <button type="button" id="tambah-anggota" class="mt-4 px-4 py-2 bg-yellow text-night rounded-md hover:bg-amber-400 transition-all flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Tambah Anggota
                        </button>
                    </div>
                    
                    <!-- Material Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                            <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">3</div>
                            Material yang Dibutuhkan
                        </h3>
                        
                        <div id="nama-material-container" class="space-y-4">
                            @if(old('nama_material'))
                                @foreach(old('nama_material') as $index => $material)
                                    <div class="material-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50">
                                        <div>
                                            <label class="block text-gray-700 font-medium mb-2">Nama Material</label>
                                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                                name="nama_material[{{ $index }}][nama]" value="{{ $material['nama'] ?? '' }}" required>
                                        </div>
                                        <div class="relative">
                                            <label class="block text-gray-700 font-medium mb-2">Jumlah</label>
                                            <div class="flex">
                                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                                    name="nama_material[{{ $index }}][jumlah]" value="{{ $material['jumlah'] ?? '' }}" required>
                                                <button type="button" class="hapus-material px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="material-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Nama Material</label>
                                        <input type="text" placeholder="Agregart Halus" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                            name="nama_material[0][nama]" required>
                                    </div>
                                    <div class="relative">
                                        <label class="block text-gray-700 font-medium mb-2" >Jumlah</label>
                                        <div class="flex">
                                            <input type="text" placeholder="*50Kg" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                                name="nama_material[0][jumlah]" required>
                                            <button type="button" class="hapus-material px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <button type="button" id="tambah-material" class="mt-4 px-4 py-2 bg-yellow text-night rounded-md hover:bg-amber-400 transition-all flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Tambah Material
                        </button>
                    </div>
                    
                    <!-- Actions -->
                    <div class="flex justify-center mt-12 space-x-4">
                        {{-- <a href="{{ route('permohonan-bahan.index') }}" class="px-6 py-3 border-2 border-night text-night font-semibold rounded-md hover:bg-night hover:text-white transition-all">
                            Batal
                        </a> --}}
                        <button type="submit" class="px-6 py-3 bg-yellow text-eerieblack font-semibold rounded-md hover:bg-yellow-500 hover:shadow-lg transition-all">
                            Submit Permohonan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('component.footer')
@vite(['resources/js/Bahan.js'])
