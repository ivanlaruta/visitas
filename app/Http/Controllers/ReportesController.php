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

        $vi = Visita::where('fecha', '=', $hoy)->where('id_ubicacion', '=', $ubicacion)->Search($request->ci)->orderBy('id_visita','DESC')->paginate(10);
        return view('reportes.visitas_diarias')
            ->with('vi',$vi)
             ->with('recuperado',$request)
        ;
        //dd($vi->all());
    }
     public function visitasTodo(Request $request)
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;

        $vi = Visita::where('id_ubicacion', '=', $ubicacion)->Search($request->ci)->orderBy('id_visita','DESC')->paginate(10);
        return view('reportes.visitas_todo')
            ->with('vi',$vi)
             ->with('recuperado',$request)
        ;
        //dd($vi->all());
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
