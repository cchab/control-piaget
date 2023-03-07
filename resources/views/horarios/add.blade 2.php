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
                    <label class="col-sm-6 col-form-label">Grupo</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Aula</label>
                    <div class="col-sm-12">
                      <input type="text" name="aula" class="form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Dia</label>
                    <div class="col-sm-12">
                      <input type="text" name="dia" class="form-control" />
                    </div>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Hora</label>
                    <div class="col-sm-12">
                      <input type="time" name="hora" class="form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Asignatura</label>
                    <div class="col-sm-12">
                      <input type="text" name="asignatura" class="form-control" />
                    </div>
                </div>

                
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Docente</label>
                    <div class="col-sm-12">
                      <input type="text" name="profesor" class="form-control" />
                    </div>
                </div>
            <!--    <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Asignatura</label>
                    <select name="genero" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Docente</label>
                    <select name="genero" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div> -->
              
              
            </div> <!--ROW FIN-->
             
          
            <div class="form-group float-right mt-3" style="float: right">
                <button type="submit" class="btn btn-secondary mr-2 mb-3">Registrar</button>
                <a href="/horarios/create"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
            </div>
            
        </form>
        </div>
    </div>
</div>
    
</div>

@endsection