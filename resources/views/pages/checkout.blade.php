<!-- resources/views/pages/checkout.blade.php -->
@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Detalles de Pago</h1>

    @if (count($carrito) > 0)
        <form action="{{ route('pago.procesar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="direccion">Dirección de Envío</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="metodo_pago">Método de Pago</label>
                <select name="metodo_pago" id="metodo_pago" class="form-control" required>
                    <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Proceder con el Pago</button>
        </form>
    @else
        <p>No hay productos en el carrito. Agrega algunos productos para proceder al pago.</p>
    @endif
</div>
@endsection
