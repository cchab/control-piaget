@extends('layouts.app')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Seccion de pagos</a></li>
            <li class="breadcrumb-item"><a href="#">Concepto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo concepto</li>
        </ol>
    </nav>

<div class="row justify-content-center">
<div class="cold md-12 grid-margin strecht-card">
    <div class="card">
        <div class="card body p-4 p-lg-5" >
            <h2 class="h5 mb-4">Nuevo concepto<hr></h2>
        <form method="post" action="/concepto" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputUsername1">Nombre del concepto</label>
                <input type="text" name="name" class="form-control" required>
                @if ($errors->has('nombre'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Monto del concepto</label>
                <input type="number" name="cantidad" class="form-control" required>
                @if ($errors->has('monto'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('monto') }}</span>
                </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Fecha de creación</label>
                <input type="date" name="fech" class="form-control" required>
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
