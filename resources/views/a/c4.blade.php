@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 4: Audiodescripción o Medio Alternativo (grabado)</h2>
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
            <h4 class="mt-4">Reproductor de Video</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" style="height: 400px; width: 600px;" src="https://www.youtube.com/embed/gQIKQO41pME" allowfullscreen></iframe>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h4 class="mt-4">Reproductor de Video</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" style="height: 400px; width: 600px;" src="https://www.youtube.com/embed/wOL0aHyaW2I" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection