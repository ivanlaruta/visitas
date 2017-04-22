<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Empleado;
use Illuminate\Support\Facades\Auth;

use DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $us = User::where('estado', '=', 1)->orderBy('usuario','ASC')->paginate(100);
        return view('admin.usuarios.index')->with('us',$us);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicacion = Auth::user()->empleado->id_ubicacion;

        $emp = Empleado::orderBy('paterno','ASC')
                    ->select('ci', 'nombre','paterno')
                    ->where('id_ubicacion', $ubicacion )
                    ->where('estado','1')
                    ->get();

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
        $us ->creado_por = Auth::user()->usuario;
        $us ->modificado_por = Auth::user()->usuario;
        //dd($us);


        if(is_null(User::find($request->usuario)))
        {
            $us->save();
            return redirect()->route('users.index')->with('mensaje',"Usuario creado exitosamente!");
        }
        else
        {
            return redirect()->route('user.create')->with('mensaje2',"Error!. Este usuario ya existe.");
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
        $us->id_rol = $request->id_rol;
        $us->password = bcrypt($request->password);
        $us ->modificado_por = Auth::user()->usuario;
        //$us->fill($request->all());
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
        $us ->modificado_por = Auth::user()->usuario;
        $us -> save();
        return redirect()->route('users.index')->with('mensaje',"Usuario dado de baja exitosamente!");
    }
}