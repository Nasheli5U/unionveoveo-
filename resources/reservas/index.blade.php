<head>
    <!-- Agregar los estilos de FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- Agregar el script de FullCalendar -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.js"></script>
</head>
<body>
    <div id="calendar"></div>
</body>
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            events: '/reservas/dias-con-citas',  // Ruta para obtener los días con citas
            dayClick: function(date, jsEvent, view) {
                // Al hacer click en un día, se enviará la fecha para obtener las citas
                var selectedDate = date.format();
                window.location.href = "/reservas/" + selectedDate;  // Redirigir a la vista con citas disponibles para esa fecha
            }
        });
    });
</script>
