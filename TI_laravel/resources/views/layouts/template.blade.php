<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>@yield('pageTitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- LLamda a font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--         link de tipografia        -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <!--         link de normalize       -->
    <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" rel="stylesheet">
    <!--         link a bootstrap        -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Enlace a la hoja de estilo login-->
    <link rel="stylesheet" href="css/styles-login.css">
    <!--                links a hojas de estilo index           -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product-c.css">
    <link rel="stylesheet" href="css/style-index.css">
    <!--                links a hojas de estilo nav-bar y footer           -->
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/styles-footer.css">
    </head>
  <body>
    <!-- INICIO DEL NAV BAR -->
    <nav class="main-nav navbar fixed-top navbar navbar-expand-lg navbar-light">
      <a class= "navbar-brand" href="index.php">
        <img class="logo navbar-brand" src="images/logo1.png" alt="logo tu empresa">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class= "nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item active">
            <a class= "nav-link" href="#">Productos</a>
          </li>
          @if (Auth::user())
            <li class="nav-item">
              <a class= "nav-link" href="login.php">Ingresar</a>
            </li>
            <li class="nav-item">
              <a class= "nav-link" href="registrer.php">Registrarse</a>
            </li>
          @else
            <li class="nav-item">
              <a class= "nav-link" href="perfilusuario.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class= "nav-link" href="logout.php">Cerrar Sesión</a>
            </li>
          @endif

          <li class="nav-item">
            <a class= "nav-link" href="/faq">FAQ</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- FIN DEL NAVBAR -->


    @yield('content')


  </body>
  <footer class="container mx-auto st-footer col-12">

    <div class="redes d-flex justify-content-center">
        <div class="mis-redes-sociales align-self-center">
          <br>
          <p>También estamos en las redes!</p>
          <div class="mis-botones-redes d-flex justify-content-between align-items-center">
            <a class="mi-boton-redsocial" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="mi-boton-redsocial" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="mi-boton-redsocial" href="#">
                <i class="fab fa-twitter-square"></i>
            </a>
          </div>
        </div>
    </div>
        <hr>
    <div class="menu d-flex flex-column flex-lg-row justify-content-between align-items-center">

      <div class="menu-texto d-flex flex-column flex-md-row">
        <div class="lista-de-secciones">
          <h5 class="text-center d-sm-block">Mapa del sitio</h5>
          <ol>
            <hr>
            <li> <a href="index.php">Home</a> </li>
            @if (!Auth::user())
              <li> <a href="login.php">Ingresar</a> </li>
              <li> <a href="registrer.php">Registrarse</a> </li>
            @else
              <li> <a href="perfilusuario.php">Perfil</a> </li>
              <li> <a href="logout.php">Cerrar Sesión</a> </li>
            @endif
            <li> <a href="faqs.php">FAQ</a> </li>
          </ol>
        </div>
        <div class="contacto justify-content-center">
          <h5 class="text-center d-sm-block">Contacto</h5>
          <hr>
          Calle falsa 123, <br>
          CABA <br>
          telefono: 555-5555 <br>
            <div class="">
              <a class="d-none d-md-block"href="mailto:soporte.marketpalace@gmail.com">soporte.marketpalace@gmail.com</a>
              <a class="d-block d-md-none"href="mailto:soporte.marketpalace@gmail.com">mail</a>
            </div>
          </div>
      </div>

      <div class="menu-maps d-flex flex-column flex-lg-row">
        <div class="mapa d-none d-md-block float-right">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494247733!2d-58.38378388528777!3d-34.621076080455005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital+House!5e0!3m2!1ses-419!2sar!4v1558375291423!5m2!1ses-419!2sar" width="450" height="120" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="linkAlMapa d-block d-sm-block d-md-none">
          <a class="text-center" href="https://goo.gl/maps/XJPizahVCrWxmr8i8">Ir al mapa</a>
        </div>
      </div>

    </div>
    <hr>
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
      <p class="float-left" style="color: #000;">&copy; 2019 Trabajo Integrador DH. </p>
      <p class="float-right footer-link" style="color: #000;"><a href="index.php">-Home- </a></p>
      <p class="float-right footer-link" style="color: #000;"><a href="#">-Volver arriba-</a></p>
    </div>



  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> <script src="js/bootstrap.min.js"></script>

</html>