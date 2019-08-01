@section ('pageTitle','Buscador')

@extends('layouts.template')

@section('content')

<style media="screen">
  .container{
      margin-top: 140px;
    }

  body{
      font-family: "Fira Sans", sans-serif; /*esto es para que si no carga la tipografia roboto me cargue la sans-serif*/
      background-image: url("../images/colorclaro.jpg");
      background-color: rgba(75,145,214,0.11);
      background-size:cover;
    }
</style>

<!-- <div class="container">

	<div class="d-flex justify-content-center">
	<h1>Buscador de Productos</h1>
	</div>
	<div class="d-flex justify-content-center formu">
	<form class="d-flex align-items-center" method="post" action="listado">
		<input type="text" name="nombre">
		<input type="submit" class="btn btn-primary" value="Buscar">
	</form>
	</div>

</div> -->
<div class="container">

<div class="panel panel-success">
            <div class="panel-heading text-black-50">Buscar Productos</div>
            <form action="buscar" method="get" onsubmit="return showLoad()">
            <div class="panel-body">
                <label class="label-control text-black-50">Nombre del producto</label>
                <input type="text" name="nombre_producto" class="form-control" placeholder="Ingresar nombre del producto" required="required">
                <br>

        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-success">buscar</button>
        </div>
        </form>
    </div>

    <!-- check if $buscar variable is set, display buscar result -->
    @if (isset($buscar))
        <div class="panel panel-success">
            <div class="panel-heading">Resultado de la busqueda</div>
            <div class="panel-body">

                <div class='table-responsive'>
                  <table class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Categoria</th>

                      </tr>
                    </thead>
                    <tbody>

                    @foreach($buscar as $buscars)
                        <tr>
                            <td>{{$buscars->id}}</td>
                            <td>{{$buscars['title']}}</td>
                            <td>{{$buscars['description']}}</td>
                            <td>$ {{$buscars['price']}}</td>
                            <td>{{$buscars['category_id']}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                        </table>
                        <center>{{ $buscar->appends(Request::only('description','price'))->links() }}</center>
                    </div>

            </div>
            <div class="panel-footer">
                <a href="buscar" class="btn btn-warning">Restaurar busqueda</a>
            </div>
        </div>
    @endif
</div>
@endsection
