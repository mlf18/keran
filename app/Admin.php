<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public function profil(){
        return $this->hasMany('App\Profil');
    }
    public function pengantarkota(){
        return $this->hasMany('App\Pengantarkota');
    }
    public function kuesadmin()
    {
        return $this->hasMany('App\Kuesadmin');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
