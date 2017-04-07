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
        $vi = Visita::where('estado_visita', '=', 1)->Search($request->ci)->orderBy('id_visita','DESC')->paginate(6);
        return view('ope.visitas.index')
            ->with('vi',$vi)
             ->with('recuperado',$request)
        ;
        //dd($vi->all());
    }
    public function diarias(Request $request)
    {   
        

        $vi = Visita::where('estado_visita', '=', 1)->Search($request->ci)->orderBy('id_visita','DESC')->paginate(6);
        return view('ope.visitas.index')
            ->with('vi',$vi)
             ->with('recuperado',$request)
        ;
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
        
        date_default_timezone_set('America/La_Paz');
        $time = time();
        date("H:i:s", $time);

        $visitante = new Visitante();
        $visitante -> ci = $request->ci;
        $visitante -> ex = $request->ex;
        $visitante -> nombre = $request->nombre;
        $visitante -> paterno = $request->paterno;
        $visitante -> materno = $request->materno;
        $visitante -> telefono = $request->telefono;

        $visita = new Visita();
        $visita -> ci_visitante = $request->ci;
        $visita -> tipo_doc = $request->tipo_doc;
        $visita -> fecha = date("d-m-Y ", $time);
        $visita -> hora_entrada =date("H:i:s", $time);
        $visita -> id_motivo = $request->id_motivo;
        $visita -> ci_empleado = $request->ci_empleado;
        $visita -> id_tarjeta = $request->id_tarjeta;
        $visita -> id_ubicacion = $request->ubicacion;
        $visita -> observaciones = $request->observaciones;

        $visitante->save();
        $visita->save();

        return redirect()->route('visitas.index')->with('mensaje',"Se marco el Ingreso correctamente  a hrs:".date("H:i:s", $time));
    }

    public function ingreso(Request $request)
    {
        
        date_default_timezone_set('America/La_Paz');
        $time = time();
        date("H:i:s", $time);

      

        $visita = new Visita();
        $visita -> ci_visitante = $request->ci;
        $visita -> tipo_doc = $request->tipo_doc;
        $visita -> fecha = date("d-m-Y ", $time);
        $visita -> hora_entrada =date("H:i:s", $time);
        $visita -> id_motivo = $request->id_motivo;
        $visita -> ci_empleado = $request->ci_empleado;
        $visita -> id_tarjeta = $request->id_tarjeta;
        $visita -> id_ubicacion = $request->ubicacion;
        $visita -> observaciones = $request->observaciones;

      
        $visita->save();

        return redirect()->route('visitas.index')->with('mensaje',"Se marco el Ingreso correctamente  a hrs:".date("H:i:s", $time));
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
         $motivos = Motivo::orderBy('id_motivo','ASC')->pluck('descripcion','id_motivo');
        $empleados = Empleado::all()->pluck('nombre','ci');
        $tarjetas = Tarjeta::all()->pluck('id_tarjeta','id_tarjeta');


        $dato =Visitante::find($id);
       return view('ope.visitas.create2')
       ->with('motivos',$motivos)
        ->with('empleados',$empleados)
        ->with('tarjetas',$tarjetas)
       ->with('dato',$dato);
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

