<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Agrega otros enlaces a CSS aquí si es necesario -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Accesibilidad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownA" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nivel A
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownA">
                <li><a class="dropdown-item" href="{{ url('/a/c1') }}">Criterio 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c2') }}">Criterio 2</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c3') }}">Criterio 3</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c4') }}">Criterio 4</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c5') }}">Criterio 5</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c6') }}">Criterio 6</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c7') }}">Criterio 7</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c8') }}">Criterio 8</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c9') }}">Criterio 9</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c10') }}">Criterio 10</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c11') }}">Criterio 11</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c12') }}">Criterio 12</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c13') }}">Criterio 13</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c14') }}">Criterio 14</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c15') }}">Criterio 15</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c16') }}">Criterio 16</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c17') }}">Criterio 17</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c18') }}">Criterio 18</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c19') }}">Criterio 19</a></li>
                <li><a class="dropdown-item" href="{{ url('/a/c20') }}">Criterio 20</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAA" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nivel AA
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownAA">
                <li><a class="dropdown-item" href="{{ url('/aa/c1') }}">Criterio 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c2') }}">Criterio 2</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c3') }}">Criterio 3</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c4') }}">Criterio 4</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c5') }}">Criterio 5</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c6') }}">Criterio 6</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c7') }}">Criterio 7</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c8') }}">Criterio 8</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c9') }}">Criterio 9</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c10') }}">Criterio 10</a></li>
                <li><a class="dropdown-item" href="{{ url('/aa/c11') }}">Criterio 11</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAAA" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nivel AAA
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownAAA">
                <li><a class="dropdown-item" href="{{ url('/aaa/c1') }}">Criterio 1</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c2') }}">Criterio 2</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c3') }}">Criterio 3</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c4') }}">Criterio 4</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c5') }}">Criterio 5</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c6') }}">Criterio 6</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c7') }}">Criterio 7</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c8') }}">Criterio 8</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c9') }}">Criterio 9</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c10') }}">Criterio 10</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c11') }}">Criterio 11</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c12') }}">Criterio 12</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c13') }}">Criterio 13</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c14') }}">Criterio 14</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c15') }}">Criterio 15</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c16') }}">Criterio 16</a></li>
                <li><a class="dropdown-item" href="{{ url('/aaa/c17') }}">Criterio 17</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
        <!-- Topbar -->
        

        <div class="row">
            <!-- Menú Lateral -->

            <!-- Contenido Principal -->
            <main role="main" class="col-md-12" style="margin-bottom: 40px;">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8" align="center">
                        @yield('content')
                    </div>
                    <div class="col-lg-2"></div>
            </main>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-next').click(function () {
                var $active = $(this).closest('.tab-pane').find('.tab-pane.active');
                var $next = $active.next('.tab-pane');
                if ($next.length) {
                    var $nextTab = $('[href="#' + $next.attr('id') + '"]');
                    $nextTab.tab('show');
                }
            });

            $('.btn-prev').click(function () {
                var $active = $(this).closest('.tab-pane').find('.tab-pane.active');
                var $prev = $active.prev('.tab-pane');
                if ($prev.length) {
                    var $prevTab = $('[href="#' + $prev.attr('id') + '"]');
                    $prevTab.tab('show');
                }
            });
        });
    </script>
</body>
</html>