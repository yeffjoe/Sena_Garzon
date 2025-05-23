<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SENA Garzón')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        
        :root {
            --verde-sena: #1A6C37;
            --verde-hover: #28a745;
            --azul-sena: #00324D;
            --gris-claro: #f3f4f6;
        }

        body {
            /* background-color: var(--gris-claro); */
            background-color: wheat;
        }

        .sidebar {
            background-color: var(--azul-sena);
            min-height: 100vh;
            padding-top: 2rem;
            color: white;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: background 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: var(--verde-sena);
            border-left: 5px solid white;
        }

        .main-content {
            padding: 2rem;
        }

        .btn-sena {
            background-color: var(--verde-sena);
            color: white;
        }

        .btn-sena:hover {
            background-color: var(--verde-hover);
        }

        .circle-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--verde-sena);
        }

        .access-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .swiper-container {
            height: 400px;
        }
        .swiper-slide img {
            height: 100%;
            object-fit: cover;
        }
        
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
        <h4 class="text-center mb-4"><i class="bi bi-mortarboard"></i> SENA Garzón</h4>
        <a href="{{ route('aprendiz.inicio') }}"><i class="bi bi-house me-2"></i> Inicio</a>
        <a href="{{ route('aprendiz.cursos') }}"><i class="bi bi-journal-text me-2"></i> Cursos</a>
        <a href="{{ route('aprendiz.mis-cursos') }}"><i class="bi bi-bookmark-check me-2"></i> Mis Cursos</a>
        <a href="{{ route('aprendiz.certificados') }}"><i class="bi bi-award me-2"></i> Certificados</a>
        <a href="{{ route('aprendiz.horarios') }}"><i class="bi bi-calendar-event me-2"></i> Horarios</a>

        <form method="POST" action="{{ route('logout') }}" class="mt-auto px-3">
            @csrf
            <button class="btn btn-sm btn-light w-100 mt-4"><i class="bi bi-box-arrow-left me-2"></i> Cerrar sesión</button>
        </form>
    </div>

    <!-- Contenido -->
    <div class="flex-grow-1 main-content">
        @yield('content')
    </div>
</div>
@stack('scripts')
</body>
</html>
