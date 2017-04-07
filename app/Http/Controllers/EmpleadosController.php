<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Cargo;
use App\Ubicacion;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       
        $us = Empleado::where('estado', '=', 1)->paginate(10);
        return view('admin.empleados.index')->with('us',$us);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cargos = Cargo::orderBy('id_cargo','ASC')->pluck('descripcion','id_cargo');
       
        $ubica =Ubicacion::all()->pluck('nombre','id_ubicacion');

        return view('admin.empleados.create')
            ->with('cargos',$cargos)
            ->with('ubica',$ubica)   
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
        
        $us->save();


         return redirect()->route('empleados.index')->with('mensaje',"Empleado creado exitosamente!");
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
