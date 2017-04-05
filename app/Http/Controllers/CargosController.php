<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ca = Cargo::where('estado', '=', 1)->paginate(10);
        return view('admin.cargos.index')->with('ca',$ca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cargos.create');
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
        $ca->save();

         return redirect()->route('cargos.index')->with('mensaje',"Usuario creado exitosamente!");
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
       return view('admin.cargos.edit')->with('ca',$ca);
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
        $ca -> save();
        return redirect()->route('cargos.index')->with('mensaje',"cargo modificado exitosamente!");
    }
    public function baja($id)
    {
       $ca =Cargo::find($id);
       $ca->estado = '0';
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