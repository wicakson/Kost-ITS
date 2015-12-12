<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relation_Property_Facility extends Model
{
    public $table = 'relation_property_facility';

    public function facility(){
    	return $this->belongsTo('App\Models\Facility','id_facilities');
    }
}
