<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Document extends Model
{

	use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doc_nom', 'type_id', 'doc_categorie','slug','doc_statut','doc_utility','langue_id','user_id',
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
                'source' => 'doc_nom'
            ]
        ];
    }

    /**
     *
     * Model Relationships Functions
     * 
     */

    // Obtenir le type auquel appartient le document
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    // 
    public function secteurs()
    {
        return $this->belongsToMany('App\Secteur');
    }

    public function filieres()
    {
        return $this->belongsToMany('App\Filiere');
    }

    // Obtenir la langue de la structure
    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }
    public function projet()
    {
        return $this->belongsTo('App\Projet');
    }
}
