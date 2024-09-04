@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 14: Evitar bloques</h2>
	<ul class="nav nav-tabs nav-fill nav-pills" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opción A</a>
        </li>
    </ul>
    <div class="tab-content my-4" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3>Ejemplo real</h3>
            <a href="https://diario.elmundo.sv/" target="_blank">Diario</a>
        </div>
    </div>
</div>
@endsection