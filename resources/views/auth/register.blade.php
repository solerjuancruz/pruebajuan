<!doctype html>
<html lang="es">

<head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-content-lg-start h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
                    <div class="card " style="border-radius: 1rem;">

                        <div class="card-header card-header-info bg-info mx-3 text-center">
                            <h2 class="fw-bold text-white">Registro</h2>
                        </div>
                        <div class="card-body px-5">

                            <div class="mb-md-5 mt-md-4 pb-2">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="name">Usuario</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Ingresa usuario" autofocus />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Ingresa email" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="mb-2" for="password">Contraseña</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Contraseña" />
                                    </div>
                                    
                                    <div class="d-flex justify-content-center">

                                        <button class="btn btn-info px-5" type="submit">Registrarse</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
