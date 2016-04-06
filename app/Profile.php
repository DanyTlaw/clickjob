<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Relationship -> Profil belongts to a User
    public function user(){
    	return $this->belongtsTo('App\User');
    }

    // Makes data fillable for massasignment
    protected $fillable = [
    	'profle_picture_url', 'title', 'first_name', 'last_name', 'place', 'street', 'zip', 'birthyear', 'nationality', 'tel'
    ];
}
