@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Carrito de Compras</h1>

    @if($carritoItems->isNotEmpty())
        <table class="table carrito-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carritoItems as $item)
                    <tr>
                        <td>{{ $item->producto->nombre }}</td>
                        <td>${{ number_format($item->producto->precio, 2) }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>${{ number_format($item->producto->precio * $item->cantidad, 2) }}</td>
                        <td>
                            <!-- Formulario para eliminar un producto -->
                            <form action="{{ route('carrito.eliminar', $item->producto_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="carrito-buttons">
            <form action="{{ route('carrito.vaciar') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Vaciar Carrito</button>
            </form>
            <a href="{{ route('carrito.checkout') }}" class="btn btn-success">Procesar Compra</a>
        </div>
    @else
        <p>No hay productos en el carrito.</p>
    @endif
</div>
@endsection
