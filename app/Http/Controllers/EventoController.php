<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $fecha
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $fecha)
    {
        return $fecha;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $fecha
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $fecha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $fecha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $fecha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $fecha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $fecha)
    {
        //
    }
}
