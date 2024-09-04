@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 10: Sin trampas para el foco del teclado</h2>
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
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7b.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7c.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Comprar</button>
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
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7b.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="alert alert-dark" role="alert">
                      Termo marca Stanley color azul. <br>Precio: $#.##
                    </div>
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Comprar</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/C7c.jpg') }}" style="height: 300px;" alt="Imagen" class="img-fluid">
                    <div class="alert alert-dark" role="alert">
                      Termo marca Stanley color verde. <br>Precio: $#.##
                    </div>
                    <div class="mt-3" align="right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- El Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Contenido del Modal</h5>
                </div>
                <div class="modal-body">
                    <form id="paymentForm">
                        <div class="form-group">
                            <label for="cardNumber">Número de tarjeta</label>
                            <input type="text" class="form-control" id="cardNumber" placeholder="Número de tarjeta" required>
                        </div>
                        <div class="form-group">
                            <label for="cardName">Nombre en la tarjeta</label>
                            <input type="text" class="form-control" id="cardName" placeholder="Nombre en la tarjeta" required>
                        </div>
                        <div class="form-group">
                            <label for="expiryDate">Fecha de expiración</label>
                            <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv">Código de seguridad (CVV)</label>
                            <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Pagar</button>
                </div>
            </div>
        </div>
    </div>

        <!-- El Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Formulario de Pago</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="paymentForm">
                        <div class="form-group">
                            <label for="cardNumber">Número de tarjeta</label>
                            <input type="text" class="form-control" id="cardNumber" placeholder="Número de tarjeta" required>
                        </div>
                        <div class="form-group">
                            <label for="cardName">Nombre en la tarjeta</label>
                            <input type="text" class="form-control" id="cardName" placeholder="Nombre en la tarjeta" required>
                        </div>
                        <div class="form-group">
                            <label for="expiryDate">Fecha de expiración</label>
                            <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv">Código de seguridad (CVV)</label>
                            <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Pagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection