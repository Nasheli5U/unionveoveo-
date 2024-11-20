<!-- resources/views/subcategoria/productos.blade.php -->
@extends('layouts.main')

@section('main-content')
<div class="container">
    <h2>Productos en la subcategoría: {{ $subcategoria->nombre }}</h2>

    <div class="row">
        @foreach ($subcategoria->productos as $producto)
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">${{ $producto->precio }}</p>
                        <a href="{{ route('carrito.agregar', $producto->id) }}" class="btn btn-primary">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
