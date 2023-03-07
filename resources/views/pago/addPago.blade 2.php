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
            <li class="breadcrumb-item"><a href="#">Forma de pagos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nueva forma de pago</li>
        </ol>
    </nav>

<div class="row justify-content-center">
<div class="cold md-12 grid-margin strecht-card">
    <div class="card">
        <div class="card body p-4 p-lg-5" >
            <h2 class="h5 mb-4">Nuevo registro<hr></h2>
            <form method="post" action="/concepts/pago" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputUsername1">Tipo de pago</label>
                    <input type="text" name="Tipo" class="form-control" required>
                    @if ($errors->has('tipo'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('tipo') }}</span>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Nombre de cuenta</label>
                    <input type="text" name="Nombre" class="form-control" required>
                    @if ($errors->has('nombre'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('nombre') }}</span>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Valor</label>
                    <input type="number" name="Valor" class="form-control" required>
                    @if ($errors->has('valor'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('valor') }}</span>
                    </div>
                    @endif
                </div>
                <div class="form-group float-right mt-3" style= "float: right">
                    <button type="submit" class="btn btn-secondary mr-2 mb-3">Guardar</button>
                    <a href="/concepts/pago"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
                </div>
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