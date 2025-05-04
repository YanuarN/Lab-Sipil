import{S as g}from"./sweetalert2.esm.all-B0Dix5B2.js";document.addEventListener("DOMContentLoaded",function(){document.querySelector(".bg-green-50")&&g.fire({title:"Permohonan Berhasil!",text:"Permohonan bahan sudah berhasil dibuat. Silahkan datang ke laboratorium.",icon:"success",confirmButtonText:"OK",confirmButtonColor:"#facc15"});const l=document.getElementById("tambah-anggota");l&&l.addEventListener("click",function(){const t=document.getElementById("anggota-container"),e=t.querySelectorAll(".anggota-item").length;if(e>=5)return;const a=document.createElement("div");a.className="anggota-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50",a.innerHTML=`
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nama Anggota</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                        name="anggota[${e}][nama]">
                </div>
                <div class="relative">
                    <label class="block text-gray-700 font-medium mb-2">NIM Anggota</label>
                    <div class="flex">
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                            name="anggota[${e}][nim]">
                        <button type="button" class="hapus-anggota px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            `,t.appendChild(a),r(),o()});function o(){const t=document.getElementById("anggota-container"),e=document.getElementById("tambah-anggota");t.querySelectorAll(".anggota-item").length>=5?e.classList.add("opacity-50","cursor-not-allowed"):e.classList.remove("opacity-50","cursor-not-allowed")}const i=document.getElementById("tambah-material");i&&i.addEventListener("click",function(){const t=document.getElementById("nama-material-container"),e=t.querySelectorAll(".material-item").length;if(e>=5)return;const a=document.createElement("div");a.className="material-item grid md:grid-cols-2 gap-4 p-4 border border-gray-200 rounded-md bg-gray-50",a.innerHTML=`
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Nama Material</label>
                    <input type="text" placeholder="Agregart Halus" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                        name="nama_material[${e}][nama]" required>
                </div>
                <div class="relative">
                    <label class="block text-gray-700 font-medium mb-2">Jumlah</label>
                    <div class="flex">
                        <input type="text" placeholder="*50Kg" class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:ring-2 focus:ring-yellow focus:border-transparent transition-all" 
                            name="nama_material[${e}][jumlah]" required>
                        <button type="button" class="hapus-material px-4 py-2 bg-red-500 text-white rounded-r-md hover:bg-red-600 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            `,t.appendChild(a),r(),c()});function c(){const t=document.getElementById("nama-material-container"),e=document.getElementById("tambah-material");t.querySelectorAll(".material-item").length>=5?e.classList.add("opacity-50","cursor-not-allowed"):e.classList.remove("opacity-50","cursor-not-allowed")}function r(){document.querySelectorAll(".hapus-anggota").forEach(a=>{a.onclick=function(){this.closest(".anggota-item").remove(),s("anggota-container","anggota"),o()}}),document.querySelectorAll(".hapus-material").forEach(a=>{a.onclick=function(){this.closest(".material-item").remove(),s("nama-material-container","nama_material"),c()}})}function s(t,e){const d=document.getElementById(t).querySelectorAll(`.${e==="anggota"?"anggota-item":"material-item"}`);for(let n=0;n<d.length;n++)d[n].querySelectorAll("input").forEach(m=>{const u=m.getAttribute("name").replace(/\[\d+\]/,`[${n}]`);m.setAttribute("name",u)})}r(),o()});
