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
            <li class="breadcrumb-item"><a href="#">Lista de cargas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar carga</li>
        </ol>
    </nav>

<div style="text-align:center; " >


</div>

<hr>
</hr>
<div class="row justify-content-center";>
    <div class="card">
        <div class="card-body">
            <h2 class="h5 mb-4">EDITAR CARGA ACADEMICA<hr></h2>
        <h2 class="card-title text-center"></h2>
        <form method="post" action="/cargas/{{$cargas->id}}" class="form-horizontal" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Grupo</label>
                    <select name="grupo" class="form-select mb-0">
                        <option selected=>Seleccione</option>
                        @foreach ($grupos as $g)
                            <option value="{{$g->id}}" @if($g->id==$cargas->grupos->id) selected @endif>{{$g->letra}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('grupos'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('grupos') }}</span>
                </div>
                @endif

                <div class="form-group">
                    <label for="exampleInputUsername1">Grado</label>
                        <select name="grado" class="form-select mb-0">
                            <option selected=>Seleccione</option>
                            @foreach ($grados as $grado)
                                <option value="{{$grado->id}}" @if($grado->id==$cargas->grados->id) selected @endif>{{$grado->numero}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('grado'))
                        <div class="alert alert-danger">
                            <span class="text-danger">{{ $errors->first('fecha_grado') }}</span>
                        </div>
                        @endif
                    </div>





            <div class="form-group">
            <label for="exampleInputUsername1">Nivel</label>
                <select name="nivel" class="form-select mb-0">
                    <option selected=>Seleccione</option>
                    @foreach ($niveles as $n)
                        <option value="{{$n->id}}" @if($n->id==$cargas->niveles->id) selected @endif>{{$n->nombre}}</option>
                    @endforeach
                </select>
                @if ($errors->has('nivel'))
                <div class="alert alert-danger">
                    <span class="text-danger">{{ $errors->first('nivel') }}</span>
                </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputUsername1">Periodo</label>
                    <input type="text" name="periodo" class="form-control" value="{{$cargas->periodo}}" required>

                    @if ($errors->has('periodo'))
                    <div class="alert alert-danger">
                        <span class="text-danger">{{ $errors->first('periodo') }}</span>
                    </div>
                    @endif
                </div>




                    <div class="form-group">
                        <label for="exampleInputUsername1">Asignatura</label>
                            <select name="asignaturas[]" id="asignaturas"  class="selectpicker  form-control"
                                title="Seleccionar asignaturas" multiple required>


                                @foreach ($asignaturas as $a)
                                    @php
                                        $selected = false;
                                    @endphp
                                    @foreach($cargas->asignaturas as $as)
                                        @if($as->id==$a->id)
                                            <option value="{{$a->id}}"  selected >{{$a->nombre}}</option>
                                            @php
                                                $selected = true;
                                            @endphp
                                        @endif
                                    @endforeach
                                    @if(!$selected)
                                        <option value="{{$a->id}}" >{{$a->nombre}}</option>
                                    @endif
                                @endforeach
                        </select>
                            @if ($errors->has('asignatura'))
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ $errors->first('asignaturas') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">Bimestre</label>
                                <input type="text" name="bimestre" class="form-control" value="{{$cargas->bimestre}}" required>

                                @if ($errors->has('bimestre'))
                                <div class="alert alert-danger">
                                    <span class="text-danger">{{ $errors->first('bimestre') }}</span>
                                </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="exampleInputUsername1">Alumnos</label>
                                <select name="alumnos[]" id="alumnos"  class="selectpicker  form-control"
                                        title="Seleccionar asignaturas" multiple required>
                                    @foreach ($alumnos as $a)
                                        @php
                                            $selected = false;
                                        @endphp
                                        @foreach($cargas->alumnos as $al)
                                            @if($al->id==$a->id)
                                                <option value="{{$a->id}}"  selected >{{$a->nombre}}</option>
                                                @php
                                                    $selected = true;
                                                @endphp
                                            @endif
                                        @endforeach
                                        @if(!$selected)
                                            <option value="{{$a->id}}" >{{$a->nombre}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                    @if ($errors->has('alumnos'))
                                    <div class="alert alert-danger">
                                        <span class="text-danger">{{ $errors->first('alumnos') }}</span>
                                    </div>
                                    @endif
                                </div>


                                <div class="form-group float-right mt-3" style="float: right">
                                    <button type="submit" class="btn btn-secondary mr-2 mb-3">Guardar</button>
                                    <a href="/cargas/17/edit"  class="btn btn-primary btn-fw mb-3">Cancelar</a>
                                    <a href="/cargas"  class="btn btn-primary btn-fw mb-3">Regresar</a>
                                </div>

        </form>
        </div>
    </div>
</div>

</hr>
</table>
</div>

@endsection

</div>

