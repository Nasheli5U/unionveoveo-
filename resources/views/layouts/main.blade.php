<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web Optica')</title>
    <!-- Agregar el enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Agregar tu CSS personalizado -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/carrucel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/garantias.css') }}">
    <link rel="stylesheet" href="{{ asset('css/politicas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preguntas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vision-carretera.css') }}">
    @vite('resources/css/app.css')


</head>
<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('main-content') 
    </div>
    @include('partials.footer')
    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script del carrusel -->
    <script src="{{ asset('js/carrucel.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/preguntas.js') }}"></script>
    <script src="{{ asset('js/vision-carretera.js') }}"></script>
    
    <!-- Scripts adicionales específicos de cada vista -->
    @yield('scripts')
</body>
</html>