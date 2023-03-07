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
          <li class="breadcrumb-item active" aria-current="page">Registrar docentes</li>
      </ol>
  </nav>




<div class="row justify-content-center">

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
       <h2 class="h5 mb-4">REGISTRAR DOCENTE<hr></h2>
        <form class="forms-sample" method="post" action="/profes" enctype="multipart/form-data">
            @csrf

            <div class="row"> <!--ROW INICIO -->
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre completo</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" class="form-control" required/>
                    </div>
                </div>



                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Fecha de nacimiento</label>
                    <div class="col-sm-12">
                      <input type="date" name="fecha_nacimiento" class="form-control" />
                    </div>
                </div>



                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Edad</label>
                    <div class="col-sm-12">
                      <input type="number" name="edad" class="form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Genero</label>
                    <select name="genero" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Nivel academico</label>
                    <select name="nivelacademico" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option value="1">Licenciatura</option>
                            <option value="2">Maestría</option>
                            <option value="3">Doctorado</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Correo electronico</label>
                    <div class="col-sm-12">
                      <input type="text" name="email" class="form-control"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Telefono</label>
                    <div class="col-sm-12">
                      <input type="tel" name="telefono" class="form-control" />
                    </div>
                </div>


                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Localidad</label>
                    <div class="col-sm-12">
                      <input type="text" name="localidad" class="form-control"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Domicilio</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio" class="form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Tipo</label>
                    <select name="tipo_profesor" class="form-control form-control-sm">
                        <option selected=>Seleccione</option>
                            <option value="1">Asignaturas</option>
                            <option value="2">Tiempo completo</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="comprobante">Foto del docente</label>
                    <input class="form-control"  type="file" name="foto_profesor"archivo>

                </div>




            </div> <!--ROW FIN-->


            <div class="form-group float-right mt-3" style="float: right">
                <button type="submit" class="btn btn-secondary mr-2 mb-3">Registrar</button>
                <a href="/profes/create"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
            </div>




        </form>
        </div>
    </div>
</div>

</div>

@endsection
