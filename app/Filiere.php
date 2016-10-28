<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Filiere extends Model
{

	use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filiere_nom', 'filiere_presentation', 'filiere_resume','slug','secteur_id','filiere_statut','langue_id',
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
                'source' => 'filiere_nom'
            ]
        ];
    }


     /**
     *
     * Model Relationships Functions
     * 
     */

    // Obtenir le secteur auquel appartient la filière
    public function secteur()
    {
        return $this->belongsTo('App\Secteur');
    }

    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }


    public function documents()
    {
        return $this->belongsToMany('App\Document');
    }

    public function projets()
    {
        return $this->belongsToMany('App\Projet');
    }
}
