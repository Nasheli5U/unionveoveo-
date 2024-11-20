<?php
// app/Http/Controllers/TestimonioController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonio;

class TestimonioController extends Controller
{
    public function index()
    {
        // Filtra testimonios que tienen una calificación de 4 o 5 estrellas
    $testimonios = Testimonio::whereIn('rating', [4, 5])->get();
    return view('pages.testimonios', compact('testimonios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'contenido' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Almacenar el testimonio
        Testimonio::create([
            'email' => $request->email,
            'contenido' => $request->contenido,
            'rating' => $request->rating,
        ]);

        return redirect()->route('testimonios.index')->with('success', 'Testimonio enviado con éxito');
    }

}
