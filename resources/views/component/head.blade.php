<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorium Teknik Sipil UMS</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-davysgray text-eerieblack font-montserrat">
    <!-- Header -->
    <header class="bg-eerieblack fixed w-full z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <nav class="flex justify-between items-center py-5">
                <!-- Logo section -->
                <div class="flex items-center">
                    <img src="{{ asset('image/Logo_white.png') }}" alt="Logo" class="h-12 w-auto">
                    <div class="flex flex-col ml-2">
                        <span class="text-silver text-lg font-bold leading-tight">Lab Teknik Sipil</span>
                        <span class="text-yellow text-lg font-bold leading-tight">UMS</span>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex gap-8">
                    <!-- [Previous dropdown menus remain the same] -->
                    <!-- Dropdown 1 -->
                    <div class="relative group">
                        <a href="/profil"
                            class="text-silver  text-sm font-medium hover:text-yellow transition-colors flex items-center">
                            Tentang Lab Sipil
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div
                            class="absolute left-0 mt-2 w-48 bg-eerieblack rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-2 px-4">
                                <a href="/profil" class="block text-silver text-sm py-2 hover:text-yellow">Profil</a>
                                <a href="/profil#structure"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Struktur Organisasi</a>
                                <a href="/profil#lab-types"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Jenis Lab</a>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 2 -->
                    <div class="relative group">
                        <a href="/#programs"
                            class="text-silver text-sm font-medium hover:text-yellow transition-colors flex items-center">
                            Fasilitas dan Layanan
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div
                            class="absolute left-0 mt-2 w-48 bg-eerieblack rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-2 px-4">
                                <a href="/permohonan"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Permohonan Penelitian</a>
                                <a href="/booking-Eksternal"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Book Lab Eksternal</a>
                                <a href="/permohonan-bahan"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Permohonan Bahan</a>
                                <a href="/pinjam-ruang" class="block text-silver text-sm py-2 hover:text-yellow">Booking
                                    Ruang</a>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 3 -->
                    <div class="relative group">
                        <a href="/informasi"
                            class="text-silver  text-sm font-medium hover:text-yellow transition-colors flex items-center">
                            Informasi
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div
                            class="absolute left-0 mt-2 w-48 bg-eerieblack rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-2 px-4">
                                <a href="/informasi#kontak"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Kontak Layanan</a>
                                <a href="/informasi#tata-tertib"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Tata Tertib</a>
                                <a href="/informasi#sop"
                                    class="block text-silver text-sm py-2 hover:text-yellow">SOP</a>
                                <a href="/informasi#kebijakan-k3"
                                    class="block text-silver text-sm py-2 hover:text-yellow">Safety Instruction</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button
                        class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">
                        <a href="/#programs">Reservasi</a>
                    </button>

                    <!-- Mobile menu button -->
                    <button class="md:hidden text-silver text-2xl" id="menu-toggle">☰</button>
                </div>
            </nav>
        </div>

        <!-- Mobile Navigation Menu -->
        <!-- [Rest of the mobile menu code remains the same] -->
        <div class="hidden md:hidden bg-eerieblack w-full border-t border-gray-700 shadow-lg" id="mobile-menu">
            <!-- Mobile dropdown 1 -->
            <div class="mobile-dropdown">
                <div
                    class="w-full text-silver flex justify-between items-center px-4 py-3 hover:bg-gray-800 transition-colors"
                    data-dropdown="dropdown1">
                    <span class=" text-sm font-medium">Tentang Lab Sipil</span>
                    <svg class="w-4 h-4 transform transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                <div class="hidden bg-gray-800 px-4 py-2" id="dropdown1">
                    <a href="/profil" class="block text-silver text-sm py-2 hover:text-yellow">Profil</a>
                    <a href="/profil#structure" class="block text-silver text-sm py-2 hover:text-yellow">Struktur
                        Organisasi</a>
                    <a href="/profil#lab-types" class="block text-silver text-sm py-2 hover:text-yellow">Jenis Lab</a>
                </div>
            </div>

            <!-- Mobile dropdown 2 -->
            <div class="mobile-dropdown">
                <div
                    class="w-full text-silver flex justify-between items-center px-4 py-3 hover:bg-gray-800 transition-colors"
                    data-dropdown="dropdown2">
                    <span class=" text-sm font-medium">Fasilitas dan Layanan</span>
                    <svg class="w-4 h-4 transform transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </div>
                <div class="hidden bg-gray-800 px-4 py-2" id="dropdown2">
                    <a href="/permohonan" class="block text-silver text-sm py-2 hover:text-yellow">Permohonan
                        Penelitian</a>
                    <a href="/booking-Eksternal" class="block text-silver text-sm py-2 hover:text-yellow">Book Lab
                        Eksternal</a>
                    <a href="/permohonan-bahan" class="block text-silver text-sm py-2 hover:text-yellow">Permohonan
                        Bahan</a>
                    <a href="/pinjam-ruang" class="block text-silver text-sm py-2 hover:text-yellow">Booking Ruang</a>
                </div>
            </div>

            <!-- Mobile dropdown 3 -->
            <div class="mobile-dropdown">
                <div
                    class="w-full text-silver flex justify-between items-center px-4 py-3 hover:bg-gray-800 transition-colors"
                    data-dropdown="dropdown3">
                    <a href="/informasi" class=" text-sm font-medium">Informasi</a>
                    <svg class="w-4 h-4 transform transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </div>
                <div class="hidden bg-gray-800 px-4 py-2" id="dropdown3">
                    <a href="/informasi#kontak" class="block text-silver text-sm py-2 hover:text-yellow">Kontak
                        Layanan</a>
                    <a href="/informasi#tata-tertib" class="block text-silver text-sm py-2 hover:text-yellow">Tata
                        Tertib</a>
                    <a href="/informasi#sop" class="block text-silver text-sm py-2 hover:text-yellow">SOP</a>
                    <a href="/informasi#kebijakan-k3" class="block text-silver text-sm py-2 hover:text-yellow">Safety
                        Instruction</a>
                </div>
            </div>

        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menu toggle functionality
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            // Initialize menu state
            let isMenuOpen = false;

            // Toggle function for main mobile menu
            function toggleMenu() {
                isMenuOpen = !isMenuOpen;

                // Change hamburger icon to X when open
                menuToggle.textContent = isMenuOpen ? '✕' : '☰';

                // Toggle menu visibility with animation
                if (isMenuOpen) {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => {
                        mobileMenu.classList.add('opacity-100');
                        mobileMenu.classList.remove('opacity-0');
                    }, 10);
                } else {
                    mobileMenu.classList.add('opacity-0');
                    mobileMenu.classList.remove('opacity-100');

                    // Hide after animation completes
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                    }, 300);
                }
            }

            // Add animation classes
            mobileMenu.classList.add('transition-all', 'duration-300', 'ease-in-out', 'opacity-0');

            // Toggle mobile menu when hamburger is clicked
            menuToggle.addEventListener('click', toggleMenu);

            // Mobile dropdown functionality
            const mobileDropdowns = document.querySelectorAll('.mobile-dropdown [data-dropdown]');

            mobileDropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function() {
                    const dropdownId = this.getAttribute('data-dropdown');
                    const dropdownContent = document.getElementById(dropdownId);
                    const icon = this.querySelector('svg');

                    // Toggle dropdown content
                    if (dropdownContent.classList.contains('hidden')) {
                        dropdownContent.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    } else {
                        dropdownContent.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    }
                });
            });

            // Close mobile menu on window resize if screen becomes larger
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && isMenuOpen) {
                    isMenuOpen = false;
                    menuToggle.textContent = '☰';
                    mobileMenu.classList.add('hidden');
                }
            });

            // Close mobile menu when a link is clicked
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (isMenuOpen) {
                        toggleMenu();
                    }
                });
            });
        });
    </script>
</body>

</html>
