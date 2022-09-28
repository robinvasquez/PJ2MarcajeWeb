<?php

namespace App\Http\Controllers;

use App\Models\Marcaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcajeController extends Controller
{
    public function obtenerDetalle(){
        return Marcaje::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marcajeD = new Marcaje();

        $marcajeD->usuario_id = $request->usuario_id;
        $marcajeD->tipo_marcaje_id = $request->tipo_marcaje_id;
        $marcajeD->fecha = $request->fecha;
        $marcajeD->hora = $request->hora;
        $marcajeD->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function show($idMarcaje)
    {
        $marcajeD = Marcaje::find($idMarcaje);
        return $marcajeD;
    }
    public function showByuser($id,$fecha)
    {
        $marcajeD = DB::table('tt_marcaje_detail')->where('usuario_id', $id)->where('fecha',$fecha)->get();
        return $marcajeD;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Marcaje $marcaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marcaje $marcaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcaje $marcaje)
    {
        //
    }
}
