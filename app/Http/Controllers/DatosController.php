<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;
class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return Datos::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('consulta.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $patient=new Datos;
        $patient->firstname=$request->firstname;
        $patient->secondname=$request->secondname;
        $patient->lastname1=$request->lastname1;
        $patient->lastname2=$request->lastname2;
        $patient->cedula=$request->cedula;
        $patient->historia=$request->historia;
        $patient->nacionalidad=$request->historia;
        $patient->fechaNac=$request->fechaNac;
        $patient->ciudad=$request->ciudad;
        $patient->estado=$request->estado;
        $patient->parroquia=$request->parroquia;
        $patient->municipio=$request->municipio;
        $patient->genero=$request->genero;
        $patient->direccion=$request->direccion;
        $patient->telfHab=$request->telfHab;
        $patient->telfCel=$request->telfCel;
        $patient->email=$request->email;
        $patient->nivelIns=$request->nivelIns;
        $patient->profOf=$request->profOf;
        $patient->fechaIng=$request->fechaIng;
        $patient->anioDiag=$request->anioDiag;
        $patient->estatusAdm=$request->estatusAdm;
        $patient->servCargo=$request->servCargo;
        $patient->elisa1=$request->elisa1;
        $patient->elisa2=$request->elisa2;
        $patient->wb=$request->wb;
        $patient->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $patient=Datos::find($id);
        $patient->firstname=$request->firstname;
        $patient->secondname=$request->secondname;
        $patient->lastname1=$request->lastname1;
        $patient->lastname2=$request->lastname2;
        $patient->cedula=$request->cedula;
        $patient->historia=$request->historia;
        $patient->nacionalidad=$request->historia;
        $patient->fecha_nac=$request->fecha_nac;
        $patient->ciudad=$request->ciudad;
        $patient->estado=$request->estado;
        $patient->parroquia=$request->parroquia;
        $patient->sexo=$request->sexo;
        $patient->direccion=$request->direccion;
        $patient->telf_hab=$request->telf_hab;
        $patient->telf_cel=$request->telf_cel;
        $patient->email=$request->email;
        $patient->nivel_ins=$request->nivel_ins;
        $patient->prof_of=$request->prof_of;
        $patient->fec_ing=$request->fec_ing;
        $patient->anio_diag=$request->anio_diag;
        $patient->estatus_adm=$request->estatus_adm;
        $patient->serv_cargo=$request->serv_cargo;
        $patient->elisa1=$request->elisa1;
        $patient->elisa2=$request->elisa2;
        $patient->wb=$request->wb;
        $patient->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Datos::find($id)->delete();
    }
}
