
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
            <li class="breadcrumb-item"><a href="#">Seccion de Docentes</a></li>
            <li class="breadcrumb-item"><a href="#">Lista de Docentes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar docentes</li>
        </ol>
    </nav>

<div style="text-align:center; " >

  
</div>

<hr>
</hr>
<div class="row justify-content-center";>
    <div class="card">
        <div class="card-body">
            <h2 class="h5 mb-4">EDITAR DOCENTE<hr></h2>
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/profes/{{$profesores->id}}" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Nombre del docente:</label>
                    <input type="text" name="name" id="nombre" class="form-control" value="{{$profesores->nombre}}">

                    @if ($errors->has('nombre'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>
                @endif

                <div class="form-group">
                    <label for="exampleInputUsername1">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" value="{{$profesores->fecha_nacimeinto}}" required>
                       
                        @if ($errors->has('fecha_nacimiento'))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $errors->first('fecha_nacimiento') }}</span>
                        </div>
                        @endif
                    </div>



           

            <div class="form-group">
            <label for="exampleInputUsername1">Edad</label>
                <input type="number" name="edad" class="form-control" value="{{$profesores->edad}}" required>
               
                @if ($errors->has('edad'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('edad') }}</span>
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Genero</label>
                    <input type="text" name="genero" class="form-control" value="{{$profesores->genero}}" required>
                   
                    @if ($errors->has('genero'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('genero') }}</span>
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="exampleInputUsername1">Correo electronico</label>
                        <input type="text" name="email" class="form-control" value="{{$profesores->email}}" required>
                       
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Telefono</label>
                            <input type="number" name="telefono" class="form-control" value="{{$profesores->telefono}}" required>
                           
                            @if ($errors->has('telefono'))
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $errors->first('telefono') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Localidad</label>
                                <input type="text" name="localidad" class="form-control" value="{{$profesores->localidad}}" required>
                               
                                @if ($errors->has('localidad'))
                                <div class="alert alert-danger">
                                    <span class="text-danger">{{ $errors->first('localidad') }}</span>
                                </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="exampleInputUsername1">Domicilio</label>
                                    <input type="text" name="domicilio" class="form-control" value="{{$profesores->domicilio}}" required>
                                   
                                    @if ($errors->has('domicilio'))
                                    <div class="alert alert-danger">
                                        <span class="text-danger">{{ $errors->first('domicilio') }}</span>
                                    </div>
                                    @endif
                                </div>


                                <div class="form-group float-right mt-3" style="float: right">
                                    <button type="submit" class="btn btn-secondary mr-2 mb-3">Guardar</button>
                                    <a href="/profes/5/edit"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
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

