@extends('layouts.main')

@section('main-content')
<div class="container">
    <h2>Reserva tu Cita</h2>

    <!-- Formulario para la reserva -->
    <form action="{{ route('reservar.guardar') }}" method="POST">
        @csrf

        <!-- Selección de la fecha -->
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
        </div>

        <!-- Selección de la hora -->
        <div class="form-group">
            <label for="hora">Hora:</label>
            <select id="hora" name="hora" class="form-control" required>
                <option value="">Selecciona una hora</option>
                <!-- Horarios disponibles -->
                <option value="10:00">10:00 AM</option>
                <option value="10:15">10:15 AM</option>
                <option value="10:30">10:30 AM</option>
                <!-- Agrega el resto de los horarios -->
                <option value="11:45">11:45 AM</option>
                <option value="15:00">03:00 PM</option>
                <!-- Continúa hasta las 08:00 PM -->
            </select>
        </div>

        <!-- Nombres y apellidos -->
        <div class="form-group">
            <label for="nombre">Nombres y Apellidos:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <!-- Correo electrónico -->
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <!-- DNI -->
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control" required maxlength="8" minlength="8">
        </div>

        <!-- Número de celular -->
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" class="form-control" required maxlength="9" minlength="9">
        </div>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-primary">Reservar Cita</button>
    </form>
</div>
@endsection
