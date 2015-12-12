<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
	public $table = 'facilities';

    public function relation_property_facility(){
    	return $this->hasOne('App\Models\Relation_Property_Facility','id_facilities');
    }
}
