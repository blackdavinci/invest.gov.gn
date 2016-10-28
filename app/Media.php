<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Media extends Model
{

	use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'media_titre', 'media_description', 'media_type','media_source','media_lien','slug','media_statut',
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
                'source' => 'media_titre'
            ]
        ];
    }

    /**
     *
     * Model Relationships Functions
     * 
     */

    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }
}
