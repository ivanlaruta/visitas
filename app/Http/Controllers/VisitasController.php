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
class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        date_default_timezone_set('America/La_Paz');
        $time = time();
        $hoy=date("Y-m-d ", $time);
        

        $vi = Visita::where('estado_visita', '<>', 0)
        // ->where('fecha_entrada', '=', $hoy)
        ->Search($request->ci)
        ->orderBy('fecha_entrada','ASC')
        ->paginate(5)
        ;

        return view('ope.visitas.index')
            ->with('vi',$vi)
            ->with('recuperado',$request)
        ;
        //dd($vi->all());
    }
   
    public function reportadas(Request $request)
    {   

        date_default_timezone_set('America/La_Paz');
        $time = time();
        $hoy=date("d-m-Y ", $time);

        $vi = Visita::where('estado_visita', '=', 1)
        ->where('fecha_entrada', '<>', $hoy)
        ->Search($request->ci)
        ->orderBy('id_visita','DESC')
        ->paginate(5)
        ;

        return view('ope.visitas.reportadas')
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
    public function create(Request $request)
    {   
        $ubicacion = Auth::user()->empleado->id_ubicacion;

        

        $expe = Parametrica::where('nombre_tabla','EXPEDIDO')->orderBy('id','ASC')->pluck('id','id');
        $tipoDoc = Parametrica::where('nombre_tabla','TIPO_DOC')->orderBy('id','ASC')->pluck('descripcion','id');
        // $empleados = Empleado::all(['ci', 'nombre','paterno']);

        $empleados = Empleado::orderBy('paterno','ASC')
                    ->select('ci', 'nombre','paterno')
                    ->where('id_cargo','<>','3' )
                    ->where('id_ubicacion', $ubicacion )
                    ->where('estado','1')
                    ->get();

        if (Auth::user()->empleado->id_cargo == '3')
        {
             $tarjetas = Tarjeta::where('estado_prestamo','1')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion)                    
                    ->whereNull('ci_empleado')

                    ->where('tipo_tarjeta', 'VISITA')
                    ->orWhere('tipo_tarjeta', 'PERSONAL AUTORIZADO')
                    ->orWhere('tipo_tarjeta', 'SIN NOMBRE')
                    ->orWhere('tipo_tarjeta', 'PASANTE')

                    ->orderBy('id_tarjeta','ASC')
                    ->pluck('id_tarjeta','id_tarjeta');
        }
        else
        {
        $tarjetas = Tarjeta::where('estado_prestamo','1')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion )
                    ->whereNull('ci_empleado')

                    ->where('tipo_tarjeta', 'VICEPRESIDENCIA')
                    ->orWhere('tipo_tarjeta', 'PRESIDENCIA')


                    ->orderBy('id_tarjeta','ASC')
                    ->pluck('id_tarjeta','id_tarjeta');

        }
        $motivos = Motivo::orderBy('id_motivo','ASC')->pluck('descripcion','id_motivo');
        // $empleados = Empleado::all()->pluck('nombre','ci');
        
        $vis = Visitante::where('estado', '=', 1)->Search($request->ci)->orderBy('ci')->paginate(5);
        // dd($empleados);
       

        return view('ope.visitas.create')
            ->with('expe',$expe)
            ->with('tipoDoc',$tipoDoc)
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
        $visita -> fecha_entrada = date("d-m-Y ", $time);
        $visita -> hora_entrada =date("H:i:s", $time);
        $visita -> id_motivo = $request->id_motivo;
        $visita -> ci_empleado = $request->ci_empleado;
        $visita -> id_tarjeta = $request->id_tarjeta;
        $visita -> id_ubicacion = $request->ubicacion;
        $visita -> observaciones = $request->observaciones;

        
        $ta = Tarjeta::find( $request->id_tarjeta);
        $ta->estado_prestamo = '0';

        $ta -> save();

        if(is_null(Visitante::find($request->ci)))
        {
            $visitante->save();
            $visita->save();
            return redirect()->route('visitas.index')->with('mensaje',"Se marco el Ingreso correctamente  a hrs:".date("H:i:s", $time));
        }
        else
        {
            return redirect()->route('visitas.create')->with('mensaje',"Error!. El Ci que intento registrar ya existe.");
        }
       
    }

    public function ingreso(Request $request)
    {
        
        date_default_timezone_set('America/La_Paz');
        $time = time();
        date("d-m-Y ", $time);

      

        $visita = new Visita();
        $visita -> ci_visitante = $request->ci;
        $visita -> tipo_doc = $request->tipo_doc;
        $visita -> fecha_entrada = date("d-m-Y ", $time);
        $visita -> hora_entrada =date("H:i:s", $time);
        $visita -> id_motivo = $request->id_motivo;
        $visita -> ci_empleado = $request->ci_empleado;
        $visita -> id_tarjeta = $request->id_tarjeta;
        $visita -> id_ubicacion = $request->ubicacion;
        $visita -> observaciones = $request->observaciones;
 // dd($request->id_tarjeta);  
        $ta = Tarjeta::find( $request->id_tarjeta);
        $ta->estado_prestamo = '0';
        $ta->save();
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

        $ubicacion = Auth::user()->empleado->id_ubicacion;

        $expe = Parametrica::where('nombre_tabla','EXPENDIDO')->orderBy('id','ASC')->pluck('descripcion','id');
        $tipoDoc = Parametrica::where('nombre_tabla','TIPO_DOC')->orderBy('id','ASC')->pluck('descripcion','id');
        $motivos = Motivo::orderBy('id_motivo','ASC')->pluck('descripcion','id_motivo');
        
       $empleados = Empleado::orderBy('paterno','ASC')
                    ->select('ci', 'nombre','paterno')
                    ->where('id_cargo','<>','3' )
                    ->where('id_ubicacion', $ubicacion )
                    ->where('estado','1')
                    ->get();

        if (Auth::user()->empleado->id_cargo == '3')
        {
             $tarjetas = Tarjeta::where('estado_prestamo','1')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion)                    
                    ->whereNull('ci_empleado')

                    ->where('tipo_tarjeta', 'VISITA')
                    ->orWhere('tipo_tarjeta', 'PERSONAL AUTORIZADO')
                    ->orWhere('tipo_tarjeta', 'SIN NOMBRE')
                    ->orWhere('tipo_tarjeta', 'PASANTE')

                    ->orderBy('id_tarjeta','ASC')
                    ->pluck('id_tarjeta','id_tarjeta');
        }
        else
        {
            $tarjetas = Tarjeta::where('estado_prestamo','1')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion )
                    ->whereNull('ci_empleado')

                    ->where('tipo_tarjeta', 'VICEPRESIDENCIA')
                    ->orWhere('tipo_tarjeta', 'PRESIDENCIA')


                    ->orderBy('id_tarjeta','ASC')
                    ->pluck('id_tarjeta','id_tarjeta');

        }

        $dato =Visitante::find($id);
       return view('ope.visitas.createAux')
        ->with('expe',$expe)
        ->with('tipoDoc',$tipoDoc)
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
        $vi->fecha_salida = date("d-m-Y ", $time);
        $vi->hora_salida = date("H:i:s", $time);
        // echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));
        $ta = Tarjeta::find( $vi->id_tarjeta);
        $ta->estado_prestamo = '1';
        $ta->save();
        $vi -> save();
        return redirect()->route('visitas.index')->with('mensaje',"visita se marco como terminada a hrs:".date("H:i:s", $time));
    }

    public function restaurar( $id)
    {
        $vi =Visita::find($id);
        $vi->estado_visita = '2';
        
        // echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));
        $ta = Tarjeta::find( $vi->id_tarjeta);
        $ta->estado_prestamo = '1';
        $ta->save();
        $vi -> save();
        return redirect()->route('visitas.index')->with('mensaje',"tarjeta restaurada:");
    }
}

