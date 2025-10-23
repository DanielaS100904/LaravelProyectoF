<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\CompraDetalle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // ✅ Esta línea soluciona el error

class CheckoutController extends Controller
{
    public function mostrarFormulario()
    {
        $carrito = session()->get('carrito', []);
        if (empty($carrito)) {
            return redirect()->route('carrito.index')->with('error', 'Tu carrito está vacío.');
        }

        $total = array_sum(array_column($carrito, 'subtotal'));
        return view('joyeria.checkout', compact('carrito', 'total'));
    }

    public function procesarPedido(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email',
            'direccion' => 'required|string|max:255',
        ]);

        $carrito = session('carrito', []);
        $total = array_sum(array_column($carrito, 'subtotal'));

        if (empty($carrito)) {
            return redirect()->route('carrito.index')->with('error', 'Tu carrito está vacío.');
        }

        // ✅ Guarda la compra en la base de datos
        $compra = Compra::create([
            'user_id' => Auth::id(),
            'total' => $total,
        ]);

        foreach ($carrito as $producto) {
            CompraDetalle::create([
                'compra_id' => $compra->id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'precio' => $producto['precio'],
                'subtotal' => $producto['subtotal'],
            ]);
        }

        // Vacía el carrito
        session()->forget('carrito');

        // Muestra la confirmación
        $pedido = [
            'cliente' => $request->only('nombre', 'email', 'direccion'),
            'productos' => $carrito,
            'total' => $total,
        ];

        return view('joyeria.confirmacion', compact('pedido'));
    }
}
