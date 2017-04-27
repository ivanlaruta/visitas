<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visita;
use App\Visitante;
use App\Motivo;
use App\Empleado;
use App\Tarjeta;
use App\Parametrica;
use Illuminate\Support\Facades\Auth;
use DB;

use Response;
use Input;

class AutoCompleteController extends Controller
{
    
   

	public function autocomplete(Request $request)
	{
		$term = $request -> term;
		$data = Empleado::where('nombre','LIKE','%'.$term.'%')
		->take(10)
		->get();
		$result = array();
		foreach ($data as $key => $value) {
			$result[]=['ci'=>$value->ci,'nombre'=>$value->nombre,'paterno'=>$value->paterno];
		}
		return response()->json($result);
	}
}
