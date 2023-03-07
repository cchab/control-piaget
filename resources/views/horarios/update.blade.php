@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">ACTUALIZAR HORARIO <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('horarios.update', $horario->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
            <div class="row">

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre</label>
                    <div class="col-sm-12">
                      <input type="text" name="name" class="form-control" value="{{ $horario->nombre}}" required/>
                    </div>
                </div>

        <!--        <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Aula</label>
                    <div class="col-sm-12">
                      <input type="text" name="fecha_naicmiento" class="form-control" value="{{ $horario->aula }}" />
                    </div>
                </div>

                <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Edad</label>
                  <div class="col-sm-12">
                    <input type="number" name="edad" class="form-control" value="{{ $profesor->edad }}"/>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Genero</label>
                  <div class="col-sm-12">
                    <input type="text" name="genero" class="form-control"  value="{{ $profesor->genero }}"/>
                  </div>
              </div>
              <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Correo electronico</label>
                  <div class="col-sm-12">
                    <input type="text" name="email" class="form-control" value="{{ $profesor->email }}"/>
                  </div>
              </div>
              <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Telefono</label>
                  <div class="col-sm-12">
                    <input type="number" name="telefono" class="form-control"  value="{{ $profesor->telefono }}"/>
                  </div>
              </div>
          </div>

            <div class="row">
              <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Localidad</label>
                <div class="col-sm-12">
                  <input type="text" name="localidad" class="form-control" value="{{ $profesor->localidad }}"/>
                </div>
            </div>
                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Domicilio</label>
                    <div class="col-sm-12">
                      <input type="text" name="domicilio" class="form-control" value="{{ $profesor->domicilio }}"/>
                    </div>
                </div>  -->













                <!-- <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Teléfono</label>
                    <div class="col-sm-12">
                      <input type="number" name="phone_alumno" class="form-control" value="{{ $alumno->phone_alumno }}"/>
                    </div>
                </div>
            </div> 

            <div class="row">
              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Edad del Alumno</label>
                <div class="col-sm-12">
                  <input type="number" name="edad_alumno" class="form-control" value="{{ $alumno->edad_alumno }}"/>
                </div>
              </div> 
                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Dirección</label>
                    <div class="col-sm-12">
                      <input type="text" name="addres" class="form-control" value="{{ $alumno->addres }}"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-12 col-form-label">Asignar Curso</label>
                    <select name="curso_id" class="form-control form-control-sm">
                        @foreach ($cursos as $curso)

                            @if ($curso->id ==$CursoAsignadoBD)
                              <option value="{{ $curso->id }}" selected>{{ $curso->nombre_curso }}</option>
                            @else
                              <option value="{{ $curso->id }}">{{ $curso->nombre_curso }}</option>  
                            @endif
                       
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row  mb-5 mt-3">
              <div class="col-md-4">
                <label class="col-sm-12 col-form-label">Asignar Sede</label>
                <select name="profesor_id" class="form-control form-control-sm">
                    <option value="">Seleccione</option>
                    @foreach ($profesores as $profe)

                        @if ($profe->id == $ProfeAsignadoBD)
                          <option value="{{ $profe->id }}" selected> {{ $profe->nameFull }}</option>
                        @else
                          <option value="{{ $profe->id }}"> {{ $profe->nameFull }}</option>
                        @endif
                       
                    @endforeach
                </select>
              </div>
              <div class="col-md-2">
                  <label for="exampleInputUsername1" style="text-align: center;">Foto actual</label>
                  <br>
                  @if ($alumno->foto_estudiante !=NULL)
                      <img src="/fotosAlumnos/{{ $alumno->foto_estudiante }}" alt="foto profe" style="max-width: 100px; margin: 0 auto;">
                  @else
                      <img class="card-img-top" src="{{ asset('images/users.png') }}" alt="Foto-Profe" class="imgs" style="width:100px; margin: 0 auto;">
                  @endif
                  
              </div>
              <div class="col-md-2">
                  <label for="exampleInputUsername1">Cambiar Foto</label>
                  <input type="file" name="foto_estudiante" class="form-control">
              </div>
              <div class="col-md-4"> -->

              
            </div>
          </div>

            <div class="form-group text-center mt-5 mb-3">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Actualizar horario</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection
