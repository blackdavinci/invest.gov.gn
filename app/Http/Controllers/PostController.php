<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;

use App\Post;
use App\Menu;
use App\Langue;
use App\Secteur;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'posts';
        $posts = Post::where('post_etat',1)->orderBy('updated_at','asc')->get();

        return view('admin.list-posts',['active'=>$active,'posts'=>$posts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'posts';
        $menus = Menu::whereDoesntHave('posts', function ($query) {
                    $query->where('post_type', 1);
                })->where(['menu_etat'=>1,'menu_dad'=>null])->get();
        $secteurs = Secteur::where('secteur_etat',1)->get();
        $langues = Langue::where(['langue_etat'=>1,'langue_statut'=>1])->orderBy('langue_nom_fr','asc')->get();
        return view('admin.create-post',['active'=>$active,'langues'=>$langues,'menus'=>$menus,'secteurs'=>$secteurs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

        $post = Post::create($request->all());
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active = 'posts';
        $post = Post::findOrFail($id);

        return view('admin.detail-post',['active'=>$active,'post'=>$post]);

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
}
