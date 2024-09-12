@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 8: Idioma de las partes</h2>
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
            
            <p>
                Este texto está en español. <br>
                <span>This text is in English.</span>
            </p>

            <p >
                Ce texte est en français. <br>
                <span>Este texto está en español.</span>
            </p>


        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            

            <p>
                Este texto está en español. <br>
                <span lang="en">This text is in English.</span>
            </p>

            <p lang="fr">
                Ce texte est en français. <br>
                <span lang="es">Este texto está en español.</span>
            </p>

            
        </div>
    </div>
</div>
@endsection