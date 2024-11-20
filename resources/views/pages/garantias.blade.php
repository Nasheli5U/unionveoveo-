@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Nuestras Garantías</h1>
    <p>En "Veo Veo", nos comprometemos a ofrecer una experiencia excepcional antes, durante y después de tu compra. Por ello, contamos con diversas opciones de garantía para que disfrutes de tu experiencia con nuestros productos al máximo.</p>

    <!-- Garantía Óptica -->
    <div class="garantia-item">
        <div class="icon">
            <img src="{{ asset('imagenes/optical-icon.png') }}" alt="Óptica" />
        </div>
        <div class="garantia-info">
            <h2>Garantía Óptica</h2>
            <ul>
                <li><strong>Plazo:</strong> 30 días desde la entrega, con boleta original o copia.</li>
                <li><strong>Condiciones:</strong> Cambios solo aplican para lentes de contacto y lunas, excluyendo monturas. Se aceptan cambios solo con evaluación médica correspondiente.</li>
                <li><strong>Notas:</strong> Si adquiriste lentes de contactos desechables, deben devolverse cerradas.</li>
            </ul>
        </div>
    </div>

    <!-- Garantía de Lentes Progresivos -->
    <div class="garantia-item">
        <div class="icon">
            <img src="{{ asset('imagenes/progressive-icon.png') }}" alt="Lentes Progresivos" />
        </div>
        <div class="garantia-info">
            <h2>Garantía de Lentes Progresivos</h2>
            <ul>
                <li><strong>Plazo:</strong> 30 días desde la entrega, con boleta original o copia.</li>
                <li><strong>Cambios:</strong> Se permite el cambio de lunas progresivas por problemas de adaptación.</li>
            </ul>
        </div>
    </div>

    <!-- Garantía Estética -->
    <div class="garantia-item">
        <div class="icon">
            <img src="{{ asset('imagenes/aesthetic-icon.png') }}" alt="Estética" />
        </div>
        <div class="garantia-info">
            <h2>Garantía Estética</h2>
            <ul>
                <li><strong>Plazo:</strong> 30 días desde la entrega, con boleta.</li>
                <li><strong>Condiciones:</strong> Se acepta el cambio por otros modelos, siempre que estén en perfectas condiciones y con embalaje original.</li>
                <li><strong>Notas:</strong> Las compras en outlet o liquidación están excluidas.</li>
            </ul>
        </div>
    </div>

    <!-- Servicio de Mantenimiento Gratuito -->
    <div class="garantia-item">
        <div class="icon">
            <img src="{{ asset('imagenes/maintenance-icon.png') }}" alt="Mantenimiento" />
        </div>
        <div class="garantia-info">
            <h2>Servicio de Mantenimiento Gratuito</h2>
            <ul>
                <li><strong>Cobertura:</strong> Para monturas y lentes adquiridos en "Veo Veo".</li>
                <li><strong>Tipos de Servicio:</strong> Incluye mantenimiento en tienda y taller, sujeto al estado del producto y disponibilidad.</li>
            </ul>
        </div>
    </div>

    <!-- Política de Recojo y Separación -->
    <div class="garantia-item">
        <div class="icon">
            <img src="{{ asset('imagenes/pickup-icon.png') }}" alt="Recojo" />
        </div>
        <div class="garantia-info">
            <h2>Política de Recojo y Separación de Productos</h2>
            <ul>
                <li><strong>Recogida:</strong> El cliente tiene un plazo de 3 meses para la separación y 6 meses para recoger productos completos.</li>
                <li><strong>Consideraciones:</strong> Pasados estos plazos, la empresa puede disponer del artículo sin derecho a reclamo.</li>
            </ul>
        </div>
    </div>

    <!-- Garantía de Fabricación -->
    <div class="garantia-item">
        <div class="icon">
            <img src="{{ asset('imagenes/guarantee-icon.png') }}" alt="Fabricación" />
        </div>
        <div class="garantia-info">
            <h2>Garantía de Fabricación</h2>
            <ul>
                <li><strong>Plazos:</strong> 2 años en monturas, 1 año en lentes, 1 mes para lentes de contacto mensuales.</li>
                <li><strong>Condiciones:</strong> Los productos con defecto de fabricación se pueden cambiar por uno igual o un modelo diferente pagando la diferencia si corresponde.</li>
            </ul>
        </div>
    </div>

    <p>Al elegir "Veo Veo", garantizamos tu satisfacción y el mejor cuidado de tus productos ópticos. Estamos aquí para ayudarte en cada paso de tu experiencia de compra.</p>
</div>
@endsection
