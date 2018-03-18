<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesinventor extends Model
{
    //
    public function profil(){
        return $this->belongTo('App\Profil');
    }
}
