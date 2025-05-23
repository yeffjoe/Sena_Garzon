<nav class="navbar navbar-expand-lg navbar-sena shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">SENA Garzón</a>

        <div class="d-flex align-items-center">
            @auth
                <span class="text-white me-3"><i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-outline-light">Cerrar sesión</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
