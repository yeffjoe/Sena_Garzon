<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = auth()->user()->cursos;
        return view('instructor.cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('instructor.cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'categoria' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'horario' => 'required',
        ]);

        Curso::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'horario' => $request->horario,
            'instructor_id' => auth()->id(),
        ]);

        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente');
    }
}
