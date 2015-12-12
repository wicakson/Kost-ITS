<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupant extends Model
{
    public $table = 'occupants';

    public function image(){
    	return $this->hasOne('App\Models\Property','id_occupants');
    }
}
