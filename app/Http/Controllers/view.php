<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Contact as Contact;
use Socialite;
use App\Http\Controllers\AuthenticateUser;
use Session;
use DB;
Use App\Models\Profile as Profile;
use Input;
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


    public function upload_map(){
        $lat = $_GET['lat'];
        $lng = $_GET['lng'];
        $heading = $_GET['heading'];
        $pitch = $_GET['pitch'];
        $now = date('Y-m-d H:i:s');
        DB::table('maps')->insert(['id_propertys'=>Session::get('id_property'),'lat'=>$lat,'lng'=>$lng,
            'heading'=>$heading,'pitch'=>$pitch,'created_at'=>$now,'updated_at'=>$now]);
        return view('index');
    }

    public function submit_upload(){
        $fullname = $_POST['fullname'];
        $contact1 = $_POST['contact1'];
        $contact2 = $_POST['contact2'];
        $whatsapp = $_POST['whatsapp'];
        $line = $_POST['line'];

        //echo "full name ".$fullname."<br>contact1 ".$contact1."<br>contact2 ".$contact2."<br>wa ".$whatsapp."<br>line ".$line;
        $user_id = Session::get('id');
        echo $user_id;
        $now = date('Y-m-d H:i:s');
        DB::table('profiles')->insert(['user_id' => $user_id,'fullname' =>$fullname,'contact1'=>$contact1,'contact2'=>$contact2,
            'whatsapp'=>$whatsapp,'line'=>$line,'created_at'=>$now,'updated_at'=>$now]);

        //$query = Profile::Insert($user_id);//,$fullname,$contact1,$contact2,$whatsapp,$line);
        for($i=1;$i<=3;$i++){
            $temp = 'occupants'.$i;
            $waca = $_POST[$temp];
            if($waca){
                $occupants = $i;
            }
        }

        for($i=1;$i<=3;$i++){
            $temp = 'periods'.$i;
            $waca = $_POST[$temp];
            if($waca){
                $periods = $i;
            }
        }

        $alamat = $_POST['alamat'];
        $pos = $_POST['pos'];
        $luas = $_POST['luas'];
        $jumlahkamartersedia = $_POST['jumlahkamartersedia'];
        $jumlahkamar = $_POST['jumlahkamar'];
        $biayaharian = $_POST['biayaharian'];
        $biayabulanan = $_POST['biayabulanan'];
        $biayatahunan = $_POST['biayatahunan'];

        $property = DB::table('propertys')->insertGetId(['user_id'=>$user_id, 'alamat'=>$alamat,'pos'=>$pos,'luas'=>$luas,'jumlahkamartersedia'=>$jumlahkamartersedia,
           'jumlahkamar'=>$jumlahkamar,'biayaharian'=>$biayaharian,'biayabulanan'=>$biayabulanan,'biayatahunan'=>$biayatahunan,
          'id_occupant'=>$occupants,'id_period'=>$periods,'created_at'=>$now,'updated_at'=>$now
         ]);

        Session::put('id_property',$property);
        
        //echo "alamat".$alamat."<br>pos ".$pos."<br>luas ".$luas."<br>jumlahkamartersedia ".$jumlahkamartersedia."<br>jumlahkamar ".
        //$jumlahkamar."<br>biayaharian ".$biayaharian."<br>biayabulanan ".$biayabulanan."<br>biayatahunan ".$biayatahunan;
        for($i=1;$i<=10;$i++){
            $temp = 'facilitis'.$i;
            $waca = $_POST[$temp];
            echo $waca;
            if($waca == TRUE){
                
                echo $i;
                DB::table('relation_property_facility')->insert(['id_facilities'=>$i,'id_propertys'=>$property]);
            }
        }
        
        return view('upload-2'); 
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function userHasLoggedIn($user) {
        \Session::flash('message', 'Welcome, ' . $user->username);
        return redirect('/');
    }

    public function upload(){
        $facilitys = DB::table('facilities')->get();
        $periods = DB::table('periods')->get();
        $occupants = DB::table('occupants')->get();
        return view('upload')
            ->with('facilitys',$facilitys)
            ->with('periods',$periods)
            ->with('occupants',$occupants)
            ->with('i',0);
    }

    public function login(AuthenticateUser $authenticateUser, Request $request, $provider = null){
        return $authenticateUser->execute($request->all(), $this, $provider);
           
/*
        $current = Socialite::driver('facebook')->user();

        // OAuth Two Providers
        $token = $current->token;

        // OAuth One Providers
        //$token = $user->token;
        //$tokenSecret = $user->tokenSecret;

        // All Providers
        $id = $current->getId();
        $nick = $current->getNickname();
        $name = $current->getName();
        $email = $current->getEmail();
        $ava = $current->getAvatar();

        return view('index')
            ->with('email',$email)
            ->with('token',$token)
            ->with('id',$id)
            ->with('nick',$nick)
            ->with('name',$name)
            ->with('ava',$ava);
            */
    }

    
}
