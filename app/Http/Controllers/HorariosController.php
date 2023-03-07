<?php

namespace App\Http\Controllers;

use App\Models\Asignaturas;
use App\Models\Grados;
use App\Models\Grupos;
use App\Models\Horarios;
use App\Models\Profesores;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    
    public function index()
    {
       
        $Horarios = Horarios::with('grupos')->with('grados')->with('asignaturas')->with('profesores')->get();

        return view('horarios.index', ['Horarios'=> $Horarios,]);

    }



    public function create()
    {


        $Profesores = Profesores::all();
        $asignaturas = Asignaturas::all();
        $grupos = Grupos::all();
        $grados = Grados::all();

        return view('horarios.add', [
            
        'Profesores'=>$Profesores,
        'Asignaturas'=>$asignaturas,
        'Grupos'=>$grupos,
        'Grados'=>$grados
    
    ]);

    }

    public function store(Request $request)
    {

        $profesor = $request->get('profesores');

        foreach ($profesor as $profesores){


                $data = new Horarios([
              
                'nombre'=>$request->get('nombre'),
                'grupo_id'=>$request->get('grupo'),
                'grado_id'=>$request->get('grado'),
                'aula'=>$request->get('aula'),
                'dia'=>$request->get('dia'),
                'hora'=>$request->get('hora'),
                'asignatura_id'=>$request->get('asignatura'),
                'docente_id'=>$profesores,
                
            ]);
            $data->save(); 
  
        }

       
        return redirect('/horarios')->with('mensaje','Horario Registrado Correctamente.'); 

    }

    
   
    
    public function edit($id){

     $Horarios= Horarios::find($id);

        return view('horarios.edit',['horarios'=>$Horarios]);
    }


    public function update(Request $request, $id)
    {
  
        if ($request->hasFile('foto_profesor')) {
            $file = $request->file('foto_profesor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosProfesor/'),$nombrearchivo); 

            $horario = Horarios::findOrFail($id);
            
            $horario->nombre                = $request->nombre;
            $horario->aula                  = $request->aula;
            $horario->dia                  = $request->dia;
            $horario->hora                  = $request->hora;          
            $horario->asignatura                  = $request->asignatura;
            $horario->profesor                  = $request->profesor;
       
            $horario->save(); 
        }else{
            $horario = Horarios::findOrFail($id);
            
            $horario->nombre                    = $request->nombre;
            $horario->aula                      = $request->aula;
            $horario->dia                  = $request->dia;
            $horario->hora                  = $request->hora;          
            $horario->asignatura                  = $request->asignatura;
            $horario->profesor                  = $request->profesor;
           
            $horario->save(); 
        } 

            $updateHorario ="Horario actualizado Correctamente";
        return redirect('horarios/')->with(['updateHorario' => $updateHorario]);
    }



    public function destroy($id){
        $horario = Horarios::findOrFail($id);
        $horario->delete();
        return redirect('/horarios')->with('mensaje', 'El horario fue borrado correctamente.');
    }


    
    
}
