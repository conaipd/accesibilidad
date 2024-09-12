@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 1: Subtítulos (en directo)</h2>
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
            
            <video id="liveVideo" controls width="100%" autoplay>
                <source src="{{ asset('video/videoplayback.mp4') }}" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
            <video id="liveVideo" controls width="100%" autoplay>
                <source src="{{ asset('video/videoplayback.mp4') }}" type="video/mp4">
                <track src="{{ asset('video/c1.vtt') }}" kind="subtitles" srclang="es" label="Español" default>
                Tu navegador no soporta el elemento de video.
            </video>
            
        </div>
    </div>
</div>
@endsection