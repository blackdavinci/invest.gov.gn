<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = [
            'langue_nom_en', 'langue_nom_fr', 'langue_pays_code','langue_code','langue_statut','langue_etat',
        ];

     /**
     *
     * Model Relationships Functions
     * 
     */

    
    public function documents()
    {
        return $this->hasMany('App\Document');
    }

    public function filieres()
    {
        return $this->hasMany('App\Filiere');
    }

    public function medias()
    {
        return $this->hasMany('App\Media');
    }

    public function menus()
    {
        return $this->hasMany('App\Menu');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function projets()
    {
        return $this->hasMany('App\Projet');
    }

    public function secteurs()
    {
        return $this->hasMany('App\Secteur');
    }

    public function structures()
    {
        return $this->hasMany('App\Structure');
    }

    public function types()
    {
        return $this->hasMany('App\Type');
    }

   
}
