<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Secteur extends Model
{

	use Sluggable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

    protected $fillable = [
        'secteur_nom', 'secteur_presentation', 'secteur_resume','langue_id','secteur_statut','slug','secteur_etat','secteur_img','menu_id'
    ];

     /**
      * Return the sluggable configuration array for this model.
      *
      * @return array
      */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'secteur_nom'
             ]
         ];
     }

     /**
     *
     * Model Relationships Functions
     * 
     */

   
    public function filieres()
    {
        return $this->hasMany('App\Filiere');
    }

    // 
    public function documents()
    {
        return $this->belongsToMany('App\Document');
    }

    // Obtenir la langue de la structure
    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

     public function structures()
    {
        return $this->hasMany('App\Structure');
    }

}
