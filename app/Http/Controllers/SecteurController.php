<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateSecteurRequest;

use App\Secteur;
use App\Menu;
use App\Langue;
use App\Structure;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'secteurs';
        $secteurs = Secteur::where('secteur_etat',1)->orderBy('updated_at','asc')->get();
        return view('admin.list-secteurs',['active'=>$active,'secteurs'=>$secteurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'secteurs';
        $menus = Menu::where('menu_etat',1)->get();
        $langues = Langue::where(['langue_etat'=>1,'langue_statut'=>1])->orderBy('langue_nom_fr','asc')->get();
        return view('admin.create-secteur',['active'=>$active,'langues'=>$langues,'menus'=>$menus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSecteurRequest $request)
    {


        // Si Secteur défini comme Menu - Création du Menu
        if($request->has('menu_id')){

            // $count = Menu::where(['menu_etat'=>1,'menu_nom'=>$request->secteur_nom])->count();
            // if($count==1){
            //     return back() ->withInput()->withErrors('Menu déjà existant');
            // }
            $menu = Menu::create(['menu_nom'=>$request->secteur_nom,'langue_id'=>$request->langue_id]);

            // Ajout du Menu par Codification 
                $menuparent = Menu::findOrFail($request->menu_id);

                if($menuparent->menu_parent==null){
                    /* Si le Menu Parent choisi est un Menu Principal
                        alors le menu parent de ce menu est : ID_MENU_PARENT+A
                    */

                    $menu->update(['menu_parent' => $request->menu_id,'menu_niveau'=>2]); 
                    $menu->save();

                    $menuparent->update(['menu_dad'=> 1]);
                    $menuparent->save();
                }elseif($menuparent->menu_niveau==2){
                    /* Si le Menu Parent choisi est un Sous-Menu
                        alors le menu parent de ce menu est : ID_MENU_PARENT+B
                    */
                    $menu->update(['menu_parent' => $request->menu_id,'menu_niveau'=>3]); 
                    $menu->save();

                    $menuparent->update(['menu_dad'=> 1]);
                    $menuparent->save();

                }elseif($menuparent->menu_niveau==3){
                    /* Si le Menu Parent choisi est un Sous-Sous-Menu
                        alors le menu parent de ce menu est : ID_MENU_PARENT+C
                    */
                    $menu->update(['menu_parent' => $request->menu_id,'menu_niveau'=>4]); 
                    $menu->save();

                    $menuparent->update(['menu_dad'=> 1]);
                    $menuparent->save();
                }
        }


        // Création du Secteur
        $secteur = Secteur::create($request->all());

        // Upload de l'image d'illustration si jointe. 
    if(isset($request->secteur_img)){
        if ($request->file('secteur_img')->isValid()) {
            $extension = $request->secteur_img->extension();
            $path = $request->secteur_img->storeAs('images', $request->secteur_nom.str_random(2).'.'.$extension);
            $secteur->update(['secteur_img'=>$path]);
            $secteur->save();
        }
    }
       

       // Mise à jour du champ Menu si Secteur défini comme Menu
        if($request->has('menu_id')){
            $secteur->menu_id = $request->menu_id;
            $secteur->save();
        }
   
        return redirect(route('secteurs.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active = 'secteurs';
        $secteur = Secteur::with('langue')->findOrFail($id);

        return view('admin.detail-secteur',['active'=>$active,'secteur'=>$secteur]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'secteurs';
        $secteur = Secteur::findOrFail($id);
        $menus = Menu::where('menu_etat',1)->get();
        $langues = Langue::where(['langue_etat'=>1,'langue_statut'=>1])->orderBy('langue_nom_fr','asc')->get();
        return view('admin.edit-secteur',['secteur'=>$secteur,'active'=>$active,'langues'=>$langues,'menus'=>$menus]);

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
      
        $secteur = Secteur::findOrFail($id);
        $secteur->update($request->all());

         // Si Secteur défini comme Menu - Création du Menu
        if($secteur->menu_id==null && $request->has('menu_id')){

             $menu = Menu::create(['menu_nom'=>$request->secteur_nom,'langue_id'=>$request->langue_id]);

             // Ajout du Menu par Codification 
                 $menuparent = Menu::findOrFail($request->menu_id);

                 if($menuparent->menu_parent==null){
                     /* Si le Menu Parent choisi est un Menu Principal
                         alors le menu parent de ce menu est : ID_MENU_PARENT+A
                     */

                     $menu->update(['menu_parent' => $request->menu_id,'menu_niveau'=>2]); 
                     $menu->save();

                     $menuparent->update(['menu_dad'=> 1]);
                     $menuparent->save();
                 }elseif($menuparent->menu_niveau==2){
                      /* Si le Menu Parent choisi est un Sous-Menu
                         alors le menu parent de ce menu est : ID_MENU_PARENT+B
                      */
                     $menu->update(['menu_parent' => $request->menu_id,'menu_niveau'=>3]); 
                     $menu->save();

                     $menuparent->update(['menu_dad'=> 1]);
                     $menuparent->save();

                 }elseif($menuparent->menu_niveau==3){
                     /* Si le Menu Parent choisi est un Sous-Sous-Menu
                         alors le menu parent de ce menu est : ID_MENU_PARENT+C
                     */
                     $menu->update(['menu_parent' => $request->menu_id,'menu_niveau'=>4]); 
                     $menu->save();

                     $menuparent->update(['menu_dad'=> 1]);
                     $menuparent->save();
                 }
                 
             $secteur->menu_id = $request->menu_id;
             $secteur->save();

        }
       
         // Upload de l'image d'illustration si jointe. 
        if(isset($request->secteur_img)){
         if ($request->file('secteur_img')->isValid()) {
             $extension = $request->secteur_img->extension();
             $path = $request->secteur_img->storeAs('images', $request->secteur_nom.str_random(2).'.'.$extension);
             $secteur->update(['secteur_img'=>$path]);
             $secteur->save();
         }
        }
        // Mise à jour du champ Menu si Secteur défini comme Menu
         // if($request->has('menu_id')){
         //     $secteur->menu_id = $menu->id;
         //     $secteur->save();
         // }
        
         return redirect(route('secteurs.show',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secteur = Secteur::findOrFail($id);
        $secteur->update(['secteur_etat'=>0]);
        $secteur->save();
        return redirect(route('secteurs.index'));
    }
}
