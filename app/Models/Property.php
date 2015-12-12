<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $table = 'propertys';

    public function occupant(){
    	return $this->belongsTo('App\Models\Occupant','id_occupant');
    }
}
