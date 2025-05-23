<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function misCursos()
    {
        return view('aprendiz.mis-cursos');
    }

    public function cursos()
    {
        return view('aprendiz.cursos'); // Asegúrate de tener esta vista: resources/views/aprendiz/cursos.blade.php
    }
}
