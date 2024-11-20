@extends('layouts.main')

@section('main-content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6" style="color: #731259;">VER Y VERSE BIEN</h1>

    <!-- Slider -->
    <div class="slider relative">
        <div class="main-image">
            <img src="/imagenes/images2.jpg" alt="Imagen Principal" id="currentImage" class="w-full rounded">
        </div>

        <div class="thumbnails flex justify-center mt-4 space-x-2">
            <img src="/imagenes/images2.jpg" alt="Foto 1" class="thumbnail w-20 h-20 rounded cursor-pointer" onclick="changeImage('/imagenes/images2.jpg')">
            <img src="/imagenes/images3.jpg" alt="Foto 2" class="thumbnail w-20 h-20 rounded cursor-pointer" onclick="changeImage('/imagenes/images3.jpg')">
            <img src="/imagenes/images4.jpg" alt="Foto 3" class="thumbnail w-20 h-20 rounded cursor-pointer" onclick="changeImage('/imagenes/images4.jpg')">
            <img src="/imagenes/images5.jpg" alt="Foto 4" class="thumbnail w-20 h-20 rounded cursor-pointer" onclick="changeImage('/imagenes/images5.jpg')">
            <img src="/imagenes/images6.jpg" alt="Foto 5" class="thumbnail w-20 h-20 rounded cursor-pointer" onclick="changeImage('/imagenes/images6.jpg')">
        </div>
    </div>
    
    <!-- Sección de Categorías -->
    @if($categorias->isNotEmpty())
        <div class="categorias mt-10">
            @foreach ($categorias as $categoria)
                <div class="categoria mb-8">
                    <h2 class="text-2xl font-bold mb-4" style="color: #731259;">{{ strtoupper($categoria->nombre) }}</h2>

                    @if(isset($productosPorCategoria[$categoria->ID_categoria]) && $productosPorCategoria[$categoria->ID_categoria]->isNotEmpty())
                        <div class="productos grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach ($productosPorCategoria[$categoria->ID_categoria] as $producto)
                                <div class="producto bg-white p-4 shadow-md rounded">
                                    <img src="{{ asset('images/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="w-full h-48 object-cover rounded mb-3">
                                    <h3 class="font-semibold text-lg">{{ $producto->nombre }}</h3>
                                    <p class="text-gray-500">{{ $producto->precio }} USD</p>
                                    <form action="{{ route('carrito.agregar', $producto->ID_producto) }}" method="POST" class="mt-3">
                                        @csrf
                                        <button type="submit" class="bg-[#A61B81] text-white px-4 py-2 rounded hover:bg-[#7503A6] transition">Agregar al carrito</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">No hay productos disponibles en esta categoría.</p>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500 mt-5">No hay categorías disponibles.</p>
    @endif

    <!-- Sección de Testimonios -->
    <div class="testimonios mt-10">
        <h2 class="text-2xl font-bold mb-6" style="color: #731259;">Testimonios de Nuestros Clientes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testimonios as $testimonio)
                <div class="testimonio bg-gray-100 p-4 rounded shadow-md">
                    <p><strong class="text-[#A61B81]">{{ $testimonio->email }}</strong></p>
                    <p class="text-gray-600">{{ $testimonio->contenido }}</p>
                    <div class="mt-3">
                        @for($i = 0; $i < $testimonio->rating; $i++)
                            <span class="text-yellow-500">&#9733;</span>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('testimonios.index') }}" class="block text-center mt-6 bg-[#A61B81] text-white px-4 py-2 rounded hover:bg-[#7503A6] transition">Deja tu Testimonio</a>
    </div>
</div>

<script>
function changeImage(imagePath) {
    document.getElementById('currentImage').src = imagePath;
}
</script>
@endsection
