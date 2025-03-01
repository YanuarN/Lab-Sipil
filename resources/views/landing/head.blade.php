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
                    <a href="#facilities" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors">Facilities</a>
                    <a href="#contact" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors">Contact</a>
                </div>
                <button class="bg-yellow text-eerieblack px-6 py-2 rounded-md font-semibold uppercase text-sm hover:bg-yellow-500 hover:shadow-lg transition-all">Reservasi</button>
                <button class="md:hidden text-silver text-2xl" id="menu-toggle">☰</button>
                <div class="hidden md:flex gap-8 md:flex-row bg-eerie-black p-4 absolute top-16 right-0 w-full md:w-auto z-50" id="nav-links">
                    <a href="#programs" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Programs</a>
                    <a href="#faculty" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Faculty</a>
                    <a href="#research" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Research</a>
                    <a href="#facilities" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Facilities</a>
                    <a href="#contact" class="text-silver uppercase text-sm font-medium hover:text-yellow transition-colors py-2">Contact</a>
                </div>
            </nav>
        </div>
    </header>