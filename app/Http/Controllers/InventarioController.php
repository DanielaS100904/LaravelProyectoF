<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\InventarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Carbon\Carbon;

class InventarioController extends Controller
{
    public function index(): View
    {
        $inventarios = Inventario::paginate();

        return view('inventario.index', compact('inventarios'))
            ->with('i', (request()->input('page', 1) - 1) * $inventarios->perPage());
    }

    public function create(): View
    {
        $inventario = new Inventario();
        $productos = Producto::all();

        return view('inventario.create', compact('inventario', 'productos'));
    }

    public function store(InventarioRequest $request): RedirectResponse
    {
        $requestData = $request->validated();

        // Fecha: limpieza y conversión robusta
        if (!empty($requestData['fecha_actualizacion'])) {
            $fecha = trim($requestData['fecha_actualizacion']); // elimina espacios
            try {
                $requestData['fecha_actualizacion'] = Carbon::createFromFormat('d-m-Y', $fecha)
                    ->format('Y-m-d H:i:s');
            } catch (\Exception $e) {
                // Manejo de error: opcionalmente puedes lanzar un error de validación
                return Redirect::back()->withErrors(['fecha_actualizacion' => 'Formato de fecha inválido'])->withInput();
            }
        }

        Inventario::create($requestData);

        return Redirect::route('inventarios.index')
            ->with('success', 'Inventario creado exitosamente.');
    }

    public function show($id): View
    {
        $inventario = Inventario::findOrFail($id);

        return view('inventario.show', compact('inventario'));
    }

    public function edit($id): View
    {
        $inventario = Inventario::findOrFail($id);
        $productos = Producto::all();

        return view('inventario.edit', compact('inventario', 'productos'));
    }

    public function update(InventarioRequest $request, Inventario $inventario): RedirectResponse
    {
        $requestData = $request->validated();

        // Fecha: limpieza y conversión robusta
        if (!empty($requestData['fecha_actualizacion'])) {
            $fecha = trim($requestData['fecha_actualizacion']);
            try {
                $requestData['fecha_actualizacion'] = Carbon::createFromFormat('d-m-Y', $fecha)
                    ->format('Y-m-d H:i:s');
            } catch (\Exception $e) {
                return Redirect::back()->withErrors(['fecha_actualizacion' => 'Formato de fecha inválido'])->withInput();
            }
        }

        $inventario->update($requestData);

        return Redirect::route('inventarios.index')
            ->with('success', 'Inventario actualizado exitosamente.');
    }

    public function destroy($id): RedirectResponse
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->delete();

        return Redirect::route('inventarios.index')
            ->with('success', 'Inventario eliminado exitosamente.');
    }
}
