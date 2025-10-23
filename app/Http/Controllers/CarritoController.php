<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = session()->get('carrito', []);
        $total = array_sum(array_column($carrito, 'subtotal'));
        return view('joyeria.carrito', compact('carrito', 'total'));
    }

    public function agregar($id)
    {
        $producto = Producto::findOrFail($id);
        $carrito = session()->get('carrito', []);

        // Si ya está en el carrito, aumenta la cantidad
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
            $carrito[$id]['subtotal'] = $carrito[$id]['cantidad'] * $producto->precio;
        } else {
            $carrito[$id] = [
                'id' => $producto->id,
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'cantidad' => 1,
                'subtotal' => $producto->precio,
                'imagen' => $producto->imagen
            ];
        }

        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }

    public function eliminar($id)
    {
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('success', 'Producto eliminado del carrito.');
    }

    public function vaciar()
    {
        session()->forget('carrito');
        return redirect()->route('carrito.index')->with('success', 'Carrito vaciado.');
    }
}
