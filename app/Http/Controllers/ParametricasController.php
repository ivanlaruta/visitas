<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parametrica;
use Illuminate\Support\Facades\Auth;
class ParametricasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pa = Parametrica::all()->where('estado', '=', 1);
        return view('admin.parametricas.index')->with('pa',$pa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parametricas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pa = new Parametrica($request->all());
        $pa -> nombre_tabla = strtr(strtoupper($request->nombre_tabla),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $pa -> id = strtr(strtoupper($request->id),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $pa -> descripcion = strtr(strtoupper($request->descripcion),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $pa ->creado_por = Auth::user()->usuario;
        $pa ->modificado_por = Auth::user()->usuario;
        $pa->save();

         return redirect()->route('parametricas.index')->with('mensaje',"Parametrica creado exitosamente!");
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
       $pa =Parametrica::find($id);
       return view('admin.parametricas.edit')->with('pa',$pa);
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
        $pa =Parametrica::find($id);
        $pa->fill($request->all());
        $pa -> id = strtr(strtoupper($request->id),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $pa -> descripcion = strtr(strtoupper($request->descripcion),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        
        $pa ->modificado_por = Auth::user()->usuario;
        $pa -> save();
        return redirect()->route('parametricas.index')->with('mensaje',"Parametrica modificado exitosamente!");
    }
    
    public function baja($id)
    {
       $pa =Parametrica::find($id);
       $pa->estado = '0';
       $pa ->modificado_por = Auth::user()->usuario;
       $pa -> save();
       return redirect()->route('parametricas.index')->with('mensaje',"Parametrica dado de baja exitosamente!");
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