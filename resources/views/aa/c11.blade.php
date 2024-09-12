@extends('layouts.app')

@section('title', 'Prevención de Errores')

@section('content')
    <h1>Prevención de Errores en Formularios</h1>

    <ul class="nav nav-tabs" id="mainTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="incorrect-tab" data-toggle="tab" href="#incorrect" role="tab" aria-controls="incorrect" aria-selected="false">Opcion A</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="correct-tab" data-toggle="tab" href="#correct" role="tab" aria-controls="correct" aria-selected="true">Opcion B</a>
        </li>
    </ul>

    <div class="tab-content mt-3" id="mainTabContent">
        <!-- Ejemplo Correcto -->
        <div class="tab-pane fade show active" id="correct" role="tabpanel" aria-labelledby="correct-tab">
            <h2>Formulario de registro</h2>
            <form id="correct-form" novalidate>
                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required minlength="8">
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-secondary btn-prev">Volver</button>
                    <button type="button" class="btn btn-primary btn-next" onclick="valida();">Revisar</button>
                </div>
            </form>
        </div>

        <!-- Modal para revisión -->
        <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Revisa tus Datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nombre Completo:</strong> <span id="review-name"></span></p>
                        <p><strong>Correo Electrónico:</strong> <span id="review-email"></span></p>
                        <p><strong>Contraseña:</strong> <span id="review-password"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal();">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="submitForm">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ejemplo Incorrecto -->
        <div class="tab-pane fade" id="incorrect" role="tabpanel" aria-labelledby="incorrect-tab">
            <h2>Formulario de registro</h2>
            <form id="incorrect-form" novalidate>
                <div class="form-group">
                    <label for="name-incorrect">Nombre Completo</label>
                    <input type="text" class="form-control" id="name-incorrect" placeholder="Ingresa tu nombre completo" required>
                </div>
                <div class="form-group">
                    <label for="email-incorrect">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email-incorrect" placeholder="Ingresa tu correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="password-incorrect">Contraseña</label>
                    <input type="password" class="form-control" id="password-incorrect" placeholder="Ingresa tu contraseña" required minlength="8">
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-secondary btn-prev">Volver</button>
                    <button type="submit" class="btn btn-primary btn-next">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Ejemplo Correcto: Prevención de Errores


            // Enviar el formulario después de la revisión
            $('#submitForm').on('click', function() {
                $('#correct-form').submit();
            });

            // Ejemplo Incorrecto: Validación Simple
            $('#incorrect-form').on('submit', function(event) {
                if (!this.checkValidity()) {
                    event.preventDefault(); // Previene el envío del formulario si hay errores
                    event.stopPropagation();
                    $(this).addClass('was-validated');
                }
            });
        });

        function valida(){
            var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();

                // Insertar los valores en el modal
                $('#review-name').text(name);
                $('#review-email').text(email);
                $('#review-password').text(password);

                // Mostrar el modal
                $('#reviewModal').modal('show');
        }

        function closeModal(){
            $('#reviewModal').modal('hide');
        }
    </script>
@endsection
