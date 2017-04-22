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
        $pa = Parametrica::where('estado', '=', 1)->orderBy('nombre_tabla','ASC')->paginate(100);
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
        $pa -> nombre_tabla = strtoupper($request->nombre_tabla);
        $pa -> id = strtoupper($request->id);
        $pa -> descripcion = strtoupper($request->descripcion);
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
        $pa -> id = strtoupper($request->id);
        $pa -> descripcion = strtoupper($request->descripcion);
        
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