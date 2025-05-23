@extends('layouts.app')

@section('title', 'Aprobación de Cursos')

@section('content')
    <h3>Gestión de Cursos</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Curso</th>
                <th>Categoría</th>
                <th>Instructor</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->categoria }}</td>
                    <td>{{ $curso->instructor->name }}</td>
                    <td>{{ $curso->fecha_inicio }} al {{ $curso->fecha_fin }}</td>
                    <td>
                        <span class="badge bg-{{ $curso->estado === 'aprobado' ? 'success' : ($curso->estado === 'rechazado' ? 'danger' : 'warning') }}">
                            {{ ucfirst($curso->estado) }}
                        </span>
                    </td>
                    <td>
                        @if ($curso->estado === 'pendiente')
                            <form action="{{ route('admin.cursos.aprobar', $curso) }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-success btn-sm">Aprobar</button>
                            </form>
                            <form action="{{ route('admin.cursos.rechazar', $curso) }}" method="POST" class="d-inline ms-1">
                                @csrf
                                <button class="btn btn-danger btn-sm">Rechazar</button>
                            </form>
                        @else
                            <em>Sin acciones</em>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
