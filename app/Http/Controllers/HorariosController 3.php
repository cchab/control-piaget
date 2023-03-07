<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    
    public function index()
    {
       
        $Horarios = Horarios::all();
        return view('horarios.index', ['Horarios'=> $Horarios]);

    }


    public function create()
    {
        return view('horarios.add');

    }

    public function store(Request $request)
    {

  

        if ($request->hasFile('foto_profesor')) {
            $file = $request->file('foto_profesor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosProfesor/'),$nombrearchivo); 

            $data = new Horarios([
              
                'nombre'=>$request->get('nombre'),
                'aula'=>$request->get('aula'),
                'dia'=>$request->get('dia'),
                'hora'=>$request->get('hora'),
                'asignatura'=>$request->get('asignatura'),
                'profesor'=>$request->get('profesor'),
                
                 

            ]);
            $data->save(); 
        }else{
            $data = new Horarios([
                
                'nombre'=>$request->get('nombre'),
                'aula'=>$request->get('aula'),
                'dia'=>$request->get('dia'),
                'hora'=>$request->get('hora'),
                'asignatura'=>$request->get('asignatura'),
                'profesor'=>$request->get('profesor'),
              
            
              
            ]);
            $data->save(); 
        } 

     /*  return view('profes.store'); */
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
