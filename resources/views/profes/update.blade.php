@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">ACTUALIZAR DATOS DEL DOCENTE <hr></h2>
        <form class="forms-sample" method="post" action="{{ route('profes.update', $profesor->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
            <div class="row">

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Nombre completo</label>
                    <div class="col-sm-12">
                      <input type="text" name="name" class="form-control" value="{{ $profesor->n}}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="col-sm-6 col-form-label">Fecha de nacimiento</label>
                    <div class="col-sm-12">
                      <input type="time" name="fecha_naicmiento" class="form-control" value="{{ $profesor->fecha_nacimiento }}" />
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
                <label class="col-sm-6 col-form-label">Nivel academico</label>
                <div class="col-sm-12">
                  <input type="text" name="nivel" class="form-control" value="{{ $profesor->nivel }}"/>
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
                </div>


            <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Tipo</label>
                <div class="col-sm-12">
                  <input type="text" name="tipo" class="form-control" value="{{ $profesor->tipo}}"/>
                </div>
           </div>
          

              
            </div>
          </div>

            <div class="form-group text-center mt-5 mb-3">
                <button type="submit" class="btn btn-primary mr-2 mb-3">Actualizar datos del  docente</button>
                <a href="/"  class="btn btn-inverse-dark btn-fw mb-3">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

@endsection
