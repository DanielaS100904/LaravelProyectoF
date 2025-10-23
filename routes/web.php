<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CompraController;
// Pagina principal
Route::get('/', function () {
    return view('joyeria.index');
});
Route::get('/producto/{id}', [TiendaController::class, 'show'])->name('tienda.producto');


// Rutas de autenticación (instlacion de Laravel UI/Breeze instalado)
Auth::routes();

// CRUD de proveedores
Route::resource('proveedores', ProveedoreController::class)->middleware('auth');
// CRUD de productos
Route::resource('productos', ProductoController::class)->middleware('auth');
;
// CRUD de proveedores
Route::resource('inventarios', InventarioController::class)->middleware('auth');
;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [TiendaController::class, 'index'])->name('tienda.productos');

Route::get('/producto/{id}', [TiendaController::class, 'show'])->name('tienda.producto');

Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');

Route::get('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');

Route::get('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

Route::get('/carrito/vaciar', [CarritoController::class, 'vaciar'])->name('carrito.vaciar');

Route::get('/checkout', [CheckoutController::class, 'mostrarFormulario'])->name('checkout.form');

Route::post('/checkout', [CheckoutController::class, 'procesarPedido'])->name('checkout.procesar');

Route::get('/miscompras', [CompraController::class, 'index'])->name('compras.index');