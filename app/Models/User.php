<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Auth;
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
	protected $fillable = ['username', 'name', 'provider_id', 'email', 'avatar','active'];
    public function profiles()
    {
        return $this->hasMany('Profile');
    }

    public function getAuthIdentifier(){

    }
    public function getRememberToken(){

    }
    public function getAuthPassword(){

    }

    public function setRememberToken($value){

    }
    public function getRememberTokenName(){

    }
    public function getEmailForPasswordReset(){

    }
    public function can($ability, $arguments = Array()){

    }
}
