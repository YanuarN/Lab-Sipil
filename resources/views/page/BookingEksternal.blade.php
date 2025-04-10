@include('component.head')
<section class="page-header bg-eerieblack text-white pt-32 pb-10 relative overflow-hidden">
    <div class="container mx-5 my-10 px-4 py-8">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Formulir Reservasi
                    <span class="text-yellow block mt-2">Pengujian Pihak Eksternal</span>
                </h1>
                <p class="text-lg leading-relaxed mb-6">
                    Selamat datang di sistem reservasi Laboratorium Teknik Sipil UMS. 
                    Kami menyediakan layanan pengujian berkualitas tinggi untuk kebutuhan proyek Anda.
                </p>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
        <div class="absolute inset-0 bg-gray-100"></div>
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="absolute bottom-0 w-full h-full">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" 
                  class="fill-current text-eerieblack"></path>
        </svg>
    </div>
</section>
<section>
    <div class="bg-gray-100 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <!-- Card Container -->
                <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                    <!-- Error Alert -->
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
                    <form method="POST" action="{{ route('booking-Eksternal.store') }}" class="p-8">
                        <div class="overflow-x-auto"><!-- Add horizontal scroll wrapper -->
                        @csrf
                        
                        <!-- Data Booking Section -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold mb-6 flex items-center text-gray-800">
                                <div class="bg-amber-400 text-gray-900 w-8 h-8 rounded-full flex items-center justify-center mr-3">1</div>
                                Data Booking
                            </h3>
                            
                            <div class="grid md:grid-cols-3 gap-6">
                                <div>
                                    <label for="nama_instansi" class="block text-gray-700 font-medium mb-2">Nama Instansi</label>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-400 focus:border-transparent transition-all" 
                                        id="nama_instansi" name="nama_instansi" value="{{ old('nama_instansi') }}" required>
                                </div>
                                <div>
                                    <label for="nama_proyek" class="block text-gray-700 font-medium mb-2">Nama Proyek</label>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-400 focus:border-transparent transition-all" 
                                        id="nama_proyek" name="nama_proyek" value="{{ old('nama_proyek') }}" required>
                                </div>
                                <div>
                                    <label for="tanggal_tes" class="block text-gray-700 font-medium mb-2">Tanggal Tes</label>
                                    <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-400 focus:border-transparent transition-all" 
                                        id="tanggal_tes" name="tanggal_tes" value="{{ old('tanggal_tes') }}" min="{{ date('Y-m-d') }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Jenis Pengujian Section -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold mb-6 flex items-center text-gray-800">
                                <div class="bg-amber-400 text-gray-900 w-8 h-8 rounded-full flex items-center justify-center mr-3">2</div>
                                Pilih Jenis Pengujian
                            </h3>
                            
                            <div class="overflow-scroll rounded-lg border border-gray-200 shadow-sm">
                                <table class="w-full text-left" id="tabel-pengujian">
                                    <thead class="bg-eerieblack text-white">
                                        <tr>
                                            <th class="p-4">Jenis Pengujian</th>
                                            <th class="p-4">Harga Satuan</th>
                                            <th class="p-4 w-32">Jumlah</th>
                                            <th class="p-4 w-40">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($daftarHarga as $index => $item)
                                        <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors text-eerieblack">
                                            <td class="p-4">
                                                <div class="flex items-center">
                                                    <input class="w-5 h-5 text-gray-900 border-gray-300 rounded focus:ring-yellow mr-3 pengujian-checkbox" 
                                                        type="checkbox" name="jenis_tes[]" value="{{ $item->id }}" id="pengujian{{ $item->id }}" 
                                                        data-harga="{{ $item->harga }}" data-index="{{ $index }}">
                                                    <label class="font-medium" for="pengujian{{ $item->id }}">
                                                        {{ $item->order }}
                                                        <span class="block text-gray-900 text-sm mt-1">{{ $item->keterangan }}</span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="p-4 font-semibold">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                            <td class="p-4">
                                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all jumlah-input" 
                                                    name="jumlah_pengetesan[]" value="0" min="0" data-index="{{ $index }}" disabled>
                                            </td>
                                            <td class="p-4 font-semibold subtotal" data-index="{{ $index }}">Rp 0</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="bg-gray-50 text-gray-900">
                                            <td colspan="3" class="p-4 text-right font-bold">Total</td>
                                            <td class="p-4 font-bold text-lg text-eerieblack" id="total-harga">Rp 0</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Actions -->
                        <div class="flex justify-center mt-12 space-x-4">
                            <button type="submit" class="px-6 py-3 bg-yellow text-eerieblack font-semibold rounded-md hover:bg-yellow-500 hover:shadow-lg transition-all">
                                Submit Reservasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@include('component.footer')
@vite(['resources/js/BookEksternal.js'])