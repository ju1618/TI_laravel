@section ('pageTitle','Listado')

@extends('layouts.template')

@section('content')
<style media="screen">
  .container{
      margin-top: 140px;
    }
</style>

<div class="container">

  <!-- check if $buscar variable is set, display buscar result -->
    @if (isset($producto))
        <div class="panel panel-success">
            <div class="panel-heading">Resultado de la busqueda</div>
            <div class="panel-body">

                <div class='table-responsive'>
                  <table class='table table-bordered table-hover'>
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>precio</th>
                        <th>descripcion</th>

                      </tr>
                    </thead>
                    <tbody>

                    @foreach($producto as $productos)
                        <tr>
                            <td>{{$productos['title']}}</td>
                            <td>{{$productos['image']}}</td>
                            <td>{{$productos['price']}}</td>
                            <td>{{$productos['description']}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                        </table>
                        <center>{{ $producto->appends(Request::only('title','price'))->links() }}</center>
                    </div>

            </div>
            <div class="panel-footer">
                <a href="/" class="btn btn-warning">Volver al Home</a>
            </div>
        </div>
    @endif

</div>


@endsection
