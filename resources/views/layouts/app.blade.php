<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorium Teknik Sipil UMS</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-davysgray text-eerieblack font-montserrat">
    @include('component.header')
    
    <main>
        @yield('content')
    </main>

    @include('component.footer')

    @stack('scripts')
</body>
</html>