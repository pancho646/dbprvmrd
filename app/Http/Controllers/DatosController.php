<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
use App\Http\Requests\DatosRequest;
class DatosController extends Controller
{
    //
    public function create(){
        return view('consulta.agregar');
    }
    public function store(DatosRequest $request){
        $datos = new Datos();

        $datos->firstname = $request->firstname;
        $datos->secondname = $request->secondname;
        $datos->lastname1 = $request->lastname1;
        $datos->lastname2 = $request->lastname2;
        $datos->cedula = $request->cedula;
        $datos->historia = $request->historia;
        $datos->nacionalidad = $request->nacionalidad;
        $datos->municipio = $request->municipio;
        $datos->fechaNac = $request->fechaNac;
        $datos->ciudad = $request->ciudad;
        $datos->estado = $request->estado;
        $datos->parroquia = $request->parroquia;
        $datos->municipio = $request->municipio;
        $datos->genero = $request->genero;
        $datos->direccion = $request->direccion;
        $datos->telfHab = $request->telfHab;
        $datos->telfCel = $request->telfCel;
        $datos->email= $request->email;
        $datos->nivelIns = $request->nivelIns;
        $datos->profOf = $request->profOf;
        $datos->fechaIng=$request->fechaIng;
        $datos->anioDiag=$request->anioDiag;
        $datos->estatusAdm=$request->estatusAdm;
        $datos->servCargo=$request->servCargo;
        $datos->elisa1=$request->elisa1;
        $datos->elisa2=$request->elisa2;
        $datos->wb=$request->wb;

        $datos->save();
        return redirect()->route('sdatos');

    }
    public function show(){
        $pacientes=Datos::all();
        return view('consulta.show',compact('pacientes'));
    }
    public function update(DatosRequest $request,$id){
        $datos = Datos::find($id);

        $datos->firstname = $request->firstname;
        $datos->secondname = $request->secondname;
        $datos->lastname1 = $request->lastname1;
        $datos->lastname2 = $request->lastname2;
        $datos->cedula = $request->cedula;
        $datos->historia = $request->historia;
        $datos->nacionalidad = $request->nacionalidad;
        $datos->municipio = $request->municipio;
        $datos->fechaNac = $request->fechaNac;
        $datos->ciudad = $request->ciudad;
        $datos->estado = $request->estado;
        $datos->parroquia = $request->parroquia;
        $datos->municipio = $request->municipio;
        $datos->genero = $request->genero;
        $datos->direccion = $request->direccion;
        $datos->telfHab = $request->telfHab;
        $datos->telfCel = $request->telfCel;
        $datos->email= $request->email;
        $datos->nivelIns = $request->nivelIns;
        $datos->profOf = $request->profOf;
        $datos->fechaIng=$request->fechaIng;
        $datos->anioDiag=$request->anioDiag;
        $datos->estatusAdm=$request->estatusAdm;
        $datos->servCargo=$request->servCargo;
        $datos->elisa1=$request->elisa1;
        $datos->elisa2=$request->elisa2;
        $datos->wb=$request->wb;

        $datos->save();
        return redirect()->route('sdatos');
}
public function edit($id)
{
    //
}

    public function destroy($id){
        
        Datos::find($id)->delete();
    }
}