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
            <li class="breadcrumb-item"><a href="#">Carga Academica</a></li>
            <li class="breadcrumb-item"><a href="#">Lista de cargas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar carga</li>
        </ol>
    </nav>

<div style="text-align:center; " >

  
</div>

<hr>
</hr>
<div class="row justify-content-center";>
    <div class="card">
        <div class="card-body">
            <h2 class="h5 mb-4">EDITAR CARGA ACADEMICA<hr></h2>
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/cargas/{{$cargas->id}}" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Grupo</label>
                    <input type="text" name="grupo" id="grupo" class="form-control" value="{{$cargas->grupo}}">

                    @if ($errors->has('grupo'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('grupo') }}</span>
                </div>
                @endif

                <div class="form-group">
                    <label for="exampleInputUsername1">Grado</label>
                        <input type="number" name="grado" class="form-control" value="{{$cargas->grado}}" required>
                       
                        @if ($errors->has('grado'))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $errors->first('fecha_grado') }}</span>
                        </div>
                        @endif
                    </div>



           

            <div class="form-group">
            <label for="exampleInputUsername1">Nivel</label>
                <input type="number" name="nivel" class="form-control" value="{{$cargas->nivel}}" required>
               
                @if ($errors->has('nivel'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nivel') }}</span>
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Periodo</label>
                    <input type="text" name="periodo" class="form-control" value="{{$cargas->periodo}}" required>
                   
                    @if ($errors->has('periodo'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('periodo') }}</span>
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="exampleInputUsername1">Docente</label>
                        <input type="text" name="docente" class="form-control" value="{{$cargas->docente}}" required>
                       
                        @if ($errors->has('docente'))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $errors->first('docente') }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Asignatura</label>
                            <input type="text" name="asignatura" class="form-control" value="{{$cargas->asignatura}}" required>
                           
                            @if ($errors->has('asignatura'))
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $errors->first('asignatura') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Bimestre</label>
                                <input type="text" name="bimestre" class="form-control" value="{{$cargas->bimestre}}" required>
                               
                                @if ($errors->has('bimestre'))
                                <div class="alert alert-danger">
                                    <span class="text-danger">{{ $errors->first('bimestre') }}</span>
                                </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="exampleInputUsername1">Alumnos</label>
                                    <input type="text" name="alumnos" class="form-control" value="{{$cargas->alumnos}}" required>
                                   
                                    @if ($errors->has('alumnos'))
                                    <div class="alert alert-danger">
                                        <span class="text-danger">{{ $errors->first('alumnos') }}</span>
                                    </div>
                                    @endif
                                </div>


                                <div class="form-group float-right mt-3" style="float: right">
                                    <button type="submit" class="btn btn-secondary mr-2 mb-3">Guardar</button>
                                    <a href="/cargas/1/edit"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
                                    <a href="/cargas"  class="btn btn-primary btn-fw mb-3">Regresar</a>
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

