document.addEventListener('DOMContentLoaded', function() {
    // Script untuk menambah anggota
    const tambahAnggotaBtn = document.getElementById('tambah-anggota');
    if (tambahAnggotaBtn) {
        tambahAnggotaBtn.addEventListener('click', function() {
            const container = document.getElementById('anggota-container');
            const index = container.querySelectorAll('.anggota-item').length;
            
            const div = document.createElement('div');
            div.className = 'anggota-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50';
            
            div.innerHTML = `
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nama Anggota</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                        name="anggota[${index}][nama]">
                </div>
                <div class="relative">
                    <label class="block text-gray-700 font-medium mb-2">NIM Anggota</label>
                    <div class="flex">
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                            name="anggota[${index}][nim]">
                        <button type="button" class="hapus-anggota px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            `;
            
            container.appendChild(div);
            addDeleteListeners();
        });
    }

    // Script untuk menambah material
    const tambahMaterialBtn = document.getElementById('tambah-material');
    if (tambahMaterialBtn) {
        tambahMaterialBtn.addEventListener('click', function() {
            const container = document.getElementById('nama-material-container');
            const index = container.querySelectorAll('.material-item').length;
            
            const div = document.createElement('div');
            div.className = 'material-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50';
            
            div.innerHTML = `
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nama Material</label>
                    <input type="text" placeholder="Agregart Halus" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                        name="nama_material[${index}][nama]" required>
                </div>
                <div class="relative">
                    <label class="block text-gray-700 font-medium mb-2">Jumlah</label>
                    <div class="flex">
                        <input type="text" placeholder="*50Kg" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                            name="nama_material[${index}][jumlah]" required>
                        <button type="button" class="hapus-material px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            `;
            
            container.appendChild(div);
            addDeleteListeners();
        });
    }

    function addDeleteListeners() {
        // Add event listeners for delete buttons
        const deleteButtons = document.querySelectorAll('.hapus-anggota');
        deleteButtons.forEach(button => {
            button.onclick = function() {
                this.closest('.anggota-item').remove();
                reindexInputs('anggota-container', 'anggota');
            };
        });
        
        const deleteMaterialButtons = document.querySelectorAll('.hapus-material');
        deleteMaterialButtons.forEach(button => {
            button.onclick = function() {
                this.closest('.material-item').remove();
                reindexInputs('nama-material-container', 'nama_material');
            };
        });
    }

    function reindexInputs(containerId, fieldName) {
        const container = document.getElementById(containerId);
        const items = container.querySelectorAll(`.${fieldName === 'anggota' ? 'anggota-item' : 'material-item'}`);
        
        for (let i = 0; i < items.length; i++) {
            const inputs = items[i].querySelectorAll('input');
            inputs.forEach(input => {
                const currentName = input.getAttribute('name');
                const newName = currentName.replace(/\[\d+\]/, `[${i}]`);
                input.setAttribute('name', newName);
            });
        }
    }

    // Initialize delete listeners for existing items
    addDeleteListeners();
});