<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Visita;
use App\Visitante;
use App\Motivo;
use App\Empleado;
use App\Tarjeta;
use App\Parametrica;
use App\User;

use Illuminate\Support\Facades\Auth;
use DB;



class ValidarUsuarioController extends Controller
{
    public function index(Request $request)
    {   
        if (Auth::user()->id_rol== '0')
        {
	        return redirect()->route('visitas.create');
    	}
        
    	if (Auth::user()->id_rol== '1')
        {	
    		 return redirect()->route('users.index');
    	}
        
    }

}
