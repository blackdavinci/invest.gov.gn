<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        // return redirect(route('accueil.index'),['lang'=>$lang]);
        $active = 'accueil';
        $menus = Menu::where('menu_statut',1)->get();
        return view('guest.home',['active'=>$active,'menus'=>$menus]);
    }
}
