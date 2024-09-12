@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<style>
    .text-size-example {
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }
    .text-size-example h2 {
        margin-bottom: 15px;
    }
    /* Estilos para los ejemplos */
    .text-size-compliant {
        font-size: 1rem; /* Tamaño de fuente base */
    }
    .text-size-compliant h1, .text-size-compliant h2, .text-size-compliant p {
        margin: 0 0 15px;
    }
    .text-size-noncompliant {
        font-size: 1rem; /* Tamaño de fuente base */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .text-size-noncompliant h1, .text-size-noncompliant h2, .text-size-noncompliant p {
        margin: 0 0 15px;
    }
</style>
<div class="container">
    <h2>Nivel A > Criterio 4: Cambio de tamaño del texto</h2>
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
            

            <div class="text-size-example text-size-noncompliant">
                <header>
                    <h1>Promociones Especiales</h1>
                </header>
                <main>
                    <h2>Detalles de la Oferta</h2>
                    <p>Implementar buenas prácticas de accesibilidad web es esencial para garantizar que todos los usuarios, incluidos aquellos con discapacidades, puedan navegar y interactuar con el contenido en línea. La accesibilidad también ayuda a mejorar la usabilidad general del sitio.</p>
                </main>
                <footer>
                    <p>&copy; 2024 Mi sitio web</p>
                </footer>
            </div>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <div class="text-size-example text-size-compliant">
                <header>
                    <h1>Encabezado de Producto</h1>
                </header>
                <main>
                    <h2>Características</h2>
                    <p>La accesibilidad web garantiza que todos los usuarios, independientemente de sus habilidades, puedan acceder y usar sitios web y aplicaciones. Es fundamental para ofrecer una experiencia inclusiva y asegurar que la información sea accesible para personas con discapacidades.</p>
                </main>
                <footer>
                    <p>&copy; 2024 Mi sitio web</p>
                </footer>
            </div>
            
        </div>
    </div>
</div>
@endsection