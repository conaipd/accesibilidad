@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 8: Control del audio</h2>
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
                <div class="col-lg-12">
                    <audio id="background-music" autoplay loop muted>
                        <source src="{{ asset('audio/better-day-186374.mp3') }}" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>

                    <!-- Botón para habilitar el sonido -->
                    <button id="enable-sound">Habilitar sonido</button>

                    <!-- Scripts para controlar la música -->
                    <script>
                        document.getElementById('enable-sound').addEventListener('click', function() {
                            var audio = document.getElementById('background-music');
                            audio.muted = false; // Desactiva el mudo
                            audio.play(); // Reproduce el audio
                        });
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7a.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7b.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7c.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <audio controls>
                        <source src="{{ asset('audio/better-day-186374.mp3') }}" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7a.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="alert alert-dark" role="alert">
                      Termo marca Stanley color rosa. <br>Precio: $#.##
                    </div>
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7b.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="alert alert-dark" role="alert">
                      Termo marca Stanley color azul. <br>Precio: $#.##
                    </div>
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7c.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="alert alert-dark" role="alert">
                      Termo marca Stanley color verde. <br>Precio: $#.##
                    </div>
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection