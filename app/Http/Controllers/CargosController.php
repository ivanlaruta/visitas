<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
use App\Parametrica;
use Illuminate\Support\Facades\Auth;
class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$ca = Cargo::where('estado', '=', 1)->orderBy('descripcion','ASC')->paginate(100);
        $ca = Cargo::all()->where('estado', '=', 1);
        return view('admin.cargos.index')->with('ca',$ca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = Parametrica::where('nombre_tabla','AREA')->orderBy('id','ASC')->pluck('descripcion','descripcion');
        return view('admin.cargos.create')->with('area',$area);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ca = new Cargo($request->all());

        $ca -> descripcion = strtr(strtoupper($request->descripcion),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $ca ->creado_por = Auth::user()->usuario;
        $ca ->modificado_por = Auth::user()->usuario;
        $ca->save();

         return redirect()->route('cargos.index')->with('mensaje',"Cargo creado exitosamente!");
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
       $ca =Cargo::find($id);
       $area = Parametrica::where('nombre_tabla','AREA')->orderBy('id','ASC')->pluck('descripcion','descripcion');

       return view('admin.cargos.edit')
       ->with('area',$area)
       ->with('ca',$ca);
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
        $ca =Cargo::find($id);
        $ca->fill($request->all());
        $ca -> descripcion = strtr(strtoupper($request->descripcion),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $ca ->modificado_por = Auth::user()->usuario;
        $ca -> save();
        return redirect()->route('cargos.index')->with('mensaje',"cargo modificado exitosamente!");
    }
    public function baja($id)
    {
       $ca =Cargo::find($id);
       $ca->estado = '0';
       $ca ->modificado_por = Auth::user()->usuario;
       $ca -> save();
       return redirect()->route('cargos.index')->with('mensaje',"Cargo dado de baja exitosamente!");
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
