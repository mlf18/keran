<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function admin(){
        return $this->belongsTo('App\Admin');
    }
    public function inventor(){
        return $this->hasMany('App\Inventor');
    }
    public function proposal(){
        return $this->hasMany('App\Proposal');
    }
    public function kuesinventor(){
        return $this->hasOne('App\Kuesinventor');
    }
    public function voter(){
        return $this->belongsToMany('App\Voter','voter_profil');
    }
}
