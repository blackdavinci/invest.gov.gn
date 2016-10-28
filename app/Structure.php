<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Structure extends Model
{
    
	use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'structure_nom','rue', 'quartier', 'commune','ville','longitude','altitude','langue_id','secteur_id','tel1','email','web','structure_statut','slug',
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
                'source' => 'structure_nom'
            ]
        ];
    }

     /**
     *
     * Model Relationships Functions
     * 
     */

    // Obtenir la langue de la structure
    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }

    public function secteur()
    {
        return $this->belongsTo('App\Secteur');
    }
    
}
