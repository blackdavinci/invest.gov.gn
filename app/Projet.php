<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Projet extends Model
{

	use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projet_nom', 'projet_cout', 'projet_statut','langue_id','slug','filiere_id'
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
                'source' => 'projet_nom'
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
        return $this->belongsToMany('App\Filiere');
    }

    public function documents()
    {
        return $this->hasMany('App\Document');
    }

    // Obtenir la langue de la structure
    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }

}
