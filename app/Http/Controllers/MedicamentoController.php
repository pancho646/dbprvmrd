<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    //
    public function create(){
        return view('farmacia.medicamentos');
    }

    public function store(Request $request){
            

    }
}
