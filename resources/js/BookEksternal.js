document.addEventListener('DOMContentLoaded', function() {
    // Select all elements
    const checkboxes = document.querySelectorAll('.pengujian-checkbox');
    const jumlahInputs = document.querySelectorAll('.jumlah-input');
    const subtotals = document.querySelectorAll('.subtotal');
    const totalHarga = document.getElementById('total-harga');
    
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
    
    // Initialize when DOM is loaded
    initializeForm();
});