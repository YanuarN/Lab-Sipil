import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import Swal from 'sweetalert2'

document.addEventListener('DOMContentLoaded', function() {
    // Check for NIM validation errors
    const nimErrorElement = document.querySelector('[name="nim"]');
    if (nimErrorElement) {
        const nimErrorMessage = document.querySelector('[name="nim"] + p.text-red-500');
        if (nimErrorMessage) {
            // Get the error message text
            const errorMessage = nimErrorMessage.textContent.trim();
            
            // Show SweetAlert with the error message
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: errorMessage
            });
            
            // Focus and scroll to the NIM field
            nimErrorElement.focus();
            nimErrorElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    // Initialize Calendar
    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek'
        },
        events: '/get-booking-events', // Ambil data events dari route
        eventContent: function(arg) {
            const count = arg.event.extendedProps.count;
            let color = 'bg-green-500';
            if (count >= 10) {
                color = 'bg-red-500';
            } else if (count >= 7) {
                color = 'bg-amber-600';
            }
            
            return { 
                html: `<div class="p-1">
                        <div class="flex items-center">
                            <div class="w-3 h-3 ${color} rounded-full mr-1"></div>
                            <span class="text-xs font-medium">Pengguna: ${count}</span>
                        </div>
                    </div>`
            };
        },
        selectable: true,
        selectMirror: true,
        select: function(info) {
            handleDateSelection(info.startStr);
        },
        eventClick: function(info) {
            const count = info.event.extendedProps.count;
            if (count >= 10) {
                Swal.fire({
                    icon: "error",
                    title: "Kuota Penuh",
                    text: "Silahkan Pilih Tanggal Lain",
                  });
            } else {
                handleDateSelection(info.event.startStr);
            }
        }
    });
    calendar.render();

    // Handle date selection - common function for both select and eventClick
    function handleDateSelection(startDate) {
        // Format tanggal untuk tampilan lebih mudah dibaca
        const date = new Date(startDate);
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = date.toLocaleDateString('id-ID', options);
        
        // Tampilkan tanggal yang dipilih
        document.getElementById('selectedDate').textContent = formattedDate;
        document.getElementById('selected-date-container').classList.remove('hidden');

        // Periksa ketersediaan
        checkKuota(startDate);
    }

    // Check kuota function
    function checkKuota(startDate) {
        fetch('/cek-kuota?date=' + startDate)
            .then(response => response.json())
            .then(data => {
                if (data.kuotaPenuh) {
                    Swal.fire({
                        icon: "error",
                        title: "Kuota Penuh",
                        text: "Silahkan Pilih Tanggal Lain",
                      });
                } else {
                    // Show form and set date
                    document.getElementById('bookingForm').classList.remove('hidden');
                    document.getElementById('tanggal_mulai').value = startDate;
                    
                    // Scroll ke form
                    document.getElementById('bookingForm').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Terjadi kesalahan saat memeriksa ketersediaan. Silakan coba lagi."
                  });
            });
    }

    // Close form button
    document.getElementById('tutup-form').addEventListener('click', function() {
        document.getElementById('bookingForm').classList.add('hidden');
        document.getElementById('selected-date-container').classList.add('hidden');
    });

    // Dynamic equipment fields
    let alatContainer = document.getElementById('alat-container');
    let tambahAlatButton = document.getElementById('tambah-alat');
    let index = alatContainer.querySelectorAll('.alat-item').length;

    tambahAlatButton.addEventListener('click', function() {
        let alatItem = document.createElement('div');
        alatItem.classList.add('alat-item', 'flex', 'items-center', 'space-x-2', 'p-3', 'bg-gray-50', 'rounded-md');
        alatItem.innerHTML = `
            <select name="alat[][nama]" class="flex-grow px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" required>
                <option value="">-- Pilih Alat --</option>
                @foreach($daftar_alat as $item)
                    <option value="{{ $item->nama_alat }}">{{ $item->nama_alat }}</option>
                @endforeach
            </select>
            <button type="button" class="hapus-alat px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition-all">Hapus</button>
        `;
        alatContainer.appendChild(alatItem);
        index++;
    });

    // Delete equipment field
    alatContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('hapus-alat')) {
            if (alatContainer.querySelectorAll('.alat-item').length > 1) {
                e.target.parentElement.remove();
            } else {
                alert('Minimal satu alat harus dipilih.');
            }
        }
    });
});