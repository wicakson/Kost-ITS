<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relation_Property_Image extends Model
{
    public $table = 'relation_property_image';

    public function image(){
    	return $this->belongsTo('App\Models\Image','id_images');
    }


}
