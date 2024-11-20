<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Producto;
use App\Models\Testimonio;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Crear un arreglo para almacenar los productos por categoría
        $productosPorCategoria = [];
        foreach ($categorias as $categoria) {
            $productos = Producto::where('ID_categoria', $categoria->ID_categoria)
                ->latest()
                ->take(4)
                ->get();

            // Agregar productos al arreglo solo si existen
            $productosPorCategoria[$categoria->ID_categoria] = $productos->isNotEmpty() ? $productos : collect();
        }

        // Crear un arreglo para almacenar los productos por subcategoría
        $subcategorias = Subcategoria::all();
        $productosPorSubcategoria = [];
        foreach ($subcategorias as $subcategoria) {
            $producto = Producto::where('ID_subcategoria', $subcategoria->ID_subcategoria)
                ->latest()
                ->first();

            // Agregar producto al arreglo solo si existe
            $productosPorSubcategoria[$subcategoria->ID_subcategoria] = $producto ?: null;
        }

        // Obtener testimonios con calificación de 4 o 5
        $testimonios = Testimonio::whereIn('rating', [4, 5])->get();

        // Pasar datos a la vista
        return view('pages.home', compact('categorias', 'productosPorCategoria', 'productosPorSubcategoria', 'testimonios'));
    }
}
