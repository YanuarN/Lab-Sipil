// Import SweetAlert if using ES modules
import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function() {
    // Select all elements
    const checkboxes = document.querySelectorAll('.pengujian-checkbox');
    const jumlahInputs = document.querySelectorAll('.jumlah-input');
    const subtotals = document.querySelectorAll('.subtotal');
    const totalHarga = document.getElementById('total-harga');
    const submitBtn = document.getElementById('submitBtn');
    const bookingForm = document.getElementById('bookingForm');
    
    // Format number as Indonesian Rupiah
    function formatRupiah(angka) {
        return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    
    // Calculate subtotals and total
    function hitungTotal() {
        let total = 0;
        
        // Loop through all checkboxes
        checkboxes.forEach((checkbox, index) => {
            const harga = parseInt(checkbox.dataset.harga) || 0;
            const jumlah = parseInt(jumlahInputs[index].value) || 0;
            
            if (checkbox.checked) {
                // Calculate subtotal
                const subtotal = harga * jumlah;
                
                // Update subtotal display
                subtotals[index].textContent = formatRupiah(subtotal);
                
                // Add to total
                total += subtotal;
            } else {
                // Reset subtotal if unchecked
                subtotals[index].textContent = 'Rp 0';
            }
        });
        
        // Update total display
        totalHarga.textContent = formatRupiah(total);
        
        return total;
    }
    
    // Initialize the form
    function initializeForm() {
        // Set initial values
        checkboxes.forEach((checkbox, index) => {
            // Make sure quantity input is disabled initially
            jumlahInputs[index].disabled = !checkbox.checked;
            
            // Set initial value based on checkbox state
            if (checkbox.checked) {
                jumlahInputs[index].value = 1;
            } else {
                jumlahInputs[index].value = 0;
            }
        });
        
        // Calculate initial totals
        hitungTotal();
    }
    
    // Add event listeners to checkboxes
    checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function() {
            // Enable/disable quantity input based on checkbox state
            jumlahInputs[index].disabled = !this.checked;
            
            // Set default quantity value
            if (this.checked) {
                jumlahInputs[index].value = 1;
            } else {
                jumlahInputs[index].value = 0;
            }
            
            // Recalculate totals
            hitungTotal();
        });
    });
    
    // Add event listeners to quantity inputs
    jumlahInputs.forEach((input, index) => {
        input.addEventListener('input', function() {
            // Ensure minimum value is 1 when checkbox is checked
            if (checkboxes[index].checked && parseInt(this.value) < 1) {
                this.value = 1;
            }
            
            // Recalculate totals
            hitungTotal();
        });
    });
    
    // Add SweetAlert confirmation on form submission
    if (submitBtn) {
        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Check if at least one service is selected
            let hasSelection = false;
            let total = hitungTotal();
            
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    hasSelection = true;
                }
            });
            
            if (!hasSelection) {
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Silakan pilih minimal satu jenis pengujian',
                    icon: 'warning',
                    confirmButtonColor: '#EAB308',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            // Get form data for confirmation
            const namaInstansi = document.getElementById('nama_instansi').value;
            const namaProyek = document.getElementById('nama_proyek').value;
            const tanggalTes = document.getElementById('tanggal_tes').value;
            
            if (!namaInstansi || !namaProyek || !tanggalTes) {
                Swal.fire({
                    title: 'Data Tidak Lengkap',
                    text: 'Mohon lengkapi semua data booking yang diperlukan',
                    icon: 'error',
                    confirmButtonColor: '#EAB308',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            // Show confirmation dialog
            Swal.fire({
                title: 'Konfirmasi Reservasi',
                html: `
                    <div class="text-left">
                        <p><strong>Instansi:</strong> ${namaInstansi}</p>
                        <p><strong>Proyek:</strong> ${namaProyek}</p>
                        <p><strong>Tanggal Tes:</strong> ${tanggalTes}</p>
                        <p><strong>Total Biaya:</strong> ${totalHarga.textContent}</p>
                    </div>
                    <p class="mt-4">Apakah Anda yakin ingin melanjutkan reservasi?</p>
                `,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#EAB308',
                cancelButtonColor: '#78716c',
                confirmButtonText: 'Ya, Lanjutkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading state
                    Swal.fire({
                        title: 'Memproses...',
                        html: 'Mohon tunggu sebentar',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    
                    // Submit the form and show success message
                    bookingForm.submit();
                    Swal.fire({
                        title: 'Booking Berhasil!',
                        text: 'Silahkan datang ke laboratorium sesuai jadwal yang telah ditentukan',
                        icon: 'success',
                        confirmButtonColor: '#EAB308',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false,
                        showConfirmButton: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
                }
            });
        });
    }
    
    // Initialize when DOM is loaded
    initializeForm();
});