<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    //
    public function profil(){
        return $this->belongsTo('App\Profil');
    }
}
