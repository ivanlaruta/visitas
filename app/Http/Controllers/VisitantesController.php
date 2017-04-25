<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitante;
use App\Parametrica;
use Illuminate\Support\Facades\Auth;
class VisitantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
       
        $us = Visitante::all()->where('estado', '=', 1);
        return view('admin.visitantes.index')->with('us',$us);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expe = Parametrica::where('nombre_tabla','EXPEDIDO')->orderBy('id','ASC')->pluck('descripcion','id');
        return view('admin.visitantes.create')->with('expe',$expe);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $us = new Visitante($request->all());
        $us -> nombre =strtr(strtoupper($request->nombre),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $us -> paterno =strtr(strtoupper($request->paterno),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $us -> materno =strtr(strtoupper($request->materno),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $us -> creado_por = Auth::user()->usuario;
        $us -> modificado_por = Auth::user()->usuario;  


        if(is_null(Visitante::find($request->ci)))
        {
            $us->save();
            return redirect()->route('visitantes.index')->with('mensaje',"visitante creado exitosamente!");
        }
        else
        {
            return redirect()->route('visitantes.create')->with('mensaje2',"Error!. El Ci que intento registrar ya existe.");
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
        $us =Visitante::find($id);
       return view('admin.visitantes.edit')->with('us',$us);
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
        $us =Visitante::find($id);
        // $us->visitante = $request->visitante;
        // $us->id_rol = $request->id_rol;
        $us->fill($request->all());
        $us -> nombre =strtr(strtoupper($request->nombre),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $us -> paterno =strtr(strtoupper($request->paterno),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        $us -> materno =strtr(strtoupper($request->materno),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        
        $us ->modificado_por = Auth::user()->usuario;
        $us -> save();
        return redirect()->route('visitantes.index')->with('mensaje',"visitante modificado exitosamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us =Visitante::find($id);
        $us->estado = '0';
        $us ->modificado_por = Auth::user()->usuario;
        $us -> save();
        return redirect()->route('visitantes.index')->with('mensaje',"visitante dado de baja exitosamente!");
    }
    public function baja( $id)
    {
        $us =Visitante::find($id);
        $us->estado = '0';
        $us -> save();
        return redirect()->route('visitantes.index')->with('mensaje',"visitante dado de baja exitosamente!");
    }
}
