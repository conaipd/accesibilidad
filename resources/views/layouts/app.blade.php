<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Agrega otros enlaces a CSS aquí si es necesario -->
</head>
<body>
    <div class="container-fluid">
        <!-- Topbar -->
        <header class="navbar navbar-expand navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-bell"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person"></i>
                    </a>
                </li>
            </ul>
        </header>

        <div class="row">
            <!-- Menú Lateral -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="bi bi-house-door"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c1') }}">
                                <i class="bi bi-gear"></i> Criterio 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c2') }}">
                                <i class="bi bi-gear"></i> Criterio 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c3') }}">
                                <i class="bi bi-gear"></i> Criterio 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c4') }}">
                                <i class="bi bi-gear"></i> Criterio 4
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c5') }}">
                                <i class="bi bi-gear"></i> Criterio 5
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c6') }}">
                                <i class="bi bi-gear"></i> Criterio 6
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c7') }}">
                                <i class="bi bi-gear"></i> Criterio 7
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c8') }}">
                                <i class="bi bi-gear"></i> Criterio 8
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c9') }}">
                                <i class="bi bi-gear"></i> Criterio 9
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c10') }}">
                                <i class="bi bi-gear"></i> Criterio 10
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c11') }}">
                                <i class="bi bi-gear"></i> Criterio 11
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c12') }}">
                                <i class="bi bi-gear"></i> Criterio 12
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c13') }}">
                                <i class="bi bi-gear"></i> Criterio 13
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c14') }}">
                                <i class="bi bi-gear"></i> Criterio 14
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/a/c15') }}">
                                <i class="bi bi-gear"></i> Criterio 15
                            </a>
                        </li>

                        <!-- Agrega más ítems de menú aquí -->
                    </ul>
                </div>
            </nav>

            <!-- Contenido Principal -->
            <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>