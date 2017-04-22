<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Cargo;
use App\Ubicacion;
use App\Parametrica;
use Illuminate\Support\Facades\Auth;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       
        $us = Empleado::where('estado', '=', 1)->orderBy('paterno','ASC')->paginate(100);
        return view('admin.empleados.index')->with('us',$us);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {   
        $expe = Parametrica::where('nombre_tabla','EXPEDIDO')->orderBy('id','ASC')->pluck('descripcion','id');

        $cargos = Cargo::orderBy('descripcion','ASC')->pluck('descripcion','id_cargo');
       
        $ubica =Ubicacion::orderBy('nombre','ASC')->pluck('nombre','id_ubicacion');

        return view('admin.empleados.create')
            ->with('cargos',$cargos)
            ->with('ubica',$ubica)
            ->with('expe',$expe)  
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
        $us = new Empleado($request->all());
        $us->ci = trim($request->ci);
        $us -> nombre =strtoupper($request->nombre);
        $us -> paterno =strtoupper($request->paterno);
        $us -> materno =strtoupper($request->materno);
        $us ->creado_por = Auth::user()->usuario;
        $us ->modificado_por = Auth::user()->usuario;
        
        if(is_null(Empleado::find($request->ci)))
        {
            $us->save();
            return redirect()->route('empleados.index')->with('mensaje',"Empleado creado exitosamente!");
        }
        else
        {
            return redirect()->route('empleados.create')->with('mensaje2',"Error!. El Ci que intento registrar ya existe.");
        }
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

        $cargos = Cargo::orderBy('id_cargo','ASC')->pluck('descripcion','id_cargo');
       
        $ubica =Ubicacion::all()->pluck('nombre','id_ubicacion');

        $us =Empleado::find($id);
       return view('admin.empleados.edit')
       ->with('us',$us)
        ->with('cargos',$cargos)
        ->with('ubica',$ubica) 
       ;
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
        $us =Empleado::find($id);
        $us->fill($request->all());
        $us -> nombre =strtoupper($request->nombre);
        $us -> paterno =strtoupper($request->paterno);
        $us -> materno =strtoupper($request->materno);
        
        $us ->modificado_por = Auth::user()->usuario;
        $us -> save();
        return redirect()->route('empleados.index')->with('mensaje',"Empleado modificado exitosamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us =Empleado::find($id);
        $us->estado = '0';
        $us ->modificado_por = Auth::user()->usuario;
        $us -> save();
        return redirect()->route('empleados.index')->with('mensaje',"Empleado dado de baja exitosamente!");
    }
    public function baja( $id)
    {
        $us =Empleado::find($id);
        $us->estado = '0';
        $us -> save();
        return redirect()->route('empleados.index')->with('mensaje',"Empleado dado de baja exitosamente!");
    }
}
