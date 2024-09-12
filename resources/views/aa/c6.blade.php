@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 6: Múltiples vías</h2>
	<!-- Nav tabs -->
        <ul class="nav nav-tabs  nav-fill nav-pills" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="multiple-ways-compliant-tab" data-toggle="tab" href="#multiple-ways-compliant" role="tab" aria-controls="multiple-ways-compliant" aria-selected="true">Ejemplo A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="multiple-ways-noncompliant-tab" data-toggle="tab" href="#multiple-ways-noncompliant" role="tab" aria-controls="multiple-ways-noncompliant" aria-selected="false">Ejemplo B</a>
            </li>
        </ul>

        <!-- Tab content -->
        <div class="tab-content mt-3" id="myTabContent">
            <!-- Ejemplo A -->
            <div class="tab-pane fade show active" id="multiple-ways-compliant" role="tabpanel" aria-labelledby="multiple-ways-compliant-tab">
                                
                <main>
                    <section id="home">
                        <h2>Inicio</h2>
                        <p>Bienvenido a nuestra página de inicio.</p>
                        <br>
                        <br>
                        <br>
                    </section>
                    <section id="services">
                        <h2>Servicios</h2>
                        <p>Descubre los servicios que ofrecemos.</p>
                        <br>
                        <br>
                        <br>
                    </section>
                    <section id="about">
                        <h2>Acerca de</h2>
                        <p>Conoce más sobre nosotros.</p>
                        <br>
                        <br>
                        <br>
                    </section>
                    <section id="contact">
                        <h2>Contacto</h2>
                        <p>Contáctanos para más información.</p>
                        <br>
                        <br>
                        <br>
                    </section>
                    <section id="search">
                        <h2>Buscar</h2>
                        <input type="text" placeholder="Buscar en el sitio...">
                        <br>
                        <br>
                        <br>
                    </section>
                </main>

            </div>

            <!-- Ejemplo B -->
            <div class="tab-pane fade" id="multiple-ways-noncompliant" role="tabpanel" aria-labelledby="multiple-ways-noncompliant-tab">
                

                <div class="nav-options">
                    <ul class="nav nav-tabs" id="subTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">Buscar</a>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="tab-content" id="subTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h2>Inicio</h2>
                            <p>Bienvenido a nuestra página de inicio.</p>
                        </div>
                        <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                            <h2>Servicios</h2>
                            <p>Descubre los servicios que ofrecemos.</p>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <h2>Acerca de</h2>
                            <p>Conoce más sobre nosotros.</p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h2>Contacto</h2>
                            <p>Contáctanos para más información.</p>
                        </div>
                        <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                            <h2>Buscar</h2>
                            <input type="text" placeholder="Buscar en el sitio...">
                        </div>
                    </div>
                </div>


            </div>
        </div>
</div>
@endsection