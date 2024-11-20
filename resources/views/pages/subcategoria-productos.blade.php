@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2>Productos en {{ $subcategoria->nombre }}</h2>

        <div class="row">
            @foreach ($subcategoria->productos as $producto) <!-- Cambiar de $productos a $producto -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('imagen/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}"> <!-- Cambiar de $productos a $producto -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5> <!-- Cambiar de $productos a $producto -->
                            <p class="card-text">{{ $producto->marca }}</p>
                            <p class="card-text">Precio: ${{ number_format($producto->precio, 2) }}</p>
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
