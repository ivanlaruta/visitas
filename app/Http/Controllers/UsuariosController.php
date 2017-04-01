<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

//use Laracasts\Flash\flash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$us= Usuario::orderBy('id_usuario','ASC')->paginate(4);
        $us= Usuario::all();
        return view('admin.usuarios.index')->with('us',$us);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
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
        $us = new Usuario($request->all());
        $us->password = bcrypt($request->password);
        //dd($us);
        $us->save();

        //dd('Usuario creado');

        //return redirect()->route('usuarios.index');

         return redirect()->route('usuarios.index')->with('mensaje',"Usuario creado exitosamente!");
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
       $us =Usuario::find($id);
       return view('admin.usuarios.edit')->with('us',$us);

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
        $us =Usuario::find($id);
        $us->usuario = $request->usuario;
        $us->id_rol = $request->id_rol;
        $us -> save();
        return redirect()->route('usuarios.index')->with('mensaje',"Usuario modificado exitosamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $us =Usuario::find($id);
       $us->delete();
       return redirect()->route('usuarios.index')->with('mensaje',"Usuario eliminado exitosamente!");
    }
}
