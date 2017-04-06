<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visita;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $vi = Visita::where('estado_visita', '=', 1)->Search($request->ci)->orderBy('id_visita')->paginate(8);
        return view('ope.visitas.index')->with('vi',$vi);
        //dd($vi->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ope.visitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
        //
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
        //
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

    public function salida( $id)
    {
        date_default_timezone_set('America/La_Paz');
        $time = time();
        $vi =Visita::find($id);
        $vi->estado_visita = '0';
        $vi->hora_salida = date("H:i:s", $time);
        // echo ("Según el servidor la hora actual es: ". date("H:i:s", $time));
        $vi -> save();
        return redirect()->route('visitas.index')->with('mensaje',"visita se marco como terminada a hrs:".date("H:i:s", $time));
    }
}

