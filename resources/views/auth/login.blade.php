<!doctype html>
<html lang="es">

<head>
  <title>login prueba juan</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="{{asset('assets/styles.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" 
    integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" 
    crossorigin="anonymous">

</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
              <div class="card text-center" style="border-radius: 1rem;">
             
                <div class="card-header card-header-info bg-info mx-3 text-center">
              <h2 class="fw-bold mb-2 text-white">Login</h2>
              <p class="text-white-50 mb-5 text-center">login prueba juan</p>
             </div>
                <div class="card-body px-5">
      
                  <div class="mb-md-5 mt-md-4 pb-2">
                  <form action="{{ route('login') }}" method="post">
                    
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="typeEmailX" class="form-control form-control" placeholder="Usuarios" />
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control" placeholder="Contraseña" />
                      
                    </div>
                    <div class="form-check d-flex justify-content-start mb-5 ">
                      <input class="form-check-input mr-1" type="checkbox" id="politicas" checked>
                      <label class="form-check-label px-3" for="politicas">Politicas</label>
                    </div>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Escribe aquí..." />
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fas fa-user"></i> <!-- Reemplaza "fa-search" con la clase del icono deseado -->
                        </span>
                      </div>
                    </div>
                    
      
                    <button class="btn btn-outline-info px-5" type="submit">Ingresar</button>
                    <a class="btn d-block mt-3" href="{{route('register') }}">Registrate</a>
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