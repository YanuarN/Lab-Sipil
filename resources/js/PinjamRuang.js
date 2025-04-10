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
});