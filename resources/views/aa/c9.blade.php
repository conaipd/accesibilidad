@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <h2>Nivel A > Criterio 9: Navegación coherente</h2>
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
            



            <ul class="nav nav-tabs" id="incoherentTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="incoherent-form1-tab" data-toggle="tab" href="#incoherent-form1" role="tab" aria-controls="incoherent-form1" aria-selected="true">Formulario A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="incoherent-form2-tab" data-toggle="tab" href="#incoherent-form2" role="tab" aria-controls="incoherent-form2" aria-selected="false">Formulario B</a>
                </li>
            </ul>

            <div class="tab-content mt-3" id="incoherentTabContent">
                <div class="tab-pane fade show active" id="incoherent-form1" role="tabpanel" aria-labelledby="incoherent-form1-tab">
                    <h2>Formulario A</h2>
                    <form>
                        <div class="form-group">
                            <label for="incoherent-input1">Campo X</label>
                            <input type="text" class="form-control" id="incoherent-input1" placeholder="Ingresa algo">
                        </div>
                        <div class="form-group">
                            <label for="incoherent-input2">Campo Y</label>
                            <input type="text" class="form-control" id="incoherent-input2" placeholder="Ingresa algo más">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-next">Siguiente</button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-danger btn-prev">Volver</button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="incoherent-form2" role="tabpanel" aria-labelledby="incoherent-form2-tab">
                    <h2>Formulario B</h2>
                    <form>
                        <div class="form-group">
                            <label for="incoherent-input3">Campo M</label>
                            <input type="text" class="form-control" id="incoherent-input3" placeholder="Ingresa algo">
                        </div>
                        <div class="form-group">
                            <label for="incoherent-input4">Campo N</label>
                            <input type="text" class="form-control" id="incoherent-input4" placeholder="Ingresa algo más">
                        </div>
                        <div class="form-group text-left">
                            <button type="button" class="btn btn-info btn-prev">Volver</button>
                            <button type="button" class="btn btn-warning btn-next">Siguiente</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            



            <ul class="nav nav-tabs" id="coherentTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="coherent-form1-tab" data-toggle="tab" href="#coherent-form1" role="tab" aria-controls="coherent-form1" aria-selected="true">Formulario 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="coherent-form2-tab" data-toggle="tab" href="#coherent-form2" role="tab" aria-controls="coherent-form2" aria-selected="false">Formulario 2</a>
                </li>
            </ul>

            <div class="tab-content mt-3" id="coherentTabContent">
                <div class="tab-pane fade show active" id="coherent-form1" role="tabpanel" aria-labelledby="coherent-form1-tab">
                    <h2>Formulario 1</h2>
                    <form>
                        <div class="form-group">
                            <label for="coherent-input1">Campo 1</label>
                            <input type="text" class="form-control" id="coherent-input1" placeholder="Ingresa algo">
                        </div>
                        <div class="form-group">
                            <label for="coherent-input2">Campo 2</label>
                            <input type="text" class="form-control" id="coherent-input2" placeholder="Ingresa algo más">
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-secondary btn-prev">Volver</button>
                            <button type="button" class="btn btn-primary btn-next">Siguiente</button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="coherent-form2" role="tabpanel" aria-labelledby="coherent-form2-tab">
                    <h2>Formulario 2</h2>
                    <form>
                        <div class="form-group">
                            <label for="coherent-input3">Campo A</label>
                            <input type="text" class="form-control" id="coherent-input3" placeholder="Ingresa algo">
                        </div>
                        <div class="form-group">
                            <label for="coherent-input4">Campo B</label>
                            <input type="text" class="form-control" id="coherent-input4" placeholder="Ingresa algo más">
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-secondary btn-prev">Volver</button>
                            <button type="button" class="btn btn-primary btn-next">Siguiente</button>
                        </div>
                    </form>
                </div>
            </div>



            
        </div>
    </div>
</div>


@endsection