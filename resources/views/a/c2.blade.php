@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 2: Sólo audio y sólo vídeo (grabado)</h2>
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
            <h4>Reproductor de Audio</h4>
            <audio controls>
                <source src="{{ asset('audio/AudioDescripciondeimagen.mp3') }}" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            <h4 class="mt-4">Reproductor de Video</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" style="height: 400px; width: 600px;" src="https://www.youtube.com/embed/gQIKQO41pME" allowfullscreen></iframe>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h4>Reproductor de Audio</h4>
            <audio controls>
                <source src="{{ asset('audio/AudioDescripciondeimagen.mp3') }}" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            <div class="alert alert-dark mt-2" role="alert">
                <strong>Audio:</strong> Captura de imagen de vídeo de un cocinero sosteniendo una bandeja de alimentos. En la parte inferior de la imagen esta la barra tempodependiente o reproducción. A la par un indicador dice “Requiere: Pista de audio” y una imagen de la pista de audio detallando la barra tempodependiente o reproducción, al final de la barra el botón de control de volumen y la indicación “Información equivalente”. Continua indicación “No requiere equivalente de texto”.
            </div>
            <h4 class="mt-4">Reproductor de Video</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" style="height: 400px; width: 600px;" src="https://www.youtube.com/embed/gQIKQO41pME" allowfullscreen></iframe>
            </div>

            <div class="alert alert-dark mt-2" role="alert">
				<b>¿Qué es la accesibilidad web?</b>
                <br>
                La accesibilidad web. Estudia la posibilidad de acceder a la web y sus contenidos en todas las personas, más allá de sus capacidades físicas, intelectuales o técnicas y de la tecnología que usen, además, la accesibilidad web se ocupa de analizar las particularidades de las tecnologías con las que se usa la web, así, el desarrollo de un sitio accesibile, deberá considerar a los usuarios que operen computadoras y celulares antiguos, también están los contextos de uso, la accesibilidad debe tener en cuenta que un sitio pueda ser navegado bajo conexiones erráticas o lentas, mientras haces otras cosas.
                <br>
                <b>¿Cómo se mide la accesibilidad web?</b>
                <br>
                El World Wide Web Consortium es el organismo que redacta recomendaciones y estándares para las tecnologías que se usan en la web, las pautas de accesibilidad de contenido web 2.0 tienen criterios de evaluación para determinar cuan accesible es un sitio web, las recomendaciones tienen niveles, Nivel A, Nivel AA, Nivel AAA...
			</div>
        </div>
    </div>
</div>
@endsection