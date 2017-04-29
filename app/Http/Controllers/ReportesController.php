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

class ReportesController extends Controller
{
    
    public function repAdmin(Request $request)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $hoy=date("d-m-Y ", $time);

        

       if(is_null($request->id_ubicacion))
        {
            $dia = Visita::where('fecha_entrada', '=', $hoy)->count();
            $regular= Visita::all()->where('estado_visita', '<', '2')->count();
            $reportada= Visita::all()->where('estado_visita', '=', '2')->count();
            $regularizada= Visita::all()->where('estado_visita', '>', '2')->count();
            $todo= Visita::all()->count();
            $request->id_ubicacion = '0';
       
        }
        else
        {
            $ubicacion = $request->id_ubicacion;

            $dia = Visita::where('fecha_entrada', '=', $hoy)->where('id_ubicacion', '=', $ubicacion)->count();
            $regular= Visita::all()->where('estado_visita', '<', '2')->where('id_ubicacion', '=', $ubicacion)->count();
            $reportada= Visita::all()->where('estado_visita', '=', '2')->where('id_ubicacion', '=', $ubicacion)->count();
            $regularizada= Visita::all()->where('estado_visita', '>', '2')->where('id_ubicacion', '=', $ubicacion)->count();
            $todo= Visita::all()->where('id_ubicacion', '=', $ubicacion)->count();
        }
        
        $ubica =Ubicacion::orderBy('nombre','ASC')->pluck('nombre','id_ubicacion');

        return view('reportesAdmin.index')
        ->with('ubica',$ubica)
        ->with('dia',$dia)
        ->with('regular',$regular)
        ->with('reportada',$reportada)
        ->with('regularizada',$regularizada)
        ->with('request',$request)
        ->with('todo',$todo)
        ;
    }
    public function visitasDiarias(Request $request)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $hoy=date("d-m-Y ", $time);

        $ubicacion = Auth::user()->empleado->id_ubicacion;

        $vi = Visita::where('fecha_entrada', '=', $hoy)->where('id_ubicacion', '=', $ubicacion)->Search($request->ci)->orderBy('id_visita','ASC')->paginate(20);
        return view('reportes.visitas_diarias')
            ->with('vi',$vi)
             ->with('recuperado',$request)
        ;
      
    }

    public function visitasTodoAdmin($ubicacion)
    {   
        if($ubicacion>'0')
        
        {
            $vi = Visita::all()->where('id_ubicacion', '=', $ubicacion);
        }
        else
        {
            $vi = Visita::all();
        }
        return view('reportesAdmin.visitas_todo')
            ->with('vi',$vi)
            
        ;
    } 

    public function visitasTodo(Request $request)
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;
        $vi = Visita::all()->where('id_ubicacion', '=', $ubicacion);
       
        return view('reportes.visitas_todo')
            ->with('vi',$vi)
             ->with('recuperado',$request)
        ;
    } 


    public function visitasEntreFechas(Request $request)
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;

        if (is_null($request->inicial))
        {
            if (is_null($request->fin))
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->orderBy('fecha_entrada','DESC')
                ->orderBy('hora_entrada','DESC')
                ->paginate(20);
            }
            else
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->where('fecha_entrada','<=',$request->fin)
                ->orderBy('fecha_entrada','DESC')
                ->orderBy('hora_entrada','DESC')
                ->paginate(20);
            }
        }
        else
        {
            if (is_null($request->fin))
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->where('fecha_entrada','>=',$request->inicial)
                ->orderBy('fecha_entrada','DESC')
                ->orderBy('hora_entrada','DESC')
                ->paginate(20);
            }
            else
            {
                $vi = Visita::where('id_ubicacion', '=', $ubicacion)
                ->where('fecha_entrada','>=',$request->inicial)
                ->where('fecha_entrada','<=',$request->fin)
                ->orderBy('fecha_entrada','DESC')
                ->orderBy('hora_entrada','DESC')
                ->paginate(20);
            }
        }

        
        return view('reportes.entre_fechas')
            ->with('vi',$vi)
            ->with('recuperado',$request);
    } 
}
