<!-- resources/views/reservas/citas.blade.php -->
<h1>Citas disponibles para el {{ \Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</h1>

@if(count($citasDisponibles) > 0)
    <ul>
        @foreach($citasDisponibles as $cita)
            <li>
                <a href="{{ route('reservar.cita', ['fecha' => $fecha, 'hora' => $cita]) }}">{{ $cita }}</a>
            </li>
        @endforeach
    </ul>
@else
    <p>No hay citas disponibles para este día.</p>
@endif
