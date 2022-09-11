<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicamento;
class MedicamentoController extends Controller
{
    //
    public function create(){
        return view('farmacia.medicamentos');
    }

    public function store(Request $request){
        $medicamento = new Medicamento(); 
        $medicamento->codigomed = $request->codigomed;
        $medicamento->nombre = $request->nombre;
        $medicamento->descripcion = $request->descripcion;
        $medicamento->save();
        return redirect()->route('smed');

    }
    public function show(Medicamento $medicamento){

        return view('farmacia.show',compact($medicamento));

    }
    public function update(Request $request,$id){
        $medicamento = Medicamento::find($id); 
        $medicamento->codigomed = $request->codigomed;
        $medicamento->nombre = $request->nombre;
        $medicamento->descripcion = $request->descripcion;
        $medicamento->save();
        return redirect()->route('smed');

    }
    public function edit($id)
    {
        //
    }


    public function destroy($id){

       Medicamento::find($id)->delete(); 
    } 
}
