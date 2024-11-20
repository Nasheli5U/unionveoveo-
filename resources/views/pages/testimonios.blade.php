@extends('layouts.main')

@section('main-content')
<div class="container mx-auto p-6">
    <h1 class="text-center text-3xl font-bold mb-6 text-[#A61B81]">Testimonios</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Formulario para dejar un testimonio -->
        <div class="col-span-1 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4 text-[#731259]">Deja tu Testimonio</h2>
            <form action="{{ route('testimonios.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#A61B81]" required>
                </div>
                <div>
                    <label for="contenido" class="block text-gray-700 font-medium">Tu Testimonio</label>
                    <textarea name="contenido" id="contenido" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#A61B81]" required></textarea>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Calificación</label>
                    <div class="flex space-x-2 text-yellow-400">
                        @for($i = 1; $i <= 5; $i++)
                        <label>
                            <input type="radio" name="rating" value="{{ $i }}" class="hidden">
                            <span class="text-2xl cursor-pointer">&#9733;</span>
                        </label>
                        @endfor
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#A61B81] text-white py-2 rounded-lg hover:bg-[#7503A6] transition">Enviar</button>
            </form>
        </div>

        <!-- Lista de testimonios -->
        <div class="col-span-3">
            <h2 class="text-2xl font-semibold mb-4 text-[#731259]">Lo que dicen nuestros clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($testimonios as $testimonio)
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <p class="text-sm text-gray-500 mb-2">{{ $testimonio->email }}</p>
                    <p class="text-gray-700">{{ $testimonio->contenido }}</p>
                    <div class="mt-2 text-yellow-400">
                        @for($i = 0; $i < $testimonio->rating; $i++)
                        <span>&#9733;</span>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
