@section ('pageTitle','Listado')

@extends('layouts.template')

@section('content')

<style media="screen">
  .container{
      margin-top: 140px;
    }
</style>

<div class="container">

  <?php
  if (isset($_POST["id"])) {
  	mostrarPropiedades($_POST["id"]);
  } else {
  	echo 'Ir al Buscador';
  	echo '<a href="buscador"> volver al buscador </a>';
  }

  function mostrarProductos($nombre_prod){
  	$conexion = mysqli_connect("127.0.0.1", "ju", "", "Contra1234");

  	echo '<h1>';
  	echo 'Productos encontrados con: '.'"'.$nombre_prod.'"';
  	echo '<br>';
  	echo '</h1>';

  	$q = "SELECT * FROM products WHERE title LIKE '%$nombre_prod%'";
  	$resultado = mysqli_query($conexion, $q);

  	echo '<div class="contenido">';
  	while ($row = mysqli_fetch_array($resultado)) {
  		echo '<div class="caja">';
  		echo '<h2>'.$row['title'].'</h2>';
  		echo '<p>'.$row['descripcion'].'</p>';
  		echo '<h4>'.$row['price'].'</h4>';
  		// echo '<a href="ficha.php?p='.$row['codigo'].'"> ver más </a>';
  		echo '<br><br>';
  		echo '</div>';
  	}
  	echo '</div>';
  }
  ?>

</div>


@endsection
