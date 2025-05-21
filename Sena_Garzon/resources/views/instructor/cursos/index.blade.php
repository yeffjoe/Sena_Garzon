@extends('layouts.app')

@section('title', 'Mis Cursos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Mis Cursos</h3>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary">+ Nuevo Curso</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Horario</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->categoria }}</td>
                    <td>{{ $curso->horario }}</td>
                    <td>
                        <span class="badge bg-{{ $curso->estado === 'aprobado' ? 'success' : ($curso->estado === 'rechazado' ? 'danger' : 'secondary') }}">
                            {{ ucfirst($curso->estado) }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
