<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compra; // ✅ Importa correctamente el modelo

class CompraController extends Controller
{
    public function index()
    {
        // Muestra las compras del usuario autenticado
        $compras = Compra::where('user_id', Auth::id())->get();

        return view('joyeria.miscompras', compact('compras'));
    }
}
