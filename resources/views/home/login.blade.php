<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <title>Foro de ropuestas</title>
</head>

<body style="background: linear-gradient(to bottom, #026597 43%, #990099 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <!-- isotipo -->
                    <div class="col-12 col-lg-4 bg-primary text-white d-flex flex-column justify-content-center align-items-center" style="height: 25rem;">
                        <div class="bg-white p-2 mb-3 rounded">
                            <img src="{{asset('images/isotipo_usm_color.jpg')}}" style="width: 7rem;">
                        </div>
                        <h5>Ingreso de propuestas para proyecto</h5>
                        <h6>Taller de sistemas de información</h6>
                    </div>

                    <!-- formulario -->
                    <div class="col-12 col-lg-8 py-4">
                        <h4>Inicio de Sesión</h4>
                        <small>Ingrese sus datos para iniciar sesión</small>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <a href="index" class="btn btn-success">Iniciar Sesión</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
