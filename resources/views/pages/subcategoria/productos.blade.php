@extends('layouts.app')

@section('content')
<style>
    .add-to-cart {
        position: relative;
        background-color: #f8f9fa;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
        overflow: hidden;
    }

    .add-to-cart:hover {
        background-color: #007bff;
        color: white;
    }

    .add-to-cart .cart svg {
        display: block;
        width: 24px;
        height: 19px;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
        position: relative;
        z-index: 1;
        transform: translateZ(0);
    }

    .add-to-cart .cart img {
        display: block;
        position: absolute;
        bottom: 7px;
        left: 50%;
        opacity: 1;
        transform-origin: 50% 100%;
        transform: translate(-50%, 0) scale(1.2) rotate(0deg) translateZ(0);
    }
</style>

    <div class="container">
        <h2>{{ strtoupper($subcategoria->nombre) }} - Productos</h2>

        <div class="productos row">
            @foreach($productos as $producto)
                <div class="producto col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/productos/' . $producto->imagen ?? 'default-image.jpg') }}" 
                             alt="{{ $producto->nombre }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->marca }}</p>
                            <p class="card-text">Precio: ${{ number_format($producto->precio, 2) }} USD</p>
                            <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary add-to-cart">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2V12H2V14H12V22H14V14H22V12H14V2H12Z" fill="currentColor"/>
                                    </svg>
                                    <span class="cart">
                                        <img src="{{ asset('imagenes/lentes.png') }}" alt="Lentes" class="cart-img">
                                    </span>
                                    Agregar al Carrito
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

