<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;
use App\Parametrica;
class UbicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ub = Ubicacion::where('estado', '=', 1)->paginate(15);
        return view('admin.ubicaciones.index')->with('ub',$ub);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       $ciudad = Parametrica::where('nombre_tabla','CIUDAD')->orderBy('id','ASC')->pluck('descripcion','descripcion');
        return view('admin.ubicaciones.create')->with('ciudad',$ciudad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ub = new Ubicacion($request->all());
        $ub->save();

         return redirect()->route('ubicaciones.index')->with('mensaje',"Ubicacion creada exitosamente!");
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
        $ciudad = Parametrica::where('nombre_tabla','CIUDAD')->orderBy('id','ASC')->pluck('descripcion','descripcion');
       $ub =Ubicacion::find($id);
       return view('admin.ubicaciones.edit')->with('ub',$ub)->with('ciudad',$ciudad);
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
        $ub =Ubicacion::find($id);
        $ub->fill($request->all());
        $ub -> save();
        return redirect()->route('ubicaciones.index')->with('mensaje',"Ubicacion modificada exitosamente!");
    }
    public function baja($id)
    {
       $ub =Ubicacion::find($id);
       $ub->estado = '0';
       $ub -> save();
       return redirect()->route('ubicaciones.index')->with('mensaje',"Ubicacion dada de baja exitosamente!");
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
