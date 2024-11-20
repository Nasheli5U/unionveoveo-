@extends('layouts.main')

@section('main-content')
<div class="faq-container">
    <h2 class="faq-title">Preguntas Frecuentes</h2>

    <div class="accordion">
        <!-- Preguntas sobre el pedido -->
        <h3 class="section-title">Preguntas sobre el Pedido</h3>
        <div class="accordion-item">
            <button class="accordion-button">¿Cómo puedo saber si el producto que compré o que quiero comprar tiene stock?</button>
            <div class="accordion-content">
                <p>Sólo estarán disponibles para la venta online productos que cuentan con stock en tienda virtual.</p>
            </div>
        </div>

        <!-- Preguntas sobre el pago -->
        <h3 class="section-title">Preguntas sobre el Pago</h3>
        <div class="accordion-item">
            <button class="accordion-button">¿Cuáles son las opciones para efectuar el pago?</button>
            <div class="accordion-content">
                <p>El pago solo se puede hacer a través de Izipay con cualquier tarjeta: Visa, Mastercard, Diners, o American Express.</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-button">¿Puedo pagar con transferencia?</button>
            <div class="accordion-content">
                <p>No, por ahora no está habilitado el pago a través de transferencia.</p>
            </div>
        </div>
        <!-- Agrega más preguntas de cada sección aquí -->
    </div>
</div>
@endsection
