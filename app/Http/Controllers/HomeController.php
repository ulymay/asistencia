<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Maestro;

use App\Clase;

use App\Asistencia;


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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['alumno','maestro']);
        
        if(Auth::user()->hasRole('maestro')){
            $carbon = new \Carbon\Carbon();
            $date = $carbon->now();
            $date = $date->toTimeString();


            $maestros = Maestro::all();
            $clas = Clase::all();
            return view('maestro', compact(['maestros', 'clas', 'date']));
        }else{
            return view('home');
        }
   
        // $user=Auth::user();


        // return view('home', compact('user'));
        
        
        

    }



    

}
