<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateMenuRequest;

use App\Menu;
use App\Langue;
use App\Secteur;

use Session;
use Cookie;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $active = 'menus';
        $menus = Menu::where('menu_etat',1)->orderBy('updated_at','asc')->get();
        $langues = Langue::where(['langue_etat'=>1,'langue_statut'=>1])->orderBy('langue_nom_fr','asc')->get();
        return view('admin.list-menus',['active'=>$active,'menus'=>$menus,'langues'=>$langues]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'menus';
        $menus = Menu::where('menu_etat',1)->get();
        $langues = Langue::where(['langue_etat'=>1,'langue_statut'=>1])->orderBy('langue_nom_fr','asc')->get();
        return view('admin.create-menu',['active'=>$active,'langues'=>$langues,'menus'=>$menus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMenuRequest $request)
    {
        $menu = Menu::create($request->all());

        // Ajout du Menu par Codification 
        if($request->has('menu_parent')){

            $menuparent = Menu::findOrFail($request->menu_parent);

            if($menuparent->menu_parent==null){
                /* Si le Menu Parent choisi est un Menu Principal
                    alors le menu parent de ce menu est : ID_MENU_PARENT+A
                */

                $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>2]); 
                $menu->save();

                $menuparent->update(['menu_dad'=> 1]);
                $menuparent->save();
            }elseif($menuparent->menu_niveau==2){
                /* Si le Menu Parent choisi est un Sous-Menu
                    alors le menu parent de ce menu est : ID_MENU_PARENT+B
                */
                $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>3]); 
                $menu->save();

                $menuparent->update(['menu_dad'=> 1]);
                $menuparent->save();

            }elseif($menuparent->menu_niveau==3){
                /* Si le Menu Parent choisi est un Sous-Sous-Menu
                    alors le menu parent de ce menu est : ID_MENU_PARENT+C
                */
                $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>4]); 
                $menu->save();

                $menuparent->update(['menu_dad'=> 1]);
                $menuparent->save();
            }
            
        }

        return redirect(route('menus.index'));
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
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        $menustatut = $request->menu_statut;
        // Si le menu désactivé à des fils on désactive tous ses fils. 
        if($request->menu_statut==0 && $menu->menu_dad==1){
            $menulist = Menu::where(['menu_parent'=>$id,'menu_etat'=>1])->get();
            foreach ($menulist as $key => $value) {
                $menuson = Menu::findOrFail($value->id);
                $menuson->update(['menu_etat'=>0]);
                $menuson->save();
            }
        }
        
        // Si le menu n'a pas de menu parent défini
        if($request->menu_parent==""){
            $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>1]); 
            $menu->save();
        }

        // Ajout du Menu par Codification 
        if($request->has('menu_parent')){

            $menuparent = Menu::findOrFail($request->menu_parent);


            if($menuparent->menu_parent==null){
                /* Si le Menu Parent choisi est un Menu Principal
                    alors le menu parent de ce menu est : ID_MENU_PARENT+A
                */

                $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>2]); 
                $menu->save();

                $menuparent->update(['menu_dad'=> 1]);
                $menuparent->save();
            }elseif($menuparent->menu_niveau==2){
                /* Si le Menu Parent choisi est un Sous-Menu
                    alors le menu parent de ce menu est : ID_MENU_PARENT+B
                */
                $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>3]); 
                $menu->save();

                $menuparent->update(['menu_dad'=> 1]);
                $menuparent->save();

            }elseif($menuparent->menu_niveau==3){
                /* Si le Menu Parent choisi est un Sous-Sous-Menu
                    alors le menu parent de ce menu est : ID_MENU_PARENT+C
                */
                $menu->update(['menu_parent' => $request->menu_parent,'menu_niveau'=>4]); 
                $menu->save();

                $menuparent->update(['menu_dad'=> 1]);
                $menuparent->save();
            }
            
        }
        

        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menus = Menu::where(['menu_parent'=>$id,'menu_etat'=>1])->get();
        $secteurs = Secteur::where(['menu_id'=>$id,'secteur_etat'=>1])->get();
        foreach ($menus as $key => $value) {
            $menuson = Menu::findOrFail($value->id);
            $menuson->update(['menu_etat'=>0]);
            $menuson->save();
        }
        foreach ($secteurs as $key => $value) {
            $secteur = Secteur::findOrFail($value->id);
            $secteur->update(['menu_id'=>null]);
            $secteur->save();
        }
        $menu->update(['menu_etat'=>0]);
        $menu->save();
        return redirect(route('menus.index'));
        
    }
}
