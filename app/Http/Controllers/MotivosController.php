<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motivo;
class MotivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mo = Motivo::where('estado', '=', 1)->paginate(10);
        return view('admin.motivos.index')->with('mo',$mo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.motivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mo = new Motivo($request->all());
        $mo->save();

         return redirect()->route('motivos.index')->with('mensaje',"Motivo creado exitosamente!");
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
       $mo =Motivo::find($id);
       return view('admin.motivos.edit')->with('mo',$mo);
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
        $mo =Motivo::find($id);
        $mo->fill($request->all());
        $mo -> save();
        return redirect()->route('motivos.index')->with('mensaje',"Motivo modificado exitosamente!");
    }
    
    public function baja($id)
    {
       $mo =Motivo::find($id);
       $mo->estado = '0';
       $mo -> save();
       return redirect()->route('motivos.index')->with('mensaje',"Motivo dado de baja exitosamente!");
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
