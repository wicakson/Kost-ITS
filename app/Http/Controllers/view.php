<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Contact as Contact;
use Socialite;

class view extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact_us()
    {
        $query = Contact::get();
        return view('contact-us')
            ->with('contact',$query);
    }

    public function loginfb(){
        $user = Socialite::driver('facebook')->user();

        // OAuth Two Providers
        $token = $user->token;

        // OAuth One Providers
        $token = $user->token;
        //$tokenSecret = $user->tokenSecret;

        // All Providers
        $user->getId();
        $user->getNickname();
        $user->getName();
        $email = $user->getEmail();
        $user->getAvatar();

        return view('index')->with('email',$email);
    }

    
}
