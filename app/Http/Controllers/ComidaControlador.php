<?php

namespace App\Http\Controllers;

use App\Comida;
use App\User;
use App\Fecha;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class ComidaControlador extends Controller
{
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
        return view('comidas/crearComida');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function show(Comida $comida)
    {
        $usuario = User::find($comida->id_usuario);
        $fechas  = [];
        foreach(Fecha::where("id_comida",$comida->id)->cursor() as $fecha){
            $fechas[] = $fecha;
        }

        $usuComiFechasFotos = array($usuario,$comida, $fechas);
        return view('comidas/verComida')->with('usuComiFotos',$usuComiFechasFotos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function edit(Comida $comida)
    {
        $fechas  = [];
        foreach(Fecha::where("id_comida",$comida->id)->cursor() as $fecha){
            $fecha->fecha = substr(str_replace(" ","T", $fecha->fecha),0,strlen($fecha->fecha)-3);
            $fechas[] = $fecha;
        }
        $arra = array('comida'=>$comida,'fechas'=> $fechas);
        return view('comidas/editarComida')->with('comida',$arra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comida $comida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comida $comida)
    {
        //
    }
    public function reservar($idComida,$usuario,$numUsuarios)
    {
        //
    }
}
