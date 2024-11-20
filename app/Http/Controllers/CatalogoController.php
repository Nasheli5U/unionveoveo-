<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Color;

class CatalogoController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todos los productos por defecto
        $productos = Producto::query();

        // Aplicar filtros si existen
        if ($request->filled('categoria_id')) {
            $productos->where('categoria_id', $request->categoria_id);
        }
        if ($request->filled('marca_id')) {
            $productos->where('marca_id', $request->marca_id);
        }
        if ($request->filled('color_id')) {
            $productos->where('color_id', $request->color_id);
        }

        // Obtener productos con o sin filtros
        $productos = $productos->get();

        // Obtener todas las categorías, marcas y colores para los filtros
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $colores = Color::all();

        return view('pages.catalogo', compact('productos', 'categorias', 'marcas', 'colores'));
    }
}
