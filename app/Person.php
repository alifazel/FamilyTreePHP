<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	// LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    protected $table = 'persons';
    
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('first_name', 'last_name', 'father_id', 'mother_id', 'dob', 'dod', 'description', 'gender', 'marriage_id');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // Each Person has one User
    public function user()
    {
        return $this->hasOne('App\User');
    }

    // Each Person belongs to many images
    // define our pivot table also
    public function images() {
        return $this->belongsToMany('App\Image', 'persons_images', 'person_id', 'image_id');
    }
}
