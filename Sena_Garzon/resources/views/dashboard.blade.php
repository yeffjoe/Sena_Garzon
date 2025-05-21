@extends('layouts.app')

@section('title', 'Panel Aprendiz')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Bienvenido Aprendiz</h4>
        </div>
        <div class="card-body">
            <p>Desde aquí puedes:</p>
            <ul>
                <li>📘 Inscribirte a cursos disponibles</li>
                <li>📄 Descargar tus certificados</li>
                <li>🕒 Consultar tus horarios</li>
            </ul>
            <a href="#" class="btn btn-primary mt-3">Ver cursos disponibles</a>
        </div>
    </div>
@endsection
