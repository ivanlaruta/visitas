<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Empleado;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $us = User::where('estado', '=', 1)->paginate(10);
        return view('admin.usuarios.index')->with('us',$us);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::all()->pluck('paterno','ci');
        return view('admin.usuarios.create')
            ->with('emp',$emp)
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
        //dd($request->all());
        $us = new User($request->all());
        $us->password = bcrypt($request->password);
        //dd($us);
        $us->save();

        //dd('Usuario creado');

        //return redirect()->route('usuarios.index');

         return redirect()->route('users.index')->with('mensaje',"Usuario creado exitosamente!");
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
        $us =User::find($id);
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
        $us =User::find($id);
        // $us->usuario = $request->usuario;
        // $us->id_rol = $request->id_rol;
        $us->fill($request->all());
        $us -> save();
        return redirect()->route('users.index')->with('mensaje',"Usuario modificado exitosamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us =User::find($id);
        $us->estado = '0';
        $us -> save();
        return redirect()->route('users.index')->with('mensaje',"Usuario dado de baja exitosamente!");
    }
    public function baja( $id)
    {
        $us =User::find($id);
        $us->estado = '0';
        $us -> save();
        return redirect()->route('users.index')->with('mensaje',"Usuario dado de baja exitosamente!");
    }
}