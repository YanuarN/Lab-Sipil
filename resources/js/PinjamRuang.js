document.addEventListener('DOMContentLoaded', function() {
    const tanggalInput = document.getElementById('tanggal');
    const jamMulaiInput = document.getElementById('jam_mulai');
    const jamSelesaiInput = document.getElementById('jam_selesai');
    
    // Set minimal tanggal ke hari ini
    const today = new Date().toISOString().split('T')[0];
    tanggalInput.min = today;
    
    // Validasi waktu
    function validateTimes() {
        if (jamMulaiInput.value && jamSelesaiInput.value) {
            if (jamSelesaiInput.value <= jamMulaiInput.value) {
                jamSelesaiInput.classList.add('is-invalid');
                return false;
            } else {
                jamSelesaiInput.classList.remove('is-invalid');
                return true;
            }
        }
        return true;
    }
    
    jamMulaiInput.addEventListener('change', function() {
        jamSelesaiInput.min = this.value;
        validateTimes();
    });
    
    jamSelesaiInput.addEventListener('change', validateTimes);
    
    // Validasi saat form disubmit
    document.querySelector('form').addEventListener('submit', function(e) {
        if (!validateTimes()) {
            e.preventDefault();
            alert('Jam selesai harus setelah jam mulai');
        }
    });

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