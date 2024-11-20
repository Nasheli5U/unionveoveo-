@extends('layouts.main')

@section('main-content')
<div class="container mx-auto p-6">
    <h1 class="text-center text-4xl font-bold mb-8 text-[#A61B81] tracking-wide">Nosotros</h1>

    <!-- Misión y Visión -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-[#731259] uppercase">Misión</h2>
            <p class="text-lg text-gray-700 leading-relaxed">Nuestra misión es mejorar la calidad de vida de nuestros clientes proporcionando servicios ópticos de alta calidad, adaptados a sus necesidades individuales.</p>
        </div>
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-[#731259] uppercase">Visión</h2>
            <p class="text-lg text-gray-700 leading-relaxed">Aspiramos a ser líderes en el sector óptico en Perú, ofreciendo soluciones avanzadas y un servicio excepcional para todos nuestros clientes.</p>
        </div>
    </div>

    <!-- Años de experiencia -->
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-6 text-[#A61B81]">10 Años de Experiencia</h2>
        <p class="text-lg text-gray-700 leading-relaxed">Durante una década, hemos brindado un servicio de calidad a nuestros clientes, comprometidos con su bienestar visual y su satisfacción. Cada año nos ha permitido perfeccionar nuestras técnicas y ampliar nuestros conocimientos para ofrecer siempre lo mejor.</p>
    </div>

    <!-- Tarjetas de imágenes -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
        @foreach (['doctor.jpg', 'doctor2.jpg', 'doctor1.jpg'] as $index => $imagen)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
            <img src="{{ asset('imagenes/' . $imagen) }}" alt="Imagen {{ $index + 1 }}" class="w-full h-64 object-cover">
            <div class="p-4 text-center">
                <h5 class="text-xl font-bold text-[#731259]">Imagen {{ $index + 1 }}</h5>
                <p class="text-gray-600">Descripción breve de la imagen {{ $index + 1 }}.</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Equipo Profesional -->
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-6 text-[#A61B81]">Equipo Profesional</h2>
        <p class="text-lg text-gray-700 mb-8">Conoce a los expertos que cuidan de tu visión.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach ([
                ['nombre' => 'Dr. Juan Pérez', 'especialidad' => 'Especialista en Diagnóstico Ocular', 'imagen' => 'especialista1.jpg'],
                ['nombre' => 'Dra. María López', 'especialidad' => 'Optometrista', 'imagen' => 'especialista2.jpg'],
                ['nombre' => 'Dr. Carlos Gómez', 'especialidad' => 'Especialista en Lentes de Contacto', 'imagen' => 'especialista3.jpg'],
            ] as $especialista)
            <div class="text-center">
                <img src="{{ asset('imagenes/' . $especialista['imagen']) }}" alt="{{ $especialista['nombre'] }}" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover shadow-md">
                <h5 class="text-xl font-bold text-[#731259]">{{ $especialista['nombre'] }}</h5>
                <p class="text-gray-600 text-lg">{{ $especialista['especialidad'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Sección de Videos / Blog -->
    <div class="text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#A61B81]">Nuestro Blog y Videos</h2>
        <p class="text-lg text-gray-700 mb-8">Conoce más sobre el cuidado de tus ojos y la salud visual a través de nuestros videos.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ([
                ['url' => 'https://www.youtube.com/embed/video_id_1', 'titulo' => 'Consejos para el Cuidado de la Vista'],
                ['url' => 'https://www.youtube.com/embed/video_id_2', 'titulo' => 'Cómo Elegir tus Lentes'],
                ['url' => 'https://www.youtube.com/embed/video_id_3', 'titulo' => 'Últimos Avances en Tecnología Óptica'],
            ] as $video)
            <div>
                <iframe src="{{ $video['url'] }}" title="{{ $video['titulo'] }}" class="w-full h-48 rounded-lg shadow-lg" frameborder="0" allowfullscreen></iframe>
                <h5 class="text-xl font-semibold mt-4 text-[#731259]">{{ $video['titulo'] }}</h5>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
