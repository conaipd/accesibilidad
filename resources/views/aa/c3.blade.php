@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<style>
        .contrast-example {
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .contrast-example h2 {
            margin-bottom: 15px;
        }
        /* Personalización de colores para contraste */
        .contrast-compliant {
            background-color: #ffffff !important; /* Fondo blanco */
            color: #000000 !important; /* Texto negro */
        }
        .contrast-compliant-header {
            background-color: #000000 !important; /* Fondo negro */
            color: #ffffff !important; /* Texto blanco */
        }
        .contrast-compliant-button {
            background-color: #007bff !important; /* Fondo azul */
            color: #ffffff !important; /* Texto blanco */
        }
        .contrast-noncompliant {
            background-color: #f5f5f5 !important; /* Fondo gris claro */
            color: #6c757d !important; /* Texto gris oscuro */
        }
        .contrast-noncompliant-header {
            background-color: #cccccc !important; /* Fondo gris claro */
            color: #333333 !important; /* Texto gris oscuro */
        }
        .contrast-noncompliant-button {
            background-color: #999999 !important; /* Fondo gris medio */
            color: #ffffff !important; /* Texto blanco */
        }
    </style>
<div class="container">
    <h2>Nivel A > Criterio 3: Contraste (mínimo)</h2>
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
            
            <div class="contrast-example contrast-noncompliant">
                <header class="contrast-noncompliant-header text-center py-3">
                    <h1>Encabezado</h1>
                </header>
                <main class="container mt-4">
                    <h2>Contenido</h2>
                    <p>Este diseño presenta una estructura clara con un encabezado destacado y un botón de llamada a la acción. Observa la disposición del contenido y la estructura general de la página.</p></p>
                    <button class="btn contrast-noncompliant-button">Botón</button>
                </main>
                <footer class="contrast-noncompliant-header text-center py-3">
                    <p>&copy; 2024 Mi Empresa</p>
                </footer>
            </div>
            
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <div class="contrast-example bg-light text-dark">
                <header class="bg-dark text-light text-center py-3">
                    <h1>Encabezado</h1>
                </header>
                <main class="container mt-4">
                    <h2>Contenido</h2>
                    <p>Este diseño presenta una estructura clara con un encabezado destacado y un botón de llamada a la acción. Observa la disposición del contenido y la estructura general de la página.</p></p>
                    <button class="btn btn-primary text-light">Botón</button>
                </main>
                <footer class="bg-dark text-light text-center py-3">
                    <p>&copy; 2024 Mi Empresa</p>
                </footer>
            </div>
            
        </div>
    </div>
</div>
@endsection