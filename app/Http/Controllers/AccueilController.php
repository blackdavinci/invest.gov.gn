<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;
use App\Secteur;

class AccueilController extends Controller
{
    public function index($lang){
    	$active = 'accueil';
    	$menus = Menu::where('menu_statut',1)->get();
    	$secteur = Secteur::where('secteur_nom','Mines')->first();
    	return view('guest.home',['active'=>$active,'menus'=>$menus,'langue'=>$lang,'secteur'=>$secteur]);
    }
}
