<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Guard; 
use Laravel\Socialite\Contracts\Factory as Socialite; 
use App\Http\Controllers\UserRepository; use Request; 
use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;
use Auth;
use Session;


class AuthenticateUser{     

     private $socialite;
     private $auth;
     private $users;

     public function __construct(Socialite $socialite, Guard $auth, UserRepository $users) {   
        $this->socialite = $socialite;
        $this->users = $users;
        $this->auth = $auth;
    }

    public function execute($request, $listener, $provider) {
        if (!$request) return $this->getAuthorizationFirst($provider);
        $user = $this->users->findByUserNameOrCreate($this->getSocialUser($provider));

        //$this->auth->login($user, true);
        
        //Auth::login($user)){
         echo $user;
         Session::put('id',$user['id']);
         Session::put('name',$user['name']);
         Session::put('email',$user['email']);
         Session::put('avatar',$user['avatar']);

        

        
        return redirect('/');
       //return $listener->userHasLoggedIn($user);
    }

    private function getAuthorizationFirst($provider) { 
        return $this->socialite->driver($provider)->redirect();
    } 
    private function getSocialUser($provider) {
        return $this->socialite->driver($provider)->user();
    }

}