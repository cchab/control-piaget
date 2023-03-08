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
                    <label class="col-sm-6 col-form-label">Grupo</label>
                    <div class="col-sm-12">
                      <input type="text" name="grupo" class="form-control" value="{{ $horario->grupo}}" required/>
                    </div>
                </div>

                <div class="col-md-4">
                  <label class="col-sm-6 col-form-label">Grado</label>
                  <div class="col-sm-12">
                    <input type="number" name="grado" class="form-control" value="{{ $horario->grado}}" required/>
                  </div>
              </div>

              <div class="col-md-4">
                <label class="col-sm-6 col-form-label">Aula</label>
                <div class="col-sm-12">
                  <input type="text" name="aula" class="form-control" value="{{ $horario->aula}}" required/>
                </div>
            </div>
        
            <div class="col-md-4">
              <label class="col-sm-6 col-form-label">Dia</label>
              <div class="col-sm-12">
                <input type="date" name="dia" class="form-control" value="{{ $horario->dia}}" required/>
              </div>
          </div>

          <div class="col-md-4">
            <label class="col-sm-6 col-form-label">Hora inicio</label>
            <div class="col-sm-12">
              <input type="time" name="hora" class="form-control" value="{{ $horario->hora}}" required/>
            </div>
        </div>

        <div class="col-md-4">
          <label class="col-sm-6 col-form-label">Hora fin</label>
          <div class="col-sm-12">
            <input type="time" name="hora_fin" class="form-control" value="{{ $horario->hora_fin}}" required/>
          </div>
      </div>


      <div class="col-md-4">
        <label class="col-sm-6 col-form-label">Asignatura</label>
        <div class="col-sm-12">
          <input type="text" name="asignatura" class="form-control" value="{{ $horario->asignatura}}" required/>
        </div>
      </div>

      <div class="col-md-4">
        <label class="col-sm-6 col-form-label">Docente</label>
        <div class="col-sm-12">
        <input type="text" name="docente" class="form-control" value="{{ $horario->profesor}}" required/>
        </div>
      </div>

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
