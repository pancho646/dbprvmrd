<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosController extends Controller
{
    //
    public function create(){
        return view('consulta.datos');
    }
}
