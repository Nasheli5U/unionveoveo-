<?php

namespace App\Http\Controllers;

use App\Models\Categoria; // Asegúrate de importar el modelo
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        // Obtener todas las categorías con sus subcategorías y productos
        $categorias = Categoria::with('subcategorias.productos')->get();
        return view('pages.home', compact('categorias'));
    }

    public function nosotros() {
        return view('pages.nosotros');
    }

    public function catalogo() {
        return view('pages.catalogo');
    }

    public function showGarantias() {
        return view('pages.garantias');
    }

    public function showPoliticas() {
        return view('pages.politicas');
    }

    public function showPreguntas() {
        return view('pages.preguntas');
    }

    public function showCarreteras() {
        return view('pages.vision-carretera');
    }
}
