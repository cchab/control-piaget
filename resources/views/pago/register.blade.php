@extends('layouts.app')
<style>
    .bootstrap-select .btn {
        border: 0.0625rem solid #D1D5DB;
    }

</style>
@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Seccion de pagos</a></li>
            <li class="breadcrumb-item"><a href="#">Historial de pagos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registro</li>
        </ol>
    </nav>

<div class="card">
  <div class="card-body">
     <h2>REGISTRO DE PAGOS<hr> </h2>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <form class="form-inline row">
            <div class="row">
                <div class="col">
                    <input  name="matricula" class="form-control mr-sm-2" type="search" placeholder="Matricula" aria-label="Search">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success" type="submit" style="background-color: #009624" >buscar</button>
                </div>
            </div>
        </form>
      </div>


      <form method="post" action="/pago" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @if(isset($p))
              <input style="width : 200px;"  type="hidden" name="Id" id="Id"class="form-control" value="{{$p->id}}"required>
              <h5>Alumno: {{$p->nombre}} {{$p->primer_apellido}} {{$p->segundo_apellido}}  ({{$p->id}})</h5>
              <div class="form-group">
                <div class="display table-responsive">
                  <table  id="datatables-example" class="table table-hover">
                      <thead>
                          <th>Agosto</th>
                          <th>Septiembre</th>
                          <th>Octubre</th>
                          <th>Noviembre</th>
                          <th>Diciembre</th>
                          <th>Enero</th>
                          <th>Febrero</th>
                          <th>Marzo</th>
                          <th>Abril</th>
                          <th>Mayo</th>
                          <th>Junio</th>
                          <th>julio</th>
                      </thead>
                      <tr>
                          <td><input class="mi_checkbox" type="checkbox" value="Agosto"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Septiembre"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Octubre"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Noviembre"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Diciembre"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Enero"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Febrero"></td>
                          <td><input class="mi_checkbox"type="checkbox" value="Marzo"></td>
                          <td><input class="mi_checkbox"type="checkbox" value="Abril"></td>
                          <td><input class="mi_checkbox"type="checkbox" value="Mayo"></td>
                          <td><input class="mi_checkbox"type="checkbox" value="Junio"></td>
                          <td><input class="mi_checkbox" type="checkbox" value="Julio"></td>
                      </tr>
                  </table>
              </div>
              </div>
              <div class="form-group col-6">
                  <label class="text-center" for="exampleInputUsername1 ">Nombre del Pago</label>
                  <input type="text" id="name"name="nombr" readonly  class="form-control text-center" required>
                  @if ($errors->has('tipo'))
                      <div class="alert alert-danger">
                          <span class="text-danger">{{ $errors->first('tipo') }}</span>
                      </div>
                  @endif
              </div>
              <div class="form-group col-6">
                  <label for="conceptos">Conceptos</label>
                  <select name="conceptos[]" class="selectpicker form-control"
                           title="Seleccionar Conceptos a pagar" multiple required>
                      @foreach($Conceptos as $c)
                          <option value="{{$c->id}} " data-monto="{{$c->monto}}" >{{$c->nombre}} $ {{$c->monto}}</option>
                      @endforeach
                  </select>
                  <div class="invalid-feedback">
                      Please select a valid state.
                  </div>
              </div>
              <div class="form-group col-6">
                  <label for="total">Total Pago</label>
                  <input type="number" name="resultado" id="result"class="form-control" required>
                  @if ($errors->has('fecha'))
                      <div class="alert alert-danger">
                          <span class="text-danger">{{ $errors->first('result') }}</span>
                      </div>
                  @endif
              </div>
              <div class="form-group col-6">
                  <label for="formapago">Seleccionar Forma Pago</label>
                  <select  class="form-control"name="Tipo" required>
                      @foreach($Forma as $f)
                          <option value="{{$f->id}}" >{{$f->tipo}}</option>
                      @endforeach
                  </select>
                  <div class="invalid-feedback">
                      Please select a valid state.
                  </div>
              </div>
              <div class="form-group col-6">
                  <label for="exampleInputUsername1">Fecha de Pago</label>
                  <input type="date" name="fech" class="form-control" required>
                  @if ($errors->has('fecha'))
                      <div class="alert alert-danger">

                          <span class="text-danger">{{ $errors->first('fecha') }}</span>
                      </div>
                  @endif
              </div>
              <div class="form-group col-6">
                  <label for="comprobante">Comprobante de pago</label>
                  <input class="form-control"  type="file" name="foto_comprobante"archivo>

              </div>
              <div class="form-group float-right mt-3" style= "float: right">
                  <button class="btn btn-primary btn-fw mb-3">Cancelar</button>
                  <button type="submit" class="btn btn-secondary mr-2 mb-3" >Guardar</button>
              </div>
          @endif
      </form>
  </div>
</div>


<script src="{{ asset('js/script.js') }}" defer></script>

@endsection



