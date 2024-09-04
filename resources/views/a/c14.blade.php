@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <!-- <h2>Nivel A > Criterio 14: Titulado de páginas</h2> -->
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
            <img src="{{ asset('images/c1.jpg') }}" alt="Imagen" class="img-fluid">
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h2>Nivel A > Criterio 14: Titulado de páginas</h2>
            <img src="{{ asset('images/c1.jpg') }}" alt="Imagen" class="img-fluid">
            <div class="alert alert-dark mt-2" role="alert">
                Se muestra una imagen con 2 niños sobre un barco de madera, navegando por un río que tiene 3 patos y rocas a la orilla, fuera del río hay pasto, muchos árboles y rocas, también 2 cabras que están viendo a los niños en su bote.
            </div>
        </div>
    </div>
</div>
@endsection