@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 15: Orden del foco</h2>
	<ul class="nav nav-tabs nav-fill nav-pills" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opción A</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Opción B</a>
        </li>
    </ul>
    <div class="tab-content my-4" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <h4>Formulario de registro</h4>
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form method="POST" action="{{ url('/register') }}">
                @csrf
                <h4>Formulario de registro</h4>
                <div class="form-group">
                    <label for="name2">Nombre Completo</label>
                    <input type="text" class="form-control" id="name2" name="name2" required>
                </div>

                <div class="form-group">
                    <label for="email2">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email2" name="email2" required>
                </div>

                <div class="form-group">
                    <label for="password2">Contraseña</label>
                    <input type="password" class="form-control" id="password2" name="password2" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation2">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="password_confirmation2" name="password_confirmation2" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var fields = ['name', 'email', 'password', 'password_confirmation'];
        var shuffled = fields.sort(() => 0.5 - Math.random()); // Barajar los nombres de los campos

        // Asignar tabindex basado en el orden aleatorio
        shuffled.forEach((field, index) => {
            document.getElementById(field).setAttribute('tabindex', index + 1);
        });
    });
</script>
@endsection