@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<style>
        .image-text-example {
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .image-text-example img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .image-text-compliant {
            background-color: #f8f9fa;
        }
        .image-text-noncompliant {
            background-color: #e9ecef;
        }
    </style>
<div class="container">
    <h2>Nivel A > Criterio 5: Imágenes de texto</h2>
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
           
            <figure>
                <img src="https://via.placeholder.com/600x300.png?text=La+accesibilidad+en+el+diseño+web" alt="Accesibilidad Web">
            </figure>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <figure>
                <img src="https://via.placeholder.com/600x300.png?text=La+accesibilidad+en+el+diseño+web" alt="Accesibilidad Web">
                <figcaption class="hidden-text">La accesibilidad en el diseño web asegura que todos los usuarios tengan una experiencia igualitaria al interactuar con los sitios web.</figcaption>
            </figure>
            
        </div>
    </div>
</div>
@endsection