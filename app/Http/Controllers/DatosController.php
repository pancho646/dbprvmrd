<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
use App\Http\Requests\DatosRequest;
class DatosController extends Controller
{
    //
    public function create(){
        return view('consulta.datos');
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
        $datos->fecha_nac = $request->fecha_nac;
        $datos->ciudad = $request->ciudad;
        $datos->estado = $request->estado;
        $datos->parroquia = $request->parroquia;
        $datos->sexo = $request->sexo;
        $datos->direccion = $request->direccion;
        $datos->telf_hab = $request->telf_hab;
        $datos->telf_cel = $request->telf_cel;
        $datos->email= $request->email;
        $datos->nivel_ins = $request->nivel_ins;
        $datos->prof_of = $request->prof_of;
        $datos->save();
        return redirect()->route('sdatos');

    }
    public function show(){
        $pacientes=Datos::all();
        return view('consulta.show',compact('pacientes'));
    }
}
