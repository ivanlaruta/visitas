<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visita;

class TestController extends Controller
{
    public function view ($id)
    {
    	$visita=Visita::find($id);

    	$visita->visitante;
		$visita->empleado;
		$visita->motivo;
		$visita->tarjeta;
		$visita->creado;
		$visita->modificado;

    	return view('test.index', ['prueba'=>$visita]);
    }
}
