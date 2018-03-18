<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    //
    public $timestamps = false;

    public function profil(){
    	return $this->belongsToMany('App\Profil','voter_profil')->withPivot('token','status');
    }
}
