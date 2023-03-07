<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Editar Forma de Pago</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<hr>
@extends('layouts.app')

@section('content')
<div class="container" style="margin: 0px auto;",>

<div style="text-align:center; " >

    <h3>Editar Forma de Pago</h3>
</div>

<hr>
</hr>
<div class="row justify-content-center";>
    <div class="card" style="background-color:#82b1ff">
        <div class="card-body">
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/concepts/pago/{{$forma->id}}" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Tipo de Pago:</label>
                    <input type="text" name="Tipo"  class="form-control" value="{{$forma->tipo}}">

                    @if ($errors->has('tipo'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('tipo') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Nombre de la cuenta</label>
                <input type="text" name="Nombre" class="form-control" value="{{$forma->nombre}}" required>
               
                @if ($errors->has('nombre'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputUsername1">Numero de cuenta</label>
                <input type="number" name="Valor" class="form-control" value="{{$forma->valor}}" required>
               
                @if ($errors->has('valor'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('valor') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success" style="background-color: 	#009624">Guardar</button>
                <a href="/concepts/pago"  class="btn btn-success" style="background-color: 	#a30000">Cancelar</a>
            </div>
    
        </form>
        </div>
    </div>
</div> 

</hr>
</table>
</div>


@endsection

</div>
</body>
</html>
