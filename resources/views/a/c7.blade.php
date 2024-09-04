@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 7: Uso del color</h2>
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