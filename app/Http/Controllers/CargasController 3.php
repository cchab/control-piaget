<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Cargas;
use App\Models\Alumnos;
use App\Models\Asignaturas;
use App\Models\Bimestres;
use App\Models\Grados;
use App\Models\Grupos;
use App\Models\Niveles;
use App\Models\Periodos;
use App\Models\Profesores;

class CargasController extends Controller
{



    public function index()
    {

        $Cargas = Cargas::with('periodos')
        ->with('asignaturas')->with('alumnos')->with('niveles')
        ->with('grupos')->with('grados')->with('bimestres')->get();

        //dd($Cargas);
       return view('cargas.index', ['Cargas'=> $Cargas]);


    }




    public function create()
    {

        $Alumnos= Alumnos::all();
        $periodos = Periodos::all();
        $niveles = Niveles::all();
        $grupos = Grupos::all();
        $grados = Grados::all();
        $asignaturas = Asignaturas::all();
        $bimestres = Bimestres::all();


       return view('cargas.add', [
        'Alumnos'=> $Alumnos,
        'Periodos'=>$periodos,
        'Niveles'=>$niveles,
        'Grupos'=>$grupos,
        'Grados'=>$grados,
        'Asignaturas'=>$asignaturas,
        'Bimestres'=>$bimestres

    ]);
    }



    public function edit($id){
        $Alumnos= Alumnos::all();
        $periodos = Periodos::all();
        $niveles = Niveles::all();
        $grupos = Grupos::all();
        $grados = Grados::all();
        $asignaturas = Asignaturas::all();
        $bimestres = Bimestres::all();
        $carga = Cargas::where('id', $id)->with('periodos')
            ->with('asignaturas')->with('alumnos')->with('niveles')
            ->with('grupos')->with('grados')->with('bimestres')->first();

           return view('cargas.edit',['cargas'=>$carga,
               'alumnos'=> $Alumnos,
               'periodos'=>$periodos,
               'niveles'=>$niveles,
               'grupos'=>$grupos,
               'grados'=>$grados,
               'asignaturas'=>$asignaturas,
               'bimestres'=>$bimestres]);
       }





    public function store(Request $request)
    {

        $alumnos = Alumnos::whereIn('id',$request->get('alumnos'))->get();
        $asignaturas = Asignaturas::whereIn('id',$request->get('asignaturas'))->get();



            $data = new Cargas([
                'grupo_id'=>$request->get('grupo'),
                'grado'=>$request->get('grado'),
                'nivel_id'=>$request->get('nivel'),
                'periodo'=>$request->get('periodo'),
                'bimestre'=>$request->get('bimestre'),
            ]);
            $data->save();
            $data->asignaturas()->attach($asignaturas);
            $data->alumnos()->attach($alumnos);



        return redirect('/cargas')->with('mensaje','Carga Registrada Correctamente.');

    }







    public function update(Request $request, $id)
    {

            $alumnos = Alumnos::whereIn('id',$request->get('alumnos'))->get();
            $asignaturas = Asignaturas::whereIn('id',$request->get('asignaturas'))->get();

            $carga = Cargas::findOrFail($id);

            $carga->grupo_id                = $request->grupo;
            $carga->grado                = $request->grado;
            $carga->nivel_id                  = $request->nivel;
            $carga->periodo                = $request->periodo;

            $carga->bimestre             = $request->bimestre;

            $carga->save();
            $carga->alumnos()->detach();
            $carga->asignaturas()->detach();
            $carga->asignaturas()->attach($asignaturas);
            $carga->alumnos()->attach($alumnos);





        $updateCarga ="Carga academica actualizada Correctamente";
        return redirect('cargas/')->with(['updateCarga' => $updateCarga]);
    }




    public function show(Request $request, $id){

        $carga = Cargas::where('id', $id)->with('periodos')
            ->with('asignaturas')->with('alumnos')->with('niveles')
            ->with('grupos')->with('grados')->with('bimestres')->first();
        //dd($carga);
        return view('cargas.view')->with('carga', $carga);


    }



    public function destroy($id){
        $carga = Cargas::findOrFail($id);
        $carga->delete();
        return redirect('/cargas')->with('mensaje', 'La carga academica fue borrado correctamente.');
    }



}
