<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormaPago;

class FormaPagoController extends Controller
{
    
    public function index()
    {
       
    }

    public function show()
    {

    }

    public function create()
    {
      //$conceptos= conceptos::all();
       return view('pago.addPago');
    }
    public function edit($id)
    {
      $formapago= FormaPago::find($id);
        return view('conceptos.editpago', ['forma'=>$formapago]);
    }
    public function store(Request $r)
    {
      $inputs = $r->all();
       $formapago = new FormaPago(['tipo'=> $inputs['Tipo'],
       'nombre'=> $inputs['Nombre'],
       'valor'=> $inputs['Valor']
   ]);
   $formapago->save();
   return redirect('/concepts/pago');
    }
    public function update($id, Request $r)
    {
        $inputs = $r->all();
        $formapago =FormaPago::find($id);
        $formapago->tipo = $inputs['Tipo'];
        $formapago->nombre = $inputs['Nombre'];
        $formapago->valor = $inputs['Valor'];
        $formapago->save();

        return redirect('/concepts/pago');
    }
    public function destroy($id)
    {
        $forma = FormaPago::find($id);
            $forma->delete();
        return redirect('/concepts/pago');
    }
}
