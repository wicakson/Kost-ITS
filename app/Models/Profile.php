<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }
    protected $fillable = ['user_id'];//,'fullname','contact1','contact2','whatsapp','line'];
    protected $table = 'profiles';

    public function scopeInsert($query , $user_id){
    //, $fullname , $contact1 , $contact2 , $whatsapp,$line){
    	//$now = date('Y-m-d H:i:s');
        $query->insert(['user_id' => $user_id] );


        /*

         return $query->insert([
        	'user_id' => $user_id,
        	'fullname' => $fullname,
        	'contact1' => $contact1,
        	'contact2' => $contact2,
        	'whatsapp' => $whatsapp,
        	'line' => $line,
        	'created_at' => $now,
        	'updated_at' => $now] );
        	*/
    }
}
