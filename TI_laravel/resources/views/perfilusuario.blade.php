
@section ('pageTitle','Perfil')

@extends('layouts.template')
<!-- Vinculación externa de CSS-->
<link rel="stylesheet" href="/css/perfilusuario.css">
@section('content')


    <div class="contenedorprincipal">
      <img class="fondoperfil" src="images.fondoperfil.jpg" >
       <div class="contenedor1">
           <br>
           <!-- <center><img class="fotousuario" src="{{ $user->avatar }}"  alt="foto del usuario"></center> -->
							  <br>
                <h1><center>Mi Perfil, {{ $user->name }}</center></h1>
                 <br>
                <h2>Hola {{ $user->name }}</h2>
          <br>
          <br>
          <a class="item" href="#MisDatos">Mis Datos</a>
          <br>
          <br>
          <a class="item" href="#compras">Compras</a>
          <br>
          <br>
          <a class="item" href="#facturas">Facturación</a>
          <br>
          <br>
          <a class="item" href="#cambiopass">Contraseña</a>
      </div>
      <div class="contenedor2">
          <br>
          <h2 id = "MisDatos"><em><strong><center>Mis datos</center></strong></em></li></h2>
          <br>
          <p><strong>Usuario: </strong>  {{ $user->username }} </p>
          <br>
          <p><strong>Nombre: </strong> {{ $user->name }}  </p>
          <br>
          <p><strong>Pais: </strong>  {{ $user->country }}</p>
          <br>
          <p><strong>Email: </strong> {{ $user->email }} </p>
          <br>
          <br>
      </div>
      <div class="contenedor3">
         <br>
         <h2 id="compras"><em><strong><center>Compras</center></strong></em></li></h2>
         <br>
         <center><img class="productocomprado" src="images/mate-de-madera-colorido.jpg" alt="producto comprado"></center>
         <p>Mate de madera colorido</p>
         <p>Cantidad: 2</p>
         <p>Precio: $250</p>
         <p>Total: 2 x $250 = $500</p>
         <br>
      </div>
      <div class="contenedor4">
         <br>
         <h2 id="facturas"><em><strong><center>Facturación</center></strong></em></li></h2>
         <img class="facturadecompra" src="images/facturamp.png" alt="factura de compra">
          <a href="facturamp.php">Factura de compra</a>.
      </div>
      <div class="contenedor5">
         <br>
         <h2 id="cambiopass"><em><strong><center>Contraseña</center></strong></em></h2>
         <br>
         <a href="#reset">Reestablecer contraseña</a>
         <br>
         <br>
         <a href="cambiar_contrasenia.php">Cambiar contraseña</a>
         <br>
         <br>
         <a class="dropdown-item" href="logout.php">Salir</a>
      </div>
   </div>
@endsection
