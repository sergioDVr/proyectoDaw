<?php

namespace App\Http\Controllers;

use App\Menu;
use App\User;
use App\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class MenuControlador extends Controller
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
        return view('menus/crearComida');
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
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $usuario = User::find($menu->id_usuario);
        $fechas  = [];
        foreach(Evento::where("id_comida",$menu->id)->cursor() as $fecha){
            $fechas[] = $fecha;
        }

        $usuComiFechasFotos = array($usuario,$menu, $fechas);
        return view('menus/verComida')->with('usuComiFotos',$usuComiFechasFotos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $fechas  = [];
        foreach(Evento::where("id_comida",$menu->id)->cursor() as $fecha){
            $fecha->fecha = substr(str_replace(" ","T", $fecha->fecha),0,strlen($fecha->fecha)-3);
            $fechas[] = $fecha;
        }
        $arra = array('comida'=>$menu,'fechas'=> $fechas);
        return view('menus/editarComida')->with('comida',$arra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
    public function reservar($idComida,$usuario,$numUsuarios)
    {
        //
    }

}
