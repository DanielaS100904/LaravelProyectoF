<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class TiendaController extends Controller
{
    // Página principal de productos (vista pública)
 public function index()
{
    $productos = \App\Models\Producto::all(); // sin filtro 'activo'
    return view('joyeria.productos', compact('productos'));
}

    // Vista de detalle de un producto
public function show($id)
{
    $producto = Producto::findOrFail($id);
    return view('joyeria.detalle', compact('producto'));
}

}

