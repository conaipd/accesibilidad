@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<style>
    .hidden {
        display: none;
    }
</style>
<div class="container">
    <h2>Nivel A > Criterio 18: Al recibir entradas</h2>
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
            
            <h1>Formulario</h1>

            <form>
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" class="form-control" placeholder="Ingrese su nombre" aria-required="true">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" class="form-control" placeholder="Ingrese su correo electrónico" aria-required="true">
                </div>
                <div class="form-group">
                    <label for="showDetails2">
                        <input type="checkbox" id="showDetails2" onclick="toggleDetails2()"> Mostrar detalles adicionales
                    </label>
                </div>
                <div id="additionalDetails2" class="hidden">
                    <p>Aquí puede ingresar detalles adicionales si lo desea.</p>
                    <label for="details">Detalles:</label>
                    <textarea id="details" class="form-control" placeholder="Ingrese los detalles aquí"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <h1>Formulario</h1>

            <form>
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" class="form-control" placeholder="Ingrese su nombre" aria-required="true">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" class="form-control" placeholder="Ingrese su correo electrónico" aria-required="true">
                </div>
                <div class="form-group">
                    <label for="showDetails">
                        <input type="checkbox" id="showDetails" onclick="toggleDetails()"> Mostrar detalles adicionales
                    </label>
                </div>
                <div id="additionalDetails" class="hidden">
                    <p>Aquí puede ingresar detalles adicionales si lo desea.</p>
                    <label for="details">Detalles:</label>
                    <textarea id="details" class="form-control" placeholder="Ingrese los detalles aquí"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
    </div>
</div>
<script>
    function toggleDetails() {
        const details = document.getElementById('additionalDetails');
        details.classList.toggle('hidden');
    }

    function toggleDetails2() {
        const details = document.getElementById('additionalDetails2');
        details.classList.toggle('hidden');
        alert("¡Sorpresa! Se han mostrado detalles adicionales.");
    }
</script>
@endsection