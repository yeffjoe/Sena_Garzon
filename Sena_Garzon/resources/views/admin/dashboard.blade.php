@extends('layouts.app')

@section('title', 'Panel Administrador')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0">Panel de Administración</h4>
        </div>
        <div class="card-body">
            <p>Opciones disponibles:</p>
            <ul>
                <li>✅ Aprobar o rechazar cursos</li>
                <li>👥 Gestionar usuarios</li>
                <li>📊 Ver reportes estadísticos</li>
            </ul>
            <a href="#" class="btn btn-danger mt-3">Ir a gestión administrativa</a>
        </div>
    </div>
@endsection
