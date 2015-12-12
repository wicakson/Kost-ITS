<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';

    public function relation_property_image(){
    	return $this->hasOne('App\Models\Relation_Property_Image','id_images');
    }


}
