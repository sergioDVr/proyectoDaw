<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Evento;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }

    public function misMenus(Request $request)
    {
        $auth = app()->make('auth');
        $menus = [];
        foreach (Menu::where('id_usuario', $auth->user()->id)->cursor() as $menu) {
            $menus[] = $menu;
        }
        return view('home.misMenus')->with('menus', $menus);
    }


    public function misEventosPublicados()
    {
        $auth = app()->make('auth');

        $eventosActivos = DB::select("select * from eventos e, menus m where e.id_menu= m.id and id_usuario=? and fecha > now()",[$auth->user()->id]);
        $eventosPasados = DB::select("select * from eventos e, menus m where e.id_menu= m.id and id_usuario=? and fecha < now()",[$auth->user()->id]);

        $eventos = ['activos'=>$eventosActivos, 'pasados'=>$eventosPasados];

        return view('home.misEventosPublicados')->with("eventos", $eventos);
    }

    public function misEventosReservados()
    {
        $auth = app()->make('auth');

        $eventosActivos = DB::select("select * from eventos e, menus m, reservas r where e.id_menu= m.id and r.id_evento=e.id and r.id_usuario=? and fecha > now()",[$auth->user()->id]);
        $eventosPasados = DB::select("select * from eventos e, menus m, reservas r where e.id_menu= m.id and r.id_evento=e.id and r.id_usuario=? and fecha < now()",[$auth->user()->id]);

        $eventos = ['activos'=>$eventosActivos, 'pasados'=>$eventosPasados];
        return view('home.misEventosReservados')->with("eventos", $eventos);
    }
}
