<?php
namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cursos;
use App\Models\Profesores;
use App\Models\Pagos;




class ProfesoresController extends Controller
{
    
    public function index()
    {
       
        $Profesores = Profesores::all();
        return view('profes.index', ['Profesores'=> $Profesores]);

    }


    public function create()
    {
        return view('profes.add');

    }

    
    public function store(Request $request)
    {

  

        if ($request->hasFile('foto_profesor')) {
            $file = $request->file('foto_profesor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosProfesor/'),$nombrearchivo); 

            $data = new Profesores([
                'name'=>$request->get('name'),
                'nombre'=>$request->get('nombre'),
                'fecha_nacimiento'=>$request->get('fecha_nacimiento'),
                'edad'=>$request->get('edad'),
                'genero'=>$request->get('genero'),
                'email'=>$request->get('email'),
                'telefono'=>$request->get('telefono'),
                'localidad'=>$request->get('localidad'),
                'domicilio'=>$request->get('domicilio'),
         
                 

            ]);
            $data->save(); 
        }else{
            $data = new Profesores([
                'name'=>$request->get('name'),
                'nombre'=>$request->get('nombre'),
                'fecha_nacimiento'=>$request->get('fecha_nacimiento'),
                'edad'=>$request->get('edad'),
                'genero'=>$request->get('genero'),
                'email'=>$request->get('email'),
                'telefono'=>$request->get('telefono'),
                'localidad'=>$request->get('localidad'),
                'domicilio'=>$request->get('domicilio'),
            
              
            ]);
            $data->save(); 
        } 

     /*  return view('profes.store'); */
        return redirect('/profes')->with('mensaje','Docente Registrado Correctamente.'); 

    }

    
   
    
    public function edit($id){

     $Profesores= Profesores::find($id);

        return view('profes.edit',['profesores'=>$Profesores]);
    }


    public function update(Request $request, $id)
    {
  
        if ($request->hasFile('foto_profesor')) {
            $file = $request->file('foto_profesor');  
            $nombrearchivo = time()."_".$file->getClientOriginalName();  
            $file->move(public_path('/fotosProfesor/'),$nombrearchivo); 

            $profesor = Profesores::findOrFail($id);
            $profesor->name                  = $request->name;
            $profesor->nombre                = $request->nombre;
            $profesor->fecha_nacimiento      = $request->fecha_nacimiento;
            $profesor->edad                  = $request->edad;
            $profesor->genero                = $request->genero;
            $profesor->email                 = $request->email;
            $profesor->telefono              = $request->telefono;
            $profesor->localidad             = $request->localidad;
            $profesor->domicilio             = $request->domicilio;
          
       
            $profesor->save(); 
        }else{
            $profesor = Profesores::findOrFail($id);
            $profesor->name                      = $request->name;
            $profesor->nombre                    = $request->nombre;
            $profesor->fecha_nacimiento          = $request->fecha_nacimiento;
            $profesor->edad                      = $request->edad;
            $profesor->genero                    = $request->genero;
            $profesor->email                     = $request->email;
            $profesor->telefono                  = $request->telefono;
            $profesor->localidad                 = $request->localidad;
            $profesor->domicilio                 = $request->domicilio;
            
            $profesor->save(); 
        } 

            $updateProfesor ="Docente actualizado Correctamente";
        return redirect('profes/')->with(['updateProfesor' => $updateProfesor]);
    }



    public function destroy($id){
        $profesor = Profesores::findOrFail($id);
        $profesor->delete();
        return redirect('/profes')->with('mensaje', 'El docente fue borrado correctamente.');
    }


    
    


}
