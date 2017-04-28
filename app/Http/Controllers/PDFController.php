<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visita;
use App\Visitante;
use App\Motivo;
use App\Empleado;
use App\Tarjeta;
use App\User;
use App\Cargo;
use App\Parametrica;
use App\Ubicacion;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;

class PDFController extends Controller
{
    
    public function getPDF(Request $request)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $hoy=date("d-m-Y ", $time);
        $ubicacion = Auth::user()->empleado->id_ubicacion;
        if (is_null($request->ci))
        {
            $vi = Visita::where('fecha_entrada', '=', $hoy)
            ->where('id_ubicacion', '=', $ubicacion)
            ->orderBy('fecha_entrada','ASC')
            ->orderBy('hora_entrada','ASC')
            ->paginate(100);
        }
        else
        {
            $vi = Visita::where('fecha_entrada', '=', $hoy)
            ->where('id_ubicacion', '=', $ubicacion)
            ->where('ci_visitante','LIKE','%'.$request->ci.'%')
            ->orderBy('fecha_entrada','ASC')
            ->orderBy('hora_entrada','ASC')
            ->paginate(100);
        }
        

        $pdf=PDF::loadView('reportes.PDFvisitas_diarias',['vi'=>$vi],['recuperado'=>$request]);
        return $pdf-> stream('Diario.pdf');
        //dd($vi);
        // $pdf=PDF::loadView('reportes.prueba');
    }

    public function visitasFechas(Request $request)
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;

        if (is_null($request->inicial))
        {
            if (is_null($request->fin))
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->orderBy('fecha_entrada','ASC')
                ->orderBy('hora_entrada','ASC')
                ->paginate(100);
            }
            else
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->where('fecha_entrada','<=',$request->fin)
                ->orderBy('fecha_entrada','ASC')
                ->orderBy('hora_entrada','ASC')
                ->paginate(100);
            }
        }
        else
        {
            if (is_null($request->fin))
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->where('fecha_entrada','>=',$request->inicial)
                ->orderBy('fecha_entrada','ASC')
                ->orderBy('hora_entrada','ASC')
                ->paginate(100);
            }
            else
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->where('fecha_entrada','>=',$request->inicial)
                ->where('fecha_entrada','<=',$request->fin)
                ->orderBy('fecha_entrada','ASC')
                ->orderBy('hora_entrada','ASC')
                ->paginate(100);
            }
        }
        $pdf=PDF::loadView('reportes.PDFvisitas_fecha',['vi'=>$vi],['recuperado'=>$request]);
        return $pdf-> stream('Fecha.pdf');
    } 
}
