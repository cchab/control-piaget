@extends('layouts.app')

@section('content')

<style>
    .bootstrap-select .btn{
        border: 0.0625rem solid #D1D5DB;
    }
</style>

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Horarios</a></li>
            
        </ol>
    </nav>


<div class="row justify-content-center">
  
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="h5 mb-4">REGISTRAR HORARIO<hr></h2>
        <form class="forms-sample" method="post" action="/horarios" enctype="multipart/form-data">
            @csrf

            <div class="row"> <!--ROW INICIO -->
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Grupo</label>
                    <select name="grupo" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                        @foreach ($Grupos as $g)
                            <option value="{{$g->id}}">{{$g->letra}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Grado</label>
                    <select name="grado" class="form-control form-control-sm">
                      <option selected=>Seleccione</option>
                      @foreach ($Grados as $grados)
                          <option value="{{$grados->id}}">{{$grados->numero}}</option>
                      @endforeach
                    </select>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Aula</label>
                    <div class="col-sm-12">
                      <input type="text" name="aula" class="form-control" />
                    </div>
                </div>

                


                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Dia</label>
                    <select name="dia" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miércoles</option>
                            <option value="4">Jueves</option>
                            <option value="5">Viernes</option>
                            <option value="6">Sábado</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Hora inicio</label>
                    <div class="col-sm-12">
                      <input type="time" name="hora" class="form-control" />
                    </div>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Hora fin</label>
                    <div class="col-sm-12">
                      <input type="time" name="hora_fin" class="form-control" />
                    </div>
                </div>
                

                
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Asignatura</label>
                    
                    <select name="asignaturas[]" id="asignatura"  class="selectpicker  form-control" 
                    title="Seleccionar asignaturas" multiple required>
                    @foreach ($Asignaturas as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                    @endforeach
                      </select>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Docente</label>
                    <select name="docente" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                        @foreach ($Profesores as $profesores)
                        <option value="{{$profesores->id}}">{{$profesores->nombre}}</option>
                        @endforeach
                    </select>
                </div>


                
       
              
            </div> <!--ROW FIN-->
             
          
            <div class="form-group float-right mt-3" style="float: right">
                <button type="submit" class="btn btn-secondary mr-2 mb-3">Registrar</button>
                <a href="/horarios/create"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
                <a href="/horarios"  class="btn btn-primary btn-fw mb-3">Lista</a>
            </div>
            
        </form>
        </div>
    </div>
</div>
    
</div>

@endsection