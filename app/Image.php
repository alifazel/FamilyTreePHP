<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	// MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these attributes able to be filled
    protected $fillable = array('url', 'url_thumb', 'description', 'date_taken');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // Each Image belongs
    public function person() {
        return $this->belongsToMany('App\Person', 'persons_images', 'image_id', 'person_id');
    }
}
