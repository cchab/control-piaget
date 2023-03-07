
@extends('layouts.app')

@section('content')
<div class="py-4" style="margin: 20px auto" >
  <div style="text-align:center; " >
 
  <h2>Historial de pagos</h2>

    <form class="form-inline row">
        <input  name="Nombre" class="form-control mr-sm-2" style="width: 150px; height: 25px; margin: 10px" type="search" placeholder="nombre" aria-label="Search">

        <input  name="Matricula" class="form-control mr-sm-2" style="width: 150px; height: 25px; margin: 10px" type="search" placeholder="Matricula" aria-label="Search">
        <input  name="Grado" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Grado" aria-label="Search">
        <input  name="Grupo" class="form-control mr-sm-2" style="width: 100px; height: 25px; margin: 10px" type="search" placeholder="Grupo" aria-label="Search">

        <div class="col-md-2">

        <button class="btn btn-success" type="submit" style="background-color:#009624">Buscar</button>
        
        </div>
        <a href="/pagos/register" class="btn btn-secondary" style="background-color: 	#fbc02d; width: 100px; height: 40px; ">
            Registar 
        </a>
       </div>

    </form>
</div>
   
<hr>

    <div class="container">
        <div class="card">
            <div class="card-header">Lista de Pagos</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

