@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 17: Idioma de la página</h2>
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
            
            <h1>Idioma Incorrecto</h1>
            <p>Esta página no está especificada correctamente en términos de idioma.</p>

            <p>Bienvenido a nuestra página web. Aquí encontrará información relevante.</p>

            <!-- Contenido en otro idioma sin etiqueta adecuada -->
            <p>Welcome to our website. Here you will find relevant information.</p>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <h1>Idioma Correcto</h1>
            <p>Esta página está especificada en el idioma correcto.</p>

            <p>Bienvenido a nuestra página web. Aquí encontrará información relevante.</p>

            <!-- Contenido en otro idioma -->
            <p lang="en">Welcome to our website. Here you will find relevant information.</p>

        </div>
    </div>
</div>
@endsection