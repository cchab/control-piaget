
@extends('layouts.app')

@section('content')
<div class="container" style="margin: 0px auto;",>

<div style="text-align:center; " >

    <h3>Editar CONCEPTO</h3>
</div>

<hr>
</hr>
<div class="row justify-content-center";>
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/concepto/{{$concept->id}}" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Nombre del Concepto:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$concept->nombre}}">

                    @if ($errors->has('nombre'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Monto del concepto</label>
                <input type="number" name="cantidad" class="form-control" value="{{$concept->monto}}" required>
               
                @if ($errors->has('monto'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('monto') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputUsername1">Fecha</label>
                <input type="date" name="fech" class="form-control" value="{{$concept->fecha}}" required>
               
                @if ($errors->has('fecha'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('fecha') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group float-right mt-3" style= "float: right">
                <button type="submit" class="btn btn-secondary mr-2 mb-3">Guardar</button>
                <a href="/concepts"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
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
