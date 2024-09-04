@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 6: Características sensoriales</h2>
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
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Iniciar Sesión</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="username">Nombre de Usuario: </label>
                                            <input type="text" id="username" name="username" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="password">Contraseña: </label>
                                            <input type="password" id="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3" align="right">
                                        <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-arrow-right-short" style="font-size: 30px;"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Iniciar Sesión</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="alert alert-dark" role="alert">
                                      Instrucciones: Ingrese su nombre de usuario y contraseña, luego seleccione el botón azul con la etiqueta "Acceder" en la esquina inferior derecha.
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="username">Nombre de Usuario: </label>
                                            <input type="text" id="username" name="username" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="password">Contraseña: </label>
                                            <input type="password" id="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3" align="right">
                                        <button type="submit" class="btn btn-primary">Acceder <i class="bi bi-arrow-right-short"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection