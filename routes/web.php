<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PrescripcionController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ReporteController;


use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestimonioController;




// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Dashboard protegido
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Categorías
    Route::resource('categorias', CategoriaController::class)->except(['show']);

    // Marcas
    Route::resource('marcas', MarcaController::class)->except(['show']);

    // Materiales
    Route::resource('materiales', MaterialController::class)->except(['show']);

    // Subcategorías
    Route::resource('subcategorias', SubcategoriaController::class)->except(['show']);

    // Productos
    Route::resource('productos', ProductoController::class)->except(['show']);
    
    Route::resource('ventas', VentaController::class)->except(['edit', 'update']);

    // Clientes
   // Clientes
   Route::resource('clientes', ClienteController::class);

   // Prescripciones asociadas a clientes
   Route::get('prescripciones/create/{cliente}', [PrescripcionController::class, 'create'])->name('prescripciones.create');
   Route::post('prescripciones/store/{cliente}', [PrescripcionController::class, 'store'])->name('prescripciones.store');
   Route::get('prescripciones/{prescripcion}/edit', [PrescripcionController::class, 'edit'])->name('prescripciones.edit');
   Route::put('prescripciones/{prescripcion}', [PrescripcionController::class, 'update'])->name('prescripciones.update');
   Route::get('/prescripciones/{id_cliente}', [PrescripcionController::class, 'show'])->name('prescripciones.show');
   Route::delete('prescripciones/{prescripcion}', [PrescripcionController::class, 'destroy'])->name('prescripciones.destroy');


   Route::get('reportes', [ReporteController::class, 'index'])->name('reportes.index');
    Route::get('reportes/ventas', [ReporteController::class, 'ventas'])->name('reportes.ventas');
    Route::get('reportes/inventario', [ReporteController::class, 'inventario'])->name('reportes.inventario');
    Route::get('reportes/clientes', [ReporteController::class, 'clientes'])->name('reportes.clientes');

});




//Ruta para la Página Principal 
Route::get('/', [HomeController::class, 'index']);
//Ruta para Explorar los Productos por Subcategoría

// Rutas del carrito
// Rutas para el carrito (sin middleware de autenticación)
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::post('/carrito/agregar/{productoId}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::post('/carrito/eliminar/{productoId}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::post('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');

// NAVBAR
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');
Route::get('/nosotros', [PagesController::class, 'nosotros'])->name('nosotros');
// Rutas de los testimonios
// Rutas de ejemplo en web.php
// Rutas de ejemplo en web.php
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');


Route::get('/testimonios', [TestimonioController::class, 'index'])->name('testimonios.index');
Route::post('/testimonios', [TestimonioController::class, 'store'])->name('testimonios.store');
//ruta para garantia
Route::get('/garantias', [PagesController::class, 'showGarantias']);
//ruta para politicas de privacidad
Route::get('/politicas', action: [PagesController::class, 'showPoliticas']);
//ruta para preguntas freceuntes
Route::get('/preguntas', [PagesController::class, 'showPreguntas']);
//ruta para vision para carreteras
Route::get('/vision-carreteras', [PagesController::class, 'showCarreteras']);
// Rutas de metodo de pago 
Route::get('checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');




// Ruta para ver el calendario de reservas
Route::get('/reservas/dias-con-citas', [ReservaController::class, 'diasConCitas']);
// Ruta para ver las citas disponibles de un día específico
Route::get('/reservas/{fecha}', [ReservaController::class, 'citasPorFecha']);
// Ruta para reservar una cita (si necesitas un formulario para reservar)
Route::get('/reservar/{fecha}/{hora}', [ReservaController::class, 'reservarCita'])->name('reservar.cita');

// Ruta para mostrar el formulario de reserva sin parámetros
Route::get('/reservar', [ReservaController::class, 'mostrarFormulario'])->name('reservar.cita');

// Ruta para mostrar el formulario de reserva
Route::get('/reservar', [ReservaController::class, 'mostrarFormulario'])->name('reservar.cita');
Route::post('/reservar', [ReservaController::class, 'guardar'])->name('reservar.guardar');

Route::get('/api/citas-disponibles', [ReservaController::class, 'citasDisponibles']);





// Rutas de autenticación generadas por Laravel Breeze
require __DIR__.'/auth.php';
