@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 16: Propósito del enlace</h2>
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

            <h1>Enlaces</h1>
            <p>Descubre más sobre lo que hacemos:</p>

            <p>Explora nuestra <a href="/pagina1" class="btn btn-info">Página</a>.</p>

            <p>Más detalles aquí: <a href="/pagina2" class="btn btn-primary">Aquí</a>.</p>
            

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <h1>Enlaces</h1>
            <p>Explora más sobre nuestras iniciativas y recursos:</p>

            <p>Conoce nuestras <a href="/recursos" class="btn btn-info">Recursos Educativos</a>.</p>

            <p>Descubre cómo puedes participar en <a href="/involucrarse" class="btn btn-primary">Involucrarse</a>.</p>            

        </div>
    </div>
</div>
@endsection