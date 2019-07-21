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
