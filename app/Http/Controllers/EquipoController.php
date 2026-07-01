<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    // 1. Método index: Listar equipos
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    // 2. Método store: Guardar nuevo equipo
    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombre = $request->input('nombre');
        $equipo->numero_serie = $request->input('numero_serie');
        $equipo->descripcion = $request->input('descripcion');
        $equipo->save();

        return redirect()->route('equipos.index');
    }
}