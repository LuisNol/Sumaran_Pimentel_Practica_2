<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Http\Requests\ActividadRequest;

/**
 * Class ActividadController
 * @package App\Http\Controllers
 */
class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return response()->json($actividades);
    }

    // Obtener una actividad específica por su ID
    public function show($id)
    {
        $actividad = Actividad::find($id);
        if (!$actividad) {
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }
        return response()->json($actividad);
    }

    // Crear una nueva actividad
    public function store(ActividadRequest $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'dia' => 'required|string',
            'horario' => 'required|string',
        ]);

        $actividad = Actividad::create($request->all());
        return response()->json($actividad, 201);
    }

    // Actualizar una actividad existente
    public function update(ActividadRequest $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'dia' => 'required|string',
            'horario' => 'required|string',
        ]);

        $actividad = Actividad::find($id);
        if (!$actividad) {
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }

        $actividad->update($request->all());
        return response()->json($actividad, 200);
    }

    // Eliminar una actividad existente
    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        if (!$actividad) {
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }

        $actividad->delete();
        return response()->json(['message' => 'Actividad eliminada'], 200);
    }
}
