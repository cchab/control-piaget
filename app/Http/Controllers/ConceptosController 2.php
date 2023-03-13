<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conceptos;
use App\Models\FormaPago;
class ConceptosController extends Controller
{
    public function index()
    {
      $Conceptos = Conceptos::all();
       return view('conceptos.index',['Conceptos'=> $Conceptos]);
    }
    public function formaPago()
    {
      $forma= FormaPago::all();
       return view('conceptos.pago',['Forma'=> $forma]);
    }
    
    public function create()
    {
       return view('conceptos.add');
    }
    public function edit($id)
    {
      $conceptos= conceptos::find($id);
        return view('conceptos.edit', ['concept'=>$conceptos]);
    }
    public function store(Request $r)
    {
      $inputs = $r->all();       $concept = new Conceptos(['nombre'=> $inputs['name'],
       'monto'=> $inputs['cantidad'],
       'fecha'=> $inputs['fech'],
       'importetotal'=> $inputs['fech']
   ]);
   $concept->save();
   return redirect('/concepts');
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
        $concepts = conceptos::find($id);
            $concepts->delete();
        return redirect('/concepts');
    }
}
