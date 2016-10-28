<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Menu extends Model
{
    use Sluggable;

    protected $fillable = [
            'menu_nom', 'menu_code', 'menu_order','menu_parent','menu_statut','menu_niveau','langue_id','slug','menu_icon','menu_dad','menu_etat'
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
                'source' => 'menu_nom'
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

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function secteur()
    {
        return $this->hasOne('App\Secteur');
    }

}  
