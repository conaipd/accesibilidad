@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 10: Sugerencias ante errores</h2>
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
            

            <form id="correct-form">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
                    <div class="invalid-feedback">Por favor ingresa una dirección de correo electrónico válida.</div>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                    <div class="invalid-feedback">La contraseña es obligatoria y debe tener al menos 8 caracteres.</div>
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-secondary btn-prev">Volver</button>
                    <button type="button" class="btn btn-primary btn-next">Siguiente</button>
                </div>
            </form>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            

            <form id="incorrect-form">
                <div class="form-group">
                    <label for="email-incorrect">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email-incorrect" placeholder="Ingresa tu correo electrónico" required>
                    <!-- Sin mensaje de error -->
                </div>
                <div class="form-group">
                    <label for="password-incorrect">Contraseña</label>
                    <input type="password" class="form-control" id="password-incorrect" placeholder="Ingresa tu contraseña" required>
                    <!-- Sin mensaje de error -->
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-secondary btn-prev">Volver</button>
                    <button type="submit" class="btn btn-primary btn-next">Siguiente</button>
                </div>
            </form>


        </div>
    </div>

</div>
<script>
        // Establece la validación del formulario en el navegador
        document.addEventListener('DOMContentLoaded', function() {
            // Ejemplo correcto de validación
            var correctForm = document.getElementById('correct-form');
            correctForm.addEventListener('submit', function(event) {
                if (!correctForm.checkValidity()) {
                    event.preventDefault(); // Previene el envío del formulario si hay errores
                    event.stopPropagation();
                    correctForm.classList.add('was-validated');
                }
            });

            
        });
    </script>
@endsection