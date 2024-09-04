@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 11: Poner en pausa, detener, ocultar</h2>
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
            <h1 class="text-center">Ofertas</h1>
            <div id="offers" class="row">
                <!-- Las ofertas se cargarán aquí -->
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h1 class="text-center">Ofertas</h1>
            <div id="offers2" class="row">
                <!-- Las ofertas se cargarán aquí -->
            </div>
            <div class="text-center mt-4">
                <!-- Controles -->
                <div class="mb-3">
                    <button id="play" class="btn btn-success">Play</button>
                    <button id="pause" class="btn btn-warning">Pause</button>
                    <button id="stop" class="btn btn-danger">Stop</button>
                </div>
                <div class="mb-3">
                    <label for="interval">Frecuencia de actualización (segundos):</label>
                    <input type="number" id="interval" class="form-control" value="30" min="1">
                </div>
                <div class="text-center">
                    <button id="refresh" class="btn btn-primary">Actualizar Ofertas</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
        var intervalId;
        var updateInterval = 1000; // 30 segundos

        function fetchOffers() {
            var data = [
                {
                    "id": 1,
                    "title": "Oferta Especial 1",
                    "description": "¡Aprovecha esta oferta especial con un 20% de descuento en todos los productos!"
                },
                {
                    "id": 2,
                    "title": "Oferta Especial 2",
                    "description": "Compra uno y lleva el segundo al 50% de descuento. ¡Solo por hoy!"
                },
                {
                    "id": 3,
                    "title": "Oferta Especial 3",
                    "description": "Recibe un regalo con cada compra superior a $100. ¡No te lo pierdas!"
                },
                {
                    "id": 4,
                    "title": "Oferta Especial 4",
                    "description": "Envío gratis en todas las compras durante esta semana."
                },
                {
                    "id": 5,
                    "title": "Oferta Especial 5",
                    "description": "Descuento del 30% en nuestra nueva colección de verano."
                },
                {
                    "id": 6,
                    "title": "Oferta Especial 6",
                    "description": "Compra 3 productos y obtén un 40% de descuento en el más barato."
                },
                {
                    "id": 7,
                    "title": "Oferta Especial 7",
                    "description": "Hasta un 70% de descuento en artículos seleccionados. ¡Solo hasta el fin de semana!"
                },
                {
                    "id": 8,
                    "title": "Oferta Especial 8",
                    "description": "Aprovecha un 25% de descuento en todas las compras realizadas en nuestra tienda física."
                },
                {
                    "id": 9,
                    "title": "Oferta Especial 9",
                    "description": "Descuentos especiales para estudiantes. ¡Presenta tu ID estudiantil para obtener un 15% de descuento!"
                },
                {
                    "id": 10,
                    "title": "Oferta Especial 10",
                    "description": "Compra uno y llévate el segundo a mitad de precio en productos seleccionados."
                },
                {
                    "id": 11,
                    "title": "Oferta Especial 11",
                    "description": "Suscríbete a nuestro boletín y recibe un 10% de descuento en tu próxima compra."
                },
                {
                    "id": 12,
                    "title": "Oferta Especial 12",
                    "description": "¡Oferta exclusiva en línea! 20% de descuento en todas las compras hechas desde nuestra web."
                },
                {
                    "id": 13,
                    "title": "Oferta Especial 13",
                    "description": "Descuento del 50% en tu segunda compra cuando adquieras productos de nuestra línea premium."
                },
                {
                    "id": 14,
                    "title": "Oferta Especial 14",
                    "description": "Descuentos por volumen: compra más de 5 artículos y recibe un 30% de descuento en tu compra total."
                },
                {
                    "id": 15,
                    "title": "Oferta Especial 15",
                    "description": "Compra durante el Black Friday y obtén un 60% de descuento en productos seleccionados."
                }
            ];
                // Seleccionar 4 ofertas aleatorias
                var shuffled = data.sort(() => 0.5 - Math.random());
                var selectedOffers = shuffled.slice(0, 4);

                var offersContainer = $('#offers');
                offersContainer.empty();

                var offersContainer2 = $('#offers2');
                offersContainer2.empty();

                selectedOffers.forEach(function(offer) {
                    var offerHtml = `
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">${offer.title}</h5>
                                    <p class="card-text">${offer.description}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    offersContainer.append(offerHtml);
                    offersContainer2.append(offerHtml);
                });
        }

        function startUpdating() {
            if (intervalId) return; // Evita iniciar múltiples intervalos
            fetchOffers();
            intervalId = setInterval(fetchOffers, updateInterval);
        }

        function stopUpdating() {
            clearInterval(intervalId);
            intervalId = null;
        }

        $('#play').on('click', function() {
            startUpdating();
        });

        $('#pause').on('click', function() {
            stopUpdating();
        });

        $('#stop').on('click', function() {
            stopUpdating();
            $('#offers').empty(); // Limpia las ofertas
            $('#offers2').empty(); // Limpia las ofertas
        });

        $('#refresh').on('click', function() {
            stopUpdating();
            updateInterval = $("#interval").val() * 1000;
            startUpdating();
        });


        // Iniciar actualización por defecto
        startUpdating();
    </script>

@endsection