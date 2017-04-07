<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visita;
use App\Visitante;
use App\Motivo;
use App\Empleado;
use App\Tarjeta;
class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vi = Visita::where('estado_visita', '=', 1)->Search($request->ci)->orderBy('id_visita')->paginate(8);
        return view('ope.visitas.index')->with('vi',$vi);
        //dd($vi->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $motivos = Motivo::orderBy('id_motivo','ASC')->pluck('descripcion','id_motivo');
        $empleados = Empleado::all()->pluck('nombre','ci');
        $tarjetas = Tarjeta::all()->pluck('id_tarjeta','id_tarjeta');

        $vis = Visitante::where('estado', '=', 1)->Search($request->ci)->orderBy('ci')->paginate(5);
        

        return view('ope.visitas.create')
            ->with('vis',$vis)
            ->with('motivos',$motivos)
            ->with('empleados',$empleados)
            ->with('tarjetas',$tarjetas)
            ->with('recuperado',$request)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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

    public function salida( $id)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $vi =Visita::find($id);
        $vi->estado_visita = '0';
        $vi->hora_salida = date("H:i:s", $time);
        // echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));
        $vi -> save();
        return redirect()->route('visitas.index')->with('mensaje',"visita se marco como terminada a hrs:".date("H:i:s", $time));
    }
}

