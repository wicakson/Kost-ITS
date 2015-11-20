<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contact-us';

    
    public function scopeGet($query){
        return $query->first();
    }

   
    
}
