@extends('layouts.app')

@section('title', 'Panel Instructor')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Bienvenido Instructor</h4>
        </div>
        <div class="card-body">
            <p>Aquí puedes:</p>
            <ul>
                <li>✏️ Crear nuevos cursos</li>
                <li>📈 Ver inscritos y progreso</li>
                <li>🛠️ Editar contenidos</li>
            </ul>
            <a href="#" class="btn btn-success mt-3">Gestionar mis cursos</a>
        </div>
    </div>
@endsection
