@extends('layouts.app')

@section('content')
<div class="container " style="margin: 0px auto;",>
  <div style="text-align:center; " >
     <h3>REGISTRO DE PAGOS</h3>
        <form class="form-inline row" style="margin: 40px 40px;" style="text-align:center;" >
          <input  name="matricula" class="form-control mr-sm-2" style="width: 150px; height: 25px; margin: 10px" type="search" placeholder="Matricula" aria-label="Search">

          <div class="col-md-2">
            <button class="btn btn-success" type="submit" style="background-color: #009624" >buscar</button>

            </div>
      </form>
  </div>
<hr>
<form method="post" action="/pago" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            @foreach($Alumnos as $p)
<FONT FACE="century gothic" SIZE=4 COLOR="#056daa"  >
<div class="row row-list text-center">
    <div class="col-md-8 " style="text-align: justify">
    <h4 class="country"  style="margin: 10px 0px;" > <b> Alumno: {{$p->nombre}} {{$p->primer_apellido}} {{$p->segundo_apellido}}  ({{$p->id}})</b></h4>
           </div>

           <input style="width : 200px;"  type="hidden" name="Id" id="Id"class="form-control" value="{{$p->id}}"required>
        
</div>
</hr>
<div class="table-responsive-center">
        <table  id="datatables-example" class="table table-hover" style="background-color: 	#FFFACD">
        <thead>
            <tr style="background-color: #45b8e6">
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
           </th>
            </tr>
</thead>
</tr>
<tr style="background-color: #fff9c4">
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
<div class="form-group text-center">
                <label class="text-center" for="exampleInputUsername1 ">Nombre del Pago</label>
                <input type="text" id="name"name="nombr"  class="form-control text-center" required>
                @if ($errors->has('tipo'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('tipo') }}</span>
                </div>
                @endif
            </div>
<hr>
<FONT FACE="century gothic" SIZE=4 COLOR="#056daa" style="text-align:center"  >
<div class="form-group">  
<label for="conceptos">Conceptos</label>
  <select  class="selectpicker form-control"
  title="Seleccionar Conceptos a pagar" multiple required>
    @foreach($Conceptos as $c)
    <option value="{{$c->monto}} " >{{$c->nombre}} $ {{$c->monto}}</option>
    @endforeach
   
  </select>
  <div class="invalid-feedback">
    Please select a valid state.
</div>

<div class="form-group text-center">

                <label style="width : 100px; display: flex; align-items: center;  justify-content: center;"  for="total">Total Pago</label>
                <input style="width : 200px;"  type="number" name="resultado" id="result"class="form-control" required>
                @if ($errors->has('fecha'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('result') }}</span>
                </div>
                @endif
            </div>
<div>

<div class="form-group">  
<label for="formapago">Seleccionar Forma Pago</label>
  <select  class="form-control"name="Tipo" required>
    @foreach($Forma as $f)
    <option>{{$f->tipo}}</option>
    @endforeach
   
  </select>
  <div class="invalid-feedback">
    Please select a valid state.
  </div>

</FONT>
<FONT FACE="century gothic" SIZE=4 COLOR="#056daa" style="text-align:center"  >

  </FONT>
<hr>
<div class="form-group">
                <label for="exampleInputUsername1">Fecha de Pago</label>
                <input type="date" name="fech" class="form-control" required>
                @if ($errors->has('fecha'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('fecha') }}</span>
                </div>
                @endif
            </div>
<div>
<form class="container" style="margin: 10px auto;"; style="text-align:center"; >

        <div class="row justify-content-around";>
        <button class="btn btn-success" type="submit" style="background-color: 	#a30000">Cancelar</button>
<form   action="../../form-result.php" method="post" enctype="multipart/form-data" target="_blank"  style="background-color:#ffc400">

  <p>
    Enviar Comprobante:
    <input  type="file" name="foto_comprobante"archivo>
</form>
  </p>
</form>
        <button class="btn btn-success" type="submit" style="background-color: 	#009624" >Guardar</button>
        </div>
    </form>
      </form>
</hr>
</div>
<script src="{{ asset('js/script.js') }}"></script>
@endforeach
@endsection



