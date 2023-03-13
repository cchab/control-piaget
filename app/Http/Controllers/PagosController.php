<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;
use App\Models\Conceptos;
use App\Models\FormaPago;

use App\Models\Pago;
use App\DataTables\UsersPagosDataTable;


class PagosController extends Controller
{
    public function index(Request $request)
    {


            $id = $request->get('Matricula');
            $nombre = $request->get('Nombre');
            $grado = $request->get('Grado');
            $grupo = $request->get('Grupo');
           
            $alumnos = null;
            if(isset($nombre)){
                $alumnos= Alumnos::where('nombre','LIKE',"%{$nombre}%")->get()->pluck('id');
                if($alumnos->toArray() ==null){
                  
                $pago= Pago::where('alumno_id',-1)->get();
                }else{
                $pago= Pago::where('alumno_id',$alumnos)->get();
                }
                
            }else if(isset($id))
            {
                $pago= Pago::where('alumno_id',$id)->get();
           
            }else{
                $pago=Pago::all();
            }
            //dd($pago);
            return view('pago.index',['pagos'=>$pago]);

            /*$id = $request->get('Matricula');
            $nombre = $request->get('Nombre');
            $grado = $request->get('Grado');
            $pagos=Pago::all();
            if(isset($id))
                $alumnos= Alumnos::nombres($nombre)->ids($id)->grados($grado)->paginate(2);
        $pago= Pago::where('alumno_id',$id)->get();
        */
    }
    public function create(){

    }
    public function store(Request $r)
    {
        $conceptos = Conceptos::whereIn('id',$r->get('conceptos'))->get();
        $inputs = $r->all();
        if ($r->hasFile('foto_comprobante')) {
            $file = $r->file('foto_comprobante');
            $nombrearchivo = time()."_".$file->getClientOriginalName();
            $file->move(public_path('/fotosPagos/'),$nombrearchivo);


       $pago = new Pago(['nombre'=> $inputs['nombr'],

       'importetotal'=> $inputs['resultado'],
       'formaPago_id'=> $inputs['Tipo'],
       'alumno_id'=> $inputs['Id'],
       'fecha'=> $inputs['fech'],
       'photo_pago'=> $nombrearchivo
   ]);
   $pago->save();
   $pago->concepto()->attach($conceptos);
 
    $pago->save();
}else{
    $pago = new Pago(['nombre'=> $inputs['nombr'],

    'importetotal'=> $inputs['resultado'],
    'formaPago_id'=> $inputs['Tipo'],
    'alumno_id'=> $inputs['Id'],
    'fecha'=> $inputs['fech'],
    'photo_pago'=> ''
]);
   $pago->save();

   $pago->concepto()->attach($conceptos);
 
    $pago->save();
}
   return redirect('/pago');
    }
    public function update($id, Request $r)
    {
        $inputs = $r->all();
        $concept = conceptos::find($id);
        $concept->nombre = $inputs['name'];
        $concept->monto = $inputs['cantidad'];
        $concept->fecha = $inputs['fech'];
        $concept->save();

        return redirect('/concepts');
    }

    public function destroy($id)
    {
        $pagos = Pagos::find($id);
            $pagos->delete();
        return redirect('/concepts');
    }

    public function show(Request $request, $id){
        $p = Pago::with(['concepto','alumnos','formaPago'])->where('id',$id)->first();
        //dd($p);
        return view('pago.view')->with('p', $p);
    }
    public function register(){

        return view ('pagos.search');
    }
    public function search(Request $request)
    {
        
        $Conceptos = Conceptos::all();
        $formapago = FormaPago::all();
        $id = $request->get('matricula');
        $Alumnos= Alumnos::find($id);
           return view('pago.register')->with('p', $Alumnos)->with('Conceptos',$Conceptos)->with('Forma',$formapago);
    }
    public function conceptos (){

        return view ('pago.conceptos');
    }
    public function configPago (){
        return view ('pago.config');
    }
}
