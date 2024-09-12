@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<style>
/* Estilo para el estado normal de los elementos */
input, button, a {
    border: 1px solid #ced4da; /* Borde gris claro */
    padding: 0.375rem 0.75rem; /* Padding para los elementos */
    margin: 0.25rem; /* Margen para los elementos */
}

/* Estilo para el enfoque visible (Cumple con el criterio) */
input:focus, button:focus, a:focus {
    border: 2px solid #0056b3; /* Borde azul más grueso para el enfoque */
    background-color: #e9f5ff; /* Color de fondo ligeramente diferente para mayor contraste */
    outline: none; /* Eliminamos el borde de enfoque adicional */
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25); /* Añadimos una sombra para mayor visibilidad */
}

/* Estilo para el enfoque menos visible (No cumple con el criterio) */
.no-focus input:focus, .no-focus button:focus, .no-focus a:focus {
    border: 1px solid #dee2e6; /* Borde azul delgado para el enfoque */
    box-shadow: none;
}
    </style>
<div class="container">
    <h2>Nivel A > Criterio 7: Foco visible</h2>
	<ul class="nav nav-tabs nav-fill nav-pills" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opción A</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Opción B</a>
        </li>
    </ul>
    <div class="tab-content my-4" id="myTabContent">
        <div class="tab-pane fade show active no-focus" id="home" role="tabpanel" aria-labelledby="home-tab">
            
            <form>
                <div class="form-group">
                    <label for="emailNoVisible">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="emailNoVisible" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartas tu correo electrónico con nadie.</small>
                </div>
                <div class="form-group">
                    <label for="passwordNoVisible">Contraseña</label>
                    <input type="password" class="form-control" id="passwordNoVisible">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            

            <form>
                <div class="form-group">
                    <label for="emailVisible">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="emailVisible" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartas tu correo electrónico con nadie.</small>
                </div>
                <div class="form-group">
                    <label for="passwordVisible">Contraseña</label>
                    <input type="password" class="form-control" id="passwordVisible">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>    
            
        </div>
    </div>
</div>
@endsection