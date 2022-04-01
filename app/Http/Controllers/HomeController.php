<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function loginRedirect(){
        if (\Auth::user()->hasRole('Admin'))
         return redirect()->action([AdminController::class,'home']);
         //return "hola";
        else
           return redirect()->action([HomeController::class,'index']);
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
