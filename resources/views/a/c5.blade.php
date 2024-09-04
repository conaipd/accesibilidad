@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 5: Secuencia significativa</h2>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dark" role="alert">
                      1. Llena el depósito de agua: Asegúrate de llenar el depósito de la máquina con la cantidad de agua necesaria.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      3. Enciende la máquina: Conecta la máquina y enciéndela, esperando a que se caliente y esté lista para preparar el café.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      5. Inicia el proceso: Presiona el botón para comenzar la preparación del café.
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="alert alert-dark" role="alert">
                      2. Coloca el filtro y el café molido: Coloca un filtro en el portafiltros y añade la cantidad deseada de café molido.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      4. Coloca la jarra: Asegúrate de que la jarra esté correctamente posicionada en la base de la máquina.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      6. Sirve y disfruta: Una vez terminado el proceso, retira la jarra, sirve el café en una taza y disfrútalo.
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dark" role="alert">
                      1. Llena el depósito de agua: Asegúrate de llenar el depósito de la máquina con la cantidad de agua necesaria.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      2. Coloca el filtro y el café molido: Coloca un filtro en el portafiltros y añade la cantidad deseada de café molido.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      3. Enciende la máquina: Conecta la máquina y enciéndela, esperando a que se caliente y esté lista para preparar el café.
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="alert alert-dark" role="alert">
                      4. Coloca la jarra: Asegúrate de que la jarra esté correctamente posicionada en la base de la máquina.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      5. Inicia el proceso: Presiona el botón para comenzar la preparación del café.
                    </div>
                    <div class="alert alert-dark" role="alert">
                      6. Sirve y disfruta: Una vez terminado el proceso, retira la jarra, sirve el café en una taza y disfrútalo.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection