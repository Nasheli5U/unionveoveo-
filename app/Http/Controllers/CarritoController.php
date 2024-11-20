<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\CarritoItem;
use Illuminate\Support\Str;

class CarritoController extends Controller
{
    // Mostrar el carrito
    public function index()
    {
        // Obtener el identificador único del carrito de la sesión
        $carritoSession = session()->get('carrito_session', Str::uuid());

        // Cargar los productos del carrito desde la base de datos
        $carritoItems = CarritoItem::with('producto')
            ->where('carrito_session', $carritoSession)
            ->get();

        // Calcular el total
        $total = $carritoItems->sum(function ($item) {
            return $item->producto->precio * $item->cantidad;
        });

        return view('carrito.index', compact('carritoItems', 'total'));
    }

    // Agregar un producto al carrito
    public function agregar($ID_producto)
    {
        $producto = Producto::find($ID_producto);

        if ($producto) {
            // Obtener o generar el identificador único del carrito
            $carritoSession = session()->get('carrito_session', Str::uuid());
            session()->put('carrito_session', $carritoSession);

            // Buscar si el producto ya está en el carrito
            $carritoItem = CarritoItem::where('carrito_session', $carritoSession)
                ->where('ID_producto', $ID_producto)
                ->first();

            if ($carritoItem) {
                // Incrementar la cantidad si ya existe
                $carritoItem->increment('cantidad');
            } else {
                // Crear un nuevo registro en el carrito
                CarritoItem::create([
                    'carrito_session' => $carritoSession,
                    'ID_producto' => $ID_producto,
                    'cantidad' => 1,
                ]);
            }
        }

        // Retornar un mensaje JSON sin redirigir
        return response()->json([
            'message' => 'Producto agregado al carrito.',
            'success' => true,
        ]);
    }

    // Eliminar un producto del carrito
    public function eliminar($ID_producto)
    {
        $carritoSession = session()->get('carrito_session');

        CarritoItem::where('carrito_session', $carritoSession)
            ->where('ID_producto', $ID_producto)
            ->delete();

        return redirect()->route('carrito.index')->with('success', 'Producto eliminado del carrito.');
    }

    // Vaciar el carrito
    public function vaciar()
    {
        $carritoSession = session()->get('carrito_session');

        CarritoItem::where('carrito_session', $carritoSession)->delete();

        return redirect()->route('carrito.index')->with('success', 'Carrito vaciado correctamente.');
    }
}
