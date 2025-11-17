<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Sistema de reserva de citas medicas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
</head>
<body class="hold-transition register-page"
        style="background-image: url('{{ url('assets/img/about.jpg') }}');
        background-repeat: no-repeat;
         background-size: 100vw 100vh;
         background-attachment: fixed">
<div class="register-box">
    <!-- /.register-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>SIS MEDICAL</b></a>
        </div>
        <div class="card-body">
            <p class="register-box-msg">Crear nueva cuenta</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row mb-1">
                    <div class="col-md-12">
                        <div class="form-group mb-1">
                            <label for="name" class="col-form-label text-md-end">Nombre: </label>
                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-12">
                        <div class="form-group mb-1">
                            <label for="email" class="col-form-label text-md-end">Correo: </label>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-12">
                        <div class="form-group mb-1">
                            <label for="password" class="col-form-label text-md-end">Contraseña: </label>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-12">
                        <div class="form-group mb-1">
                            <label for="password-confirm" class="col-form-label text-md-end">Confirmar Contraseña: </label>
                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            Registrarse
                        </button>
                    </div>
                </div>
            </form>

            <br>

            <p class="mb-0">
                <a href="{{ url('login') }}" class="text-center">¿Ya tienes cuenta?</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
