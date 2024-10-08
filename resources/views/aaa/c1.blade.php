@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel AAA > Criterio 1: Lengua de señas (grabado)</h2>
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
            
            <source src="{{ asset('video/abecedario.mp4') }}" type="video/mp4">

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            

            <source src="{{ asset('video/videoplayback.mp4') }}" type="video/mp4">

            
        </div>
    </div>
</div>
@endsection