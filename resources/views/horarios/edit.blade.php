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
            <li class="breadcrumb-item"><a href="#">Horarios</a></li>
            <li class="breadcrumb-item"><a href="#">Lista de Horarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Horarios</li>
        </ol>
    </nav>

<div style="text-align:center; " >

  
</div>

<hr>
</hr>
<div class="row justify-content-center";>
    <div class="card">
        <div class="card-body">
            <h2 class="h5 mb-4">EDITAR HORARIO<hr></h2>
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/horarios/{{$horarios->id}}" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Grupo</label>
                    <input type="number" name="grupo" id="grupo" class="form-control" value="{{$horarios->grupo_id}}">

                    @if ($errors->has('grupo'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('grupo') }}</span>
                </div>
                @endif
            </div>


            <div class="form-group">
                <label for="exampleInputUsername1">Grado</label>
                <input type="text" name="grado" class="form-control" value="{{$horarios->grado_id}}" required>
                       
                @if ($errors->has('grado'))
                <div class="alert alert-danger">
                <span class="text-danger">{{ $errors->first('grado') }}</span>
                </div>
                @endif
            </div>


            <div class="form-group">
                <label for="exampleInputUsername1">Aula</label>
                <input type="text" name="aula" class="form-control" value="{{$horarios->aula}}" required>
                       
                @if ($errors->has('aula'))
                <div class="alert alert-danger">
                <span class="text-danger">{{ $errors->first('aula') }}</span>
                </div>
                @endif
            </div>



            <div class="form-group">
            <label for="exampleInputUsername1">Dia</label>
                <input type="date" name="dia" class="form-control" value="{{$horarios->dia}}" required>
               
                @if ($errors->has('dia'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('dia') }}</span>
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Hora</label>
                    <input type="time" name="hora" class="form-control" value="{{$horarios->hora}}" required>
                   
                    @if ($errors->has('hora'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('hora') }}</span>
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="exampleInputUsername1">Asignatura</label>
                        <input type="text" name="asignatura" class="form-control" value="{{$horarios->asignatura_id}}" required>
                       
                        @if ($errors->has('asignatura'))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $errors->first('asignatura') }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Docente</label>
                            <input type="text" name="profesor" class="form-control" value="{{$horarios->profesores}}" required>
                           
                            @if ($errors->has('profesor'))
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $errors->first('profesor') }}</span>
                            </div>
                            @endif
                        </div>

         

                                <div class="form-group float-right mt-3" style="float: right">
                                    <button type="submit" class="btn btn-secondary mr-2 mb-3">Guardar</button>
                                    <a href="/horarios/11/edit"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
                                    <a href="/horarios"  class="btn btn-primary btn-fw mb-3">Regresar</a>
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

