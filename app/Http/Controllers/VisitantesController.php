<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitante;
class VisitantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
       
        $us = Visitante::where('estado', '=', 1)->paginate(10);
        return view('admin.visitantes.index')->with('us',$us);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visitantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $us = new Visitante($request->all());
        //$us->password = bcrypt($request->password);
        //dd($us);
        $us->save();

        //dd('visitante creado');

        //return redirect()->route('visitantes.index');

         return redirect()->route('visitantes.index')->with('mensaje',"visitante creado exitosamente!");
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
