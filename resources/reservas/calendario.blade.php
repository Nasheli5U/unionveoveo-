@extends('layouts.main')

@section('main-content')
<div class="container">
    <h2>Selecciona una fecha y hora</h2>

    <div id="calendar"></div>

    <!-- Detalles de la cita -->
    <div id="citas-disponibles" style="margin-top: 20px;">
        <h4>Citas disponibles para <span id="fecha-seleccionada">-</span></h4>
        <div id="lista-citas">
            <!-- Aquí se mostrarán las citas disponibles -->
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@latest/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@latest/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@latest/main.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            selectable: true,
            dateClick: function(info) {
                // Actualizar la fecha seleccionada
                document.getElementById('fecha-seleccionada').innerText = info.dateStr;

                // Llamar a la API o al backend para obtener las citas disponibles
                fetch(`/api/citas-disponibles?fecha=${info.dateStr}`)
                    .then(response => response.json())
                    .then(data => {
                        let listaCitas = document.getElementById('lista-citas');
                        listaCitas.innerHTML = '';

                        if (data.length > 0) {
                            data.forEach(cita => {
                                let btn = document.createElement('button');
                                btn.className = 'btn btn-primary m-1';
                                btn.innerText = cita.hora;
                                btn.onclick = function() {
                                    // Lógica para reservar la cita
                                    alert(`Has seleccionado la cita a las ${cita.hora}`);
                                };
                                listaCitas.appendChild(btn);
                            });
                        } else {
                            listaCitas.innerHTML = '<p>No hay citas disponibles.</p>';
                        }
                    });
            }
        });

        calendar.render();
    });
</script>
@endsection
