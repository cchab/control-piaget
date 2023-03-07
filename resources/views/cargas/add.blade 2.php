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
            <li class="breadcrumb-item active" aria-current="page">Registrar nueva carga</li>
        </ol>
    </nav>




<div class="row justify-content-center">

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="h5 mb-4">REGISTRAR CARGA ACADEMICA<hr></h2>
        <form class="forms-sample" method="post" action="/cargas" enctype="multipart/form-data">
            @csrf

            <div class="row"> <!--ROW INICIO -->
              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Grupo</label>
                <select name="grupo" class="form-control form-control-sm">
                    <option selected=>Seleccione</option>
                        <option>A</option>
                        <option>B</option>
                </select>
            </div>


            <div class="col-md-4">
              <label class="col-sm-12 col-form-label">Grado</label>
              <select name="grado" class="form-control form-control-sm">
                  <option selected=>Seleccione</option>
                      <option>1</option>
                      <option>2</option>
              </select>
          </div>



          <div class="col-md-4">
            <label class="col-sm-12 col-form-label">Nivel</label>
            <select name="nivel" class="form-control form-control-sm">
                <option selected=>Seleccione</option>
                    <option>Primaria</option>
                    <option>Preescolar</option>
            </select>
        </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Periodo</label>
                    <select name="periodo" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>20222023</option>
                            <option>20232024</option>
                    </select>
                </div>



                <div class="col-md-4">
                  <label class="col-sm-12 col-form-label">Docente</label>
                  <select name="docente" class="form-control form-control-sm">
                      <option selected=>Seleccione</option>
                      @foreach ($Profesores as $profesores)
                      <option>{{$profesores->nombre}}</option>
                      @endforeach
                  </select>
              </div>



              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Asignatura</label>
                <select name="asignatura" class="form-control form-control-sm">
                    <option selected=>Seleccione</option>
                        <option>Español</option>
                        <option>FISICA</option>
                        <option>Matetmaticas</option>
                </select>
            </div>


            <div class="col-md-4">
              <label class="col-sm-12 col-form-label">Bimestre</label>
              <select name="bimestre" class="form-control form-control-sm">
                  <option selected=>Seleccione</option>
                      <option>1</option>
                      <option>2</option>
              </select>
          </div>


                        <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Alumnos</label>
                    <select name="alumnos" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>

                            @foreach ($Alumnos as $alumno)
                            <option>{{$alumno->nombre}}</option>
                            @endforeach
                    </select>
                </div>



            </div> <!--ROW FIN-->


            <div class="form-group float-right mt-3" style="float: right">
                <button type="submit" class="btn btn-secondary mr-2 mb-3">Registrar</button>
                <a href="/cargas/create"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
            </div>
            
        </form>
        </div>
    </div>
</div>

</div>

@endsection



<!--
<p>
<div style="text-align: center; ">
    <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar periodo</FONT>
    <form action="" method="post">
    <select name="cargas" id="cargas" onchange="this.form.submit()">
        <option value="">Seleccionar...</option>
        <option value="">20202021</option>
        <option value="">20212022</option>
        <option value="">20222023</option>


    </select>
    </form>
</p>


<p>
    <div style="text-align: center; ">
        <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar nivel</FONT>
    <form action="" method="post">
    <select name="cargas" id="cargas" onchange="this.form.submit()">
        <option value="">Seleccionar...</option>
        <option value="">Nivel preescolar</option>
        <option value="">Nivel primaria</option>


    </select>
    </form>

</p>


<p>
    <div style="text-align: center; ">
        <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar grado</FONT>
        <form action="" method="post">
        <select name="cargas" id="cargas" onchange="this.form.submit()">
            <option value="">Seleccionar...</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>

        </select>
        </form>


</p>

        <div style="text-align: center; ">
        <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar grupo</FONT>
            <form action="" method="post">
            <select name="cargas" id="cargas" onchange="this.form.submit()">
                <option value="">Seleccionar...</option>
                <option value="">A</option>
                <option value="">B</option>
                <option value="">C</option>
                <option value="">D</option>
                <option value="">E</option>

            </select>
            </form>


     <p>
            <div style="text-align: center; ">
            <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar profesor</FONT>
                <form action="" method="post">
                <select name="cargas" id="cargas" onchange="this.form.submit()">
                    <option value="">Seleccionar...</option>
                    <option value="">Carlos Omar</option>
                    <option value="">Carlos Jimenez</option>
                    <option value="">Felipe Salgado</option>


                </select>
                </form>

    </p>


    <p>
                <div style="text-align: center; ">
            <FONT FACE="impact" SIZE=4 COLOR="#056daa">Seleccionar asignatura</FONT>
                    <form action="" method="post">
                    <select name="cargas" id="cargas" onchange="this.form.submit()">
                        <option value="">Seleccionar...</option>
                        <option value="">Matetmaticas I</option>
                        <option value="">Español I</option>
                        <option value="">Etica I</option>
                        <option value="">Historia I</option>
                        <option value="">Fisica I</option>

                    </select>
                    </form>
    </p>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mr-2 mb-3" style="background-color: #0059ff">Guardar</button>

                    </div>
                -->

