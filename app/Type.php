<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Type extends Model
{

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'type_nom', 'type_statut', 'langue_id',
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

    // Obtenir la langue de la structure
    public function langue()
    {
        return $this->belongsTo('App\Langue');
    }
}
