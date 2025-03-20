<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Engineering Department</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-davysgray text-eerieblack font-montserrat">
    <!-- Header -->
    <header class="bg-eerieblack shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center py-5">
                <div class="flex items-center gap-3">
                    <div class="text-silver text-2xl font-bold">Civil<span class="text-yellow">Engineering</span></div>
                </div>
                <div class="hidden md:flex gap-8">
                    <a href="#programs" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors">Programs</a>
                    <a href="#faculty" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors">Fakultas</a>
                    <a href="#research" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors">Research</a>
                    <a href="#facilities" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors">Fasilitas</a>
                </div>
                <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all"><a href="reserve">Reservasi</a></button>
                <button class="md:hidden text-silver text-2xl" id="menu-toggle">☰</button>
                <div class="hidden md:flex gap-8 md:flex-row bg-eerie-black p-4 absolute top-16 right-0 w-full md:w-auto z-50" id="nav-links">
                    <a href="#programs" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Programs</a>
                    <a href="#faculty" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Faculty</a>
                    <a href="#research" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Research</a>
                    <a href="#facilities" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Fasilitas</a>
                </div>
            </nav>
        </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Get references to the necessary elements
          const menuToggle = document.getElementById('menu-toggle');
          const navLinks = document.getElementById('nav-links');
          
          // Initialize menu state
          let isOpen = false;
          
          // Toggle function to handle menu visibility
          function toggleMenu() {
            isOpen = !isOpen;
            
            // Change hamburger icon to X when open
            menuToggle.textContent = isOpen ? '✕' : '☰';
            
            // Toggle nav visibility with animation
            if (isOpen) {
              navLinks.classList.remove('hidden');
              
              // Add animation classes
              setTimeout(() => {
                navLinks.classList.add('opacity-100');
                navLinks.classList.add('translate-y-0');
                navLinks.classList.remove('opacity-0');
                navLinks.classList.remove('-translate-y-2');
              }, 10);
            } else {
              // Add animation classes for closing
              navLinks.classList.add('opacity-0');
              navLinks.classList.add('-translate-y-2');
              navLinks.classList.remove('opacity-100');
              navLinks.classList.remove('translate-y-0');
              
              // Hide after animation completes
              setTimeout(() => {
                navLinks.classList.add('hidden');
              }, 300);
            }
          }
          
          // Add animation classes to navLinks
          navLinks.classList.add('transition-all', 'duration-300', 'ease-in-out', 'opacity-0', '-translate-y-2');
          
          // Enhance background and drop shadow for better appearance
          navLinks.classList.add('shadow-lg', 'border-t', 'bg-eerieblack');
          
          // Enhance mobile styling
          if (!navLinks.classList.contains('md:p-0')) {
            navLinks.classList.add('md:border-none', 'md:shadow-none', 'md:bg-transparent');
          }
          
          // Toggle mobile menu when hamburger is clicked
          menuToggle.addEventListener('click', toggleMenu);
          
          // Close mobile menu when a link is clicked
          const links = navLinks.querySelectorAll('a');
          links.forEach(link => {
            link.addEventListener('click', function() {
              if (window.innerWidth < 768 && isOpen) {
                toggleMenu();
              }
            });
          });
          
          // Close mobile menu on window resize if screen becomes larger
          window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && isOpen) {
              isOpen = false;
              menuToggle.textContent = '☰';
              navLinks.classList.remove('hidden', 'md:flex');
              navLinks.classList.add('md:flex');
            }
          });
          
          // Apply mobile-specific styling to links
          if (window.innerWidth < 768) {
            links.forEach(link => {
              link.classList.add('block', 'text-center', 'border-b', 'border-gray-700', 'pb-2', 'w-full');
            });
          }
          
          // Initial setup to ensure correct display state based on screen size
          if (window.innerWidth >= 768) {
            navLinks.classList.remove('hidden');
            navLinks.classList.add('md:flex');
          } else {
            navLinks.classList.add('hidden');
          }
        });
        </script>