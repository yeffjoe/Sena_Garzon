@extends('layouts.app')

@section('title', 'Crear Curso')

@section('content')
    <h3>Crear nuevo curso</h3>

    <form method="POST" action="{{ route('cursos.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Categoría</label>
            <input type="text" name="categoria" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha Fin</label>
            <input type="date" name="fecha_fin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Horario</label>
            <input type="text" name="horario" class="form-control" required>
        </div>
        <button class="btn btn-primary">Crear curso</button>
    </form>
@endsection
