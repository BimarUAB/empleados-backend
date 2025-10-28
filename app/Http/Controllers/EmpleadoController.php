<?php

namespace App\Http\Controllers;

use App\Models\Empleado;   // Arriba, NO dentro de un método
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Lista todos los empleados
     */
    public function index()
    {
        return Empleado::all();
    }

    /**
     * Crea un nuevo empleado
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'  => 'required|string|max:255',
            'apellido'=> 'required|string|max:255',
            'correo'  => 'required|email|unique:empleados',
            'salario' => 'required|numeric|min:0'
        ]);

        return Empleado::create($request->all());
    }

    /* -------------------------------------------------
       Si no vas a usar show/update/destroy puedes
       dejarlos vacíos o borrarlos; aquí los dejo por
       completitud.
    -------------------------------------------------- */

    public function show(string $id)
    {
        return Empleado::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $request->validate([
            'nombre'   => 'sometimes|string|max:255',
            'apellido' => 'sometimes|string|max:255',
            'correo'   => 'sometimes|email|unique:empleados,correo,'.$id,
            'salario'  => 'sometimes|numeric|min:0'
        ]);
        $empleado->update($request->all());
        return $empleado;
    }

    public function destroy(string $id)
    {
        Empleado::findOrFail($id)->delete();
        return response()->noContent();
    }
}