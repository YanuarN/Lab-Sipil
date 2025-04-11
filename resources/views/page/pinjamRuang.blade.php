@include('component.head')
<section class="page-header bg-eerieblack text-silver pt-32 pb-10 relative overflow-hidden">
    <div class="container mx-auto px-7 pb-20">
        <h1 class="text-4xl font-bold mb-4">Permohonan Peminjaman <span class="text-yellow">Ruangan</span></h1>
        <p class="text-lg max-w-2xl">Silahkan lengkapi formulir peminjaman ruangan di bawah ini dengan teliti dan lengkap untuk memastikan proses pengajuan berjalan lancar.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-24 overflow-hidden">
        <div class="absolute inset-0 bg-white"></div>
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="absolute bottom-0 w-full h-full">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" 
                  class="fill-current text-eerieblack"></path>
        </svg>
    </div>
</section>
<section class="bg-white min-h-screen pt-10 pb-10">
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

                <!-- Current peminjaman Section -->
                <div class="m-6">
                    <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                        <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        Jadwal Peminjaman Saat Ini
                    </h3>

                    <div class="overflow-x-auto bg-gray-50 rounded-lg shadow-sm mb-8">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ruang</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jam</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Peminjam</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keperluan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($peminjaman->where('status', 'Disetujui') as $booking)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $booking->ruang->nama_ruang }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ \Carbon\Carbon::parse($booking->tanggal)->format('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ \Carbon\Carbon::parse($booking->jam_mulai)->format('H:i') }} - 
                                            {{ \Carbon\Carbon::parse($booking->jam_selesai)->format('H:i') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $booking->nama }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $booking->keperluan }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $booking->status }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                            Belum ada peminjaman ruangan yang disetujui saat ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Form Content -->
                <form action="{{ route('pinjam-ruang.store') }}" method="POST" class="m-6">
                    @csrf
                    
                    <!-- Peminjam Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                            <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">1</div>
                            Data Peminjam
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="nama" name="nama" value="{{ old('nama') }}" required>
                            </div>
                            <div>
                                <label for="notelf" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="notelf" name="notelf" value="{{ old('notelf') }}" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Ruang Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                            <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">2</div>
                            Pilih Ruangan
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="ruang_id" class="block text-gray-700 font-medium mb-2">Ruangan yang Akan Dipinjam</label>
                                <select name="ruang_id" id="ruang_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" required>
                                    <option value="">Pilih Ruangan</option>
                                    @foreach($ruang as $r)
                                        <option value="{{ $r->id }}" {{ old('ruang_id') == $r->id ? 'selected' : '' }}>
                                            {{ $r->nama_ruang }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="keperluan" class="block text-gray-700 font-medium mb-2">Keperluan Peminjaman</label>
                                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="keperluan" name="keperluan" value="{{ old('keperluan') }}" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Waktu Section -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6 flex items-center text-night">
                            <div class="bg-yellow text-eerieblack w-8 h-8 rounded-full flex items-center justify-center mr-3">3</div>
                            Waktu Peminjaman
                        </h3>
                        
                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="tanggal" class="block text-gray-700 font-medium mb-2">Tanggal</label>
                                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="tanggal" name="tanggal" value="{{ old('tanggal') }}" min="{{ date('Y-m-d') }}" required>
                                @error('tanggal')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="jam_mulai" class="block text-gray-700 font-medium mb-2">Jam Mulai</label>
                                <input type="time" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai') }}" required>
                                @error('jam_mulai')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="jam_selesai" class="block text-gray-700 font-medium mb-2">Jam Selesai</label>
                                <input type="time" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                                    id="jam_selesai" name="jam_selesai" value="{{ old('jam_selesai') }}" required>
                                @error('jam_selesai')
                                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class="flex justify-center mt-12 space-x-4">
                        <button type="submit" 
                        class="px-6 py-3 bg-yellow text-eerieblack font-semibold rounded-md hover:bg-yellow-500 hover:shadow-lg transition-all">
                        Ajukan Peminjaman
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('component.footer')
@vite(['resources/js/PinjamRuang.js'])
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the room dropdown element
        const roomSelect = document.getElementById('ruang_id');
        
        // When room selection changes, filter the peminjaman table
        roomSelect.addEventListener('change', function() {
            filterBookingsByRoom(this.value);
        });
        
        function filterBookingsByRoom(roomId) {
            // Get all rows in the peminjaman table
            const rows = document.querySelectorAll('tbody tr');
            
            if (!roomId) {
                // If no room is selected, show all peminjaman
                rows.forEach(row => {
                    row.style.display = '';
                });
                return;
            }
            
            // Filter rows to show only peminjaman for the selected room
            rows.forEach(row => {
                const roomCell = row.querySelector('td:first-child');
                if (roomCell && roomCell.textContent.trim().endsWith(roomId)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    });
</script>
@endpush