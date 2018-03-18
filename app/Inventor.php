<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventor extends Model
{
    //
    public function profil(){
        return $this->belongTo('App\Profil');
    }
}
