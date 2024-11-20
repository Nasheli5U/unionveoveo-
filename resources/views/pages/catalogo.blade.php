@extends('layouts.main')

@section('main-content')
    <h1>Catálogo de Productos</h1>

    <form method="GET" action="{{ route('catalogo.index') }}">
        <select name="categoria_id">
            <option value="">Selecciona Categoría</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>

        <select name="marca_id">
            <option value="">Selecciona Marca</option>
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
            @endforeach
        </select>

        <select name="color_id">
            <option value="">Selecciona Color</option>
            @foreach($colores as $color)
                <option value="{{ $color->id }}">{{ $color->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Aplicar Filtros</button>
    </form>

    <div class="productos">
        @forelse($productos as $producto)
            <div class="producto">
                <h2>{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                <p>Precio: {{ $producto->precio }}</p>
            </div>
        @empty
            <p>No se encontraron productos.</p>
        @endforelse
    </div>
@endsection
