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
        ->where('estado_visita', '<>', 4)
        // ->where('fecha_entrada', '=', $hoy)
        ->Search($request->ci)
        ->orderBy('fecha_entrada','ASC')
        ->paginate(100)
        ;

        return view('ope.visitas.index')
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

        // $empleados = Empleado::orderBy('paterno','ASC')
        //             ->select('*')
                    
        //             ->where('id_ubicacion', $ubicacion )
        //             ->where('estado','1')
        //             ->get();
       

        if (Auth::user()->empleado->cargo->descripcion == 'POLICIA')
        {
            $tarjetas = Tarjeta::
                    select('id_tarjeta','tipo_tarjeta')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion)                    
                    ->whereNull('ci_empleado')
                    ->where('estado_prestamo','=','1') 
                    ->whereIn('tipo_tarjeta', ['VISITA', 'PERSONAL AUTORIZADO', 'SIN NOMBRE', 'PASANTE'])
                    ->orderBy('id_tarjeta','ASC')
                    ->get();

            $empleados = DB::table('empleados as e')
                    ->select('e.*','c.*')
                    ->join('cargos as c','e.id_cargo','=','c.id_cargo')
                    ->whereNotIn('c.area', ['VICEPRECIDENCIA', 'PRESIDENCIA','POLICIA'])
                    ->where('e.id_ubicacion', $ubicacion )
                    ->where('e.estado','1')
                    ->get();

           
        }
        else
        {
        $tarjetas = Tarjeta::
                    select('id_tarjeta','tipo_tarjeta')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion )
                    ->whereNull('ci_empleado')
                    ->where('estado_prestamo','=','1')    
                    ->whereIn ('tipo_tarjeta',['VICEPRESIDENCIA','PRESIDENCIA'])
                    ->orderBy('id_tarjeta','ASC')
                    ->get();


        $empleados = DB::table('empleados as e')
                    ->select('e.*','c.*')
                    ->join('cargos as c','e.id_cargo','=','c.id_cargo')
                    ->whereIn('c.area', ['VICEPRECIDENCIA', 'PRESIDENCIA'])
                    ->where('e.id_ubicacion', $ubicacion )
                    ->where('e.estado','1')
                    ->get();
        }

        $motivos = Motivo::orderBy('id_motivo','ASC')->pluck('descripcion','id_motivo');
        // $empleados = Empleado::all()->pluck('nombre','ci');
        
        $vis = Visitante::where('estado', '=', 1)->Search($request->ci)->orderBy('ci')->paginate(7);
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

    public function edit($id)
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;

        $expe = Parametrica::where('nombre_tabla','EXPENDIDO')->orderBy('id','ASC')->pluck('descripcion','id');
        $tipoDoc = Parametrica::where('nombre_tabla','TIPO_DOC')->orderBy('id','ASC')->pluck('descripcion','id');
        $motivos = Motivo::orderBy('id_motivo','ASC')->pluck('descripcion','id_motivo');
        $dato =Visitante::find($id);

        // $empleados = Empleado::orderBy('paterno','ASC')
        //             ->select('*')
                    
        //             ->where('id_ubicacion', $ubicacion )
        //             ->where('estado','1')
        //             ->get();

        if (Auth::user()->empleado->cargo->descripcion == 'POLICIA')
        {
             $tarjetas = Tarjeta::select('id_tarjeta','tipo_tarjeta')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion)                    
                    ->whereNull('ci_empleado')
                    ->where('estado_prestamo','=','1')
                    ->whereIn('tipo_tarjeta', ['VISITA', 'PERSONAL AUTORIZADO', 'SIN NOMBRE', 'PASANTE'])

                    ->orderBy('id_tarjeta','ASC')
                    ->get();
            $empleados = DB::table('empleados as e')
                    ->select('e.*','c.*')
                    ->join('cargos as c','e.id_cargo','=','c.id_cargo')
                    ->whereNotIn('c.area', ['VICEPRECIDENCIA', 'PRESIDENCIA'])
                    ->where('e.id_ubicacion', $ubicacion )
                    ->where('e.estado','1')
                    ->get();
        }
        else
        {
                    $tarjetas = Tarjeta::select('id_tarjeta','tipo_tarjeta')
                    ->where('estado','1')
                    ->where('id_ubicacion', $ubicacion )
                    ->whereNull('ci_empleado')
                    ->where('estado_prestamo','=','1')    
                    ->whereIn ('tipo_tarjeta',['VICEPRESIDENCIA','PRESIDENCIA'])

                    ->orderBy('id_tarjeta','ASC')
                    ->get();

                    $empleados = DB::table('empleados as e')
                    ->select('e.*','c.*')
                    ->join('cargos as c','e.id_cargo','=','c.id_cargo')
                    ->whereIn('c.area', ['VICEPRECIDENCIA', 'PRESIDENCIA'])
                    ->where('e.id_ubicacion', $ubicacion )
                    ->where('e.estado','1')
                    ->get();

        }
        
        $inf =  Visita::where('estado_visita','1')
                ->where('ci_visitante', $id)                    
                ->get();

        if(sizeof($inf)>0)
        {
            return redirect()->route('visitas.create')->with('mensaje2',"Actualmente esta persona  se encuentra en una visita en curso.");
        }
        else
        {
            

            return view('ope.visitas.createAux')
            ->with('expe',$expe)
            ->with('tipoDoc',$tipoDoc)
            ->with('motivos',$motivos)
            ->with('empleados',$empleados)
            ->with('tarjetas',$tarjetas)
            ->with('dato',$dato);
        }
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
        $visitante -> nombre = strtr(strtoupper($request->nombre),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $visitante -> paterno = strtr(strtoupper($request->paterno),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $visitante -> materno = strtr(strtoupper($request->materno),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $visitante -> telefono = $request->telefono;
        $visitante -> creado_por = Auth::user()->usuario;
        $visitante -> modificado_por = Auth::user()->usuario;

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
        $visita -> creado_por = Auth::user()->usuario;
        $visita -> modificado_por = Auth::user()->usuario;

        $ta = Tarjeta::find( $request->id_tarjeta);
        $ta -> estado_prestamo = '0';
        $ta -> modificado_por = Auth::user()->usuario;
        

        if(is_null(Visitante::find($request->ci)))
        {
            $visitante->save();
            $visita->save();
            $ta -> save();
            return redirect()->route('visitas.index')->with('mensaje',"Se marco el Ingreso correctamente  a hrs:".date("H:i:s", $time));
        }
        else
        {
            return redirect()->route('visitas.create')->with('mensaje2',"Error!. El Ci que intento registrar ya existe.");
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
        $visita -> creado_por = Auth::user()->usuario;
        $visita -> modificado_por = Auth::user()->usuario;
 // dd($request->id_tarjeta);  
        $vi = Visitante::find($request->ci);
        $vi -> telefono = $request->telefono;

        $ta = Tarjeta::find( $request->id_tarjeta);
        $ta -> estado_prestamo = '0';
        $ta -> modificado_por = Auth::user()->usuario;

        $vi->save();
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
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
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
        $vi->modificado_por = Auth::user()->usuario;
      
        // echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));
        $ta = Tarjeta::find( $vi->id_tarjeta);
        $ta->estado_prestamo = '1';
        $ta -> modificado_por = Auth::user()->usuario;

        $ta->save();
        $vi -> save();

        return redirect()->route('visitas.index')->with('mensaje',"Visita se marco como terminada a hrs:".date("H:i:s", $time));
    }

    public function reportar($id)
    {
        $vi =Visita::find($id);
        $vi->estado_visita = '2';
        
        // echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));
        $ta = Tarjeta::find( $vi->id_tarjeta);
        $ta->estado_prestamo = '2';
        $ta->ci_visitante = $vi->ci_visitante;
        $ta -> modificado_por = Auth::user()->usuario;
        $ta->save();
        $vi -> save();
        return redirect()->route('visitas.index')->with('mensaje',"Visita reportada:");
    }
    public function reportadas(Request $request)
    {   

       
        $vi = Visita::all()
        ->where('estado_visita', '=', 2);

        return view('admin.visitas.reportadas')
            ->with('vi',$vi)
            ->with('recuperado',$request)
        ;
        //dd($vi->all());
    }

    public function rehabilitar( $id)
    {
        $vi =Visita::find($id);
        $vi->estado_visita = '1';
        $vi -> modificado_por = Auth::user()->usuario;
        // $ta = Tarjeta::find( $vi->id_tarjeta);
        // $ta->estado_prestamo = '1';
        
        //$ta->save();
        $vi -> save();
        return redirect()->route('visitas.reportadas')->with('mensaje',"Visita rehabilitada:");
    }

    public function restaurar( $id)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $vi =Visita::find($id);
        $vi->estado_visita = '4';
        $vi->fecha_salida = date("d-m-Y ", $time);
        $vi->hora_salida = date("H:i:s", $time);
        $vi->modificado_por = Auth::user()->usuario;

        $vi -> save();
        return redirect()->route('visitas.index')->with('mensaje',"Visita concluida:");
    }

    public function baja($id)
    {   
        $vi =Visita::find($id);
        $ta =Tarjeta::find($id);
        $banco = Parametrica::where('nombre_tabla','BANCO')->orderBy('id','ASC')->pluck('descripcion','descripcion');
        return view('admin.visitas.baja')
            ->with('ta',$ta)
            ->with('vi',$vi)
            ->with('banco',$banco)
        ;
    }

    public function bajaTarjeta(Request $request)
    {   
        // dd($request->all());

        $vi =Visita::find($request->id_visita);
        $vi->estado_visita = '3';
        $vi -> modificado_por = Auth::user()->usuario;

        $ta = Tarjeta::find( $vi->id_tarjeta);
        $ta->estado_prestamo = '0';
        $ta->estado = '0';
        $ta->boleta_deposito = $request->boleta_deposito;
        $ta->cuenta = $request->cuenta;
        $ta->banco = $request->banco;
        $ta->monto = $request->monto;
        $ta->fecha_deposito = $request->fecha_deposito;
        $ta->ci_visitante = $request->ci_visitante;
        $ta->observacion_perdida = $request->observacion_perdida;
        $ta -> modificado_por = Auth::user()->usuario;

        $ta->save();
        $vi -> save();

        return redirect()->route('visitas.reportadas')->with('mensaje',"Deposito registrado correctamente");
    }
}
