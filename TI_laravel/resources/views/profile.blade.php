
@section ('pageTitle','Profile')

@extends('layouts.template')
<!-- Vinculación externa de CSS-->
<link rel="stylesheet" href="/css/perfilusuario.css">

@section('content')
<!---Estilo del javascript aplicado  a la factura-->
<style>
body {font-family: Arial, Helvetica, sans-serif;
padding-top: 100px;}

#myImg {
border-radius: 5px;
cursor: pointer;
transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 1; /* Sit on top */
padding-top: 150px; /* Location of the box */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
margin: auto;
display: block;
width: 80%;
max-width: 700px;
}

/* Caption of Modal Image */
#caption {
margin: auto;
display: block;
width: 80%;
max-width: 700px;
text-align: center;
color: #ccc;
padding: 10px 0;
height: 150px;
}

/* Add Animation */
.modal-content, #caption {
-webkit-animation-name: zoom;
-webkit-animation-duration: 0.6s;
animation-name: zoom;
animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
from {-webkit-transform:scale(0)}
to {-webkit-transform:scale(1)}
}

@keyframes zoom {
from {transform:scale(0)}
to {transform:scale(1)}
}

/* The Close Button */
.close {
position: absolute;
top: 15px;
right: 35px;
color: #f1f1f1;
font-size: 40px;
font-weight: bold;
transition: 0.3s;
padding-top: 100px;
}

.close:hover,
.close:focus {
color: #bbb;
text-decoration: none;
cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
.modal-content {
  width: 100%;
}
}
</style>
<!---Fin de la hoja de estilo del JS-->

    <div class="container">
       <div class="contenedor1">
         <div class="row">
           <div class="col-lg-12">
                <h1 class = "item"><center>Mi Perfil, {{ $user->name }}</center></h1>

                 <img src="{{asset(Auth::user()->avatar)}}" name="avatar" class="img-thumbnail img-responsive" style="width:300px; height:300px; float:center; border-radius:70%; margin-right:25px;">
           <form enctype="multipart/form-data" action="/profile" method="POST">
               <label>Actualizar imagen</label>
               <input type="file" name="avatar">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <br>
               <br>
               <input type="submit" class="pull-right btn btn-sm btn-primary">
               <br>
           </form>
           <br>
           <h2 id="MisDatos" class = "item"><em><strong><center>Mis datos</center></strong></em></li></h2>
           <br>
           <p><strong>Usuario: </strong>  {{ $user->username }} </p>
           <br>
           <p><strong>Nombre: </strong> {{ $user->name }} {{ $user->lastname}} </p>
           <br>
           <p><strong>Pais: </strong>  {{ $user->country }}</p>
           <br>
           <p><strong>Email: </strong> {{ $user->email }} </p>
           <br>
           <br>
        </div>
      </div>
     </div>
     <div class="contenedor2">
       <div class="row">
        <div class="col-lg-12">
         <br>
         <br>
         <a class="item" href="#MisDatos">Mis Datos</a>
         <br>
         <br>
         <a class="item" href="#compras">Carrito de Compras</a>
         <br>
         <br>
         <a class="item" href="#facturas">Facturación</a>
         <br>
         <br>
         <a class="item" href="#cambiopass">Contraseña</a>
       </div>
      </div>
    </div>
      <div class="contenedor3">
        <div class="row">
         <div class="col-lg-12">
         <br>
         <h2 id="compras" class="item"><em><strong><center>Carrito de Compras</center></strong></em></li></h2>
         <br>

         <br>
      </div>
    </div>
   </div>
      <div class="contenedor4">
        <div class="row">
         <div class="col-lg-12">
         <br>
         <h2 id="facturas" class="item"><em><strong><center>Facturación</center></strong></em></li></h2>
          <img id="myImg" class="facturadecompra"  src="/images/facturamp.png" alt="factura de compra" style="width:100%;max-width:300px">

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        </script>
      </div>
    </div>
   </div>
      <div class="contenedor5">
        <div class="row">
         <div class="col-lg-12">
         <br>
         <h2 id="cambiopass" class="item"><em><strong><center>Contraseña</center></strong></em></h2>
         <br>
          <a href="#reset">Reestablecer contraseña</a>
         <br>
         <a  href="cambiar_contrasenia.php">Cambiar contraseña</a>
         <br>
         <a class="dropdown-item" href="logout.php">Salir</a>
      </div>
    </div>
   </div>
 </div>
@endsection
