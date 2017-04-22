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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        
        
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
        //dd($vi->all());
    }
    public function visitasTodo(Request $request)
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;
        $vi = Visita::where('id_ubicacion', '=', $ubicacion)
            ->Search($request->ci)
            ->orderBy('fecha_entrada','DESC')
            ->orderBy('hora_entrada','DESC')
            ->paginate(100);
        
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
