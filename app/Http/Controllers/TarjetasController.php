<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarjeta;
use App\Empleado;
use App\Parametrica;
class TarjetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ta = Tarjeta::where('estado', '=', 1)->paginate(10);
        return view('admin.tarjetas.index')->with('ta',$ta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $empleados = Empleado::all(['ci', 'nombre','paterno']);
        $tipo = Parametrica::where('nombre_tabla','TIPO_TAR')->orderBy('id','ASC')->pluck('descripcion','descripcion');

        return view('admin.tarjetas.create')
            ->with('empleados',$empleados)
             ->with('tipo',$tipo)
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
        $ta = new Tarjeta($request->all());
        $ta->save();

         return redirect()->route('tarjetas.index')->with('mensaje',"Tarjeta creada exitosamente!");
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
        $empleados = Empleado::all(['ci', 'nombre','paterno']);
        $tipo = Parametrica::where('nombre_tabla','TIPO_TAR')->orderBy('id','ASC')->pluck('descripcion','descripcion');
         $ta =Tarjeta::find($id);

        return view('admin.tarjetas.edit')
            ->with('ta',$ta)
            ->with('empleados',$empleados)
            ->with('tipo',$tipo)
        ;

      
       
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
        $ta =Tarjeta::find($id);
        $ta->fill($request->all());
        $ta -> save();
        return redirect()->route('tarjetas.index')->with('mensaje',"Tarjeta modificado exitosamente!");
    }
    public function baja($id)
    {
       $ta =Tarjeta::find($id);
       $ta->estado = '0';
       $ta -> save();
       return redirect()->route('tarjetas.index')->with('mensaje',"Tarjeta dado de baja exitosamente!");
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
