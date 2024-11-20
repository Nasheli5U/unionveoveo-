<?php
namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Models\Cita; 

class ReservaController extends Controller
{
    // Método para obtener los días con citas
    public function diasConCitas()
    {
        $diasConCitas = Reserva::selectRaw('DATE(fecha_hora) as fecha')
            ->groupBy('fecha_hora')
            ->get();

        // Formato adecuado para el calendario
        $events = $diasConCitas->map(function($reserva) {
            return [
                'title' => 'Citas Disponibles',
                'start' => $reserva->fecha . 'T00:00:00',
                'end' => $reserva->fecha . 'T23:59:59',
            ];
        });

        return response()->json($events);
    }

    // Método para obtener las citas disponibles en un día específico
    public function citasPorFecha($fecha)
    {
        $citasReservadas = Reserva::whereDate('fecha_hora', $fecha)->get();

        // Crear un arreglo con los horarios ocupados
        $horariosOcupados = $citasReservadas->map(function($reserva) {
            return $reserva->fecha_hora->format('H:i');
        });

        // Crear los intervalos de citas de 15 minutos
        $citasDisponibles = [];
        $horaInicio = '10:00';
        $horaFin = '20:00';
        $intervalo = 15; // en minutos

        $hora = \Carbon\Carbon::createFromFormat('H:i', $horaInicio);
        $horaFinal = \Carbon\Carbon::createFromFormat('H:i', $horaFin);

        // Crear los intervalos de 15 minutos
        while ($hora <= $horaFinal) {
            $horario = $hora->format('H:i');
            if (!in_array($horario, $horariosOcupados)) {
                $citasDisponibles[] = $horario;
            }
            $hora->addMinutes($intervalo);
        }

        return view('reservas.citas', compact('citasDisponibles', 'fecha'));
    }
    public function reservarCita($fecha, $hora)
{
    // Aquí podrías recuperar la disponibilidad para esa fecha y hora
    return view('reservas.formulario', compact('fecha', 'hora'));
}
public function mostrarFormulario()
    {
        // Aquí puedes pasar cualquier variable o datos que necesites a la vista
        return view('reservas.formulario');  // Cambia 'reservas.formulario' por la vista que desees
    }
    public function guardar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'dni' => 'required|string|size:8',
            'celular' => 'required|string|size:9',
        ]);

        // Crear una nueva reserva
        Reserva::create([
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'nombre' => $request->nombre,
            'email' => $request->email,
            'dni' => $request->dni,
            'celular' => $request->celular,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('reservar.cita')->with('success', '¡Cita reservada con éxito!');
    }

    public function citasDisponibles(Request $request)
    {
        $fecha = $request->input('fecha');
    
        // Consulta para obtener las citas disponibles
        $citas = Cita::where('fecha', $fecha)
                     ->where('estado', 'disponible')
                     ->get(['hora']);
    
        return response()->json($citas);
    }
    
}
