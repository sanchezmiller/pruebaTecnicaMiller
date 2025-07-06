<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    // // metodo get
    public function index()
    {
        return response()->json(Formulario::all());
    }

    // metodo de crear
    public function store(Request $request)
    {
        $validated = $request->validate([
            'identificacion' => 'required|string|max:20',
            'nombre_usuario' => 'required|string|max:20',
            'apellidos' => 'required|string|max:20',
            'nombres' => 'required|string|max:20',
            'fecha_nacimiento' => 'required|date',
            'celular' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|string|max:100',
            'estado_civil' => 'nullable|string|max:50',
            'sexo' => 'nullable|string|max:50',
            'direccion_ubicacion' => 'nullable|string|max:100',
        ]);

        $formulario = Formulario::create($validated);
        return response()->json($formulario, 201);
    }    

    // metodo de actualizar
    public function update(Request $request, $id)
    {
        $formulario = Formulario::find($id);
        if (!$formulario) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $validated = $request->validate([
            'identificacion' => 'sometimes|string|max:20',
            'nombre_usuario' => 'sometimes|string|max:20',
            'apellidos' => 'sometimes|string|max:20',
            'nombres' => 'sometimes|string|max:20',
            'fecha_nacimiento' => 'sometimes|date',
            'celular' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|string|max:100',
            'estado_civil' => 'nullable|string|max:50',
            'sexo' => 'nullable|string|max:50',
            'direccion_ubicacion' => 'nullable|string|max:100',
        ]);

        $formulario->update($validated);
        return response()->json($formulario);
    }

    // metodo de eliminar
    public function destroy($id)
    {
        $formulario = Formulario::find($id);
        if (!$formulario) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $formulario->delete();
        return response()->json(['message' => 'Registro eliminado correctamente']);
    }
}
