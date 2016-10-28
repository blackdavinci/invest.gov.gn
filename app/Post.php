<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'post_titre', 'post_content', 'post_resume','post_statut','secteur_id','post_type','langue_id','post_order','menu_id','user_id','slug','post_parent',
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
                'source' => 'post_titre'
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

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function secteur()
    {
        return $this->belongsTo('App\Secteur');
    }
}
