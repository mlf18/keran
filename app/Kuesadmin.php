<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesadmin extends Model
{
    public function admin()
    {
    	return $this->belongsTo('App\Admin');
    }
}
