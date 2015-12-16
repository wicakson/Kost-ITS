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
use App\Models\Image as Image;
use App\Models\Relation_Property_Image as Relation_Property_Image;
use App\Models\Facility as Facility;
use App\Models\Relation_Property_Facility as Relation_Property_Facility;
use App\Models\Occupant as Occupant;
use App\Models\Property as Property;
use Input;
use Redirect;

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
        $user_id = Session::get('id');
        $property_id = DB::table('propertys')->where('user_id',$user_id)->first()->id;
        $lat = $_POST['lat'];
        $lng = $_POST['lng'];
        $heading = $_POST['heading'];
        $pitch = $_POST['pitch'];
        $now = date('Y-m-d H:i:s');
        DB::table('maps')->insert(['id_propertys'=>$property_id,'lat'=>$lat,'lng'=>$lng,
            'heading'=>$heading,'pitch'=>$pitch,'created_at'=>$now,'updated_at'=>$now]);
        return Redirect::to('detail')->with('property_id',$property_id);
    }

    public function detail($property_id = null ){
       
        
        $property = Property::where('id',$property_id)->first();
        $facility = Facility::get();
        $relation_property_facility =  Relation_Property_Facility::where('id_propertys',$property_id)->get();
        
       
        $pengelola = $property->user_id;
        $profile = DB::table('profiles')->where('user_id',$pengelola)->first();
        $occupant = Occupant::get();
        $map = DB::table('maps')->where('id_propertys',$property_id)->first();

        $image = Image::get();
        $relation_property_image = Relation_Property_Image::where('id_propertys',$property_id)->get();
        $period = DB::table('periods')->get();
        $relation_property_period = DB::table('relation_property_period')->where('property_id',$property_id)->get();

        //$temp = $relation_property_image->image;

        
                    
        $first_image =  $relation_property_image->first()->image->path;
     
        return view('detail')
            ->with('property',$property)
            ->with('facility',$facility)
            ->with('relation_property_facility',$relation_property_facility)
            ->with('profile',$profile)
            ->with('occupant',$occupant)
            ->with('map',$map)
            ->with('image',$image)
            ->with('relation_property_image',$relation_property_image)
            ->with('period',$period)
            ->with('relation_property_period',$relation_property_period)
            ->with('i',0);
    }

    public function upload_1(){
        if (!(Session::has('id'))) {
            return Redirect::to('/');
        }
       
        return Redirect::to('view_upload_1');
    }

    public function view_upload_1(){
        $facilitys = DB::table('facilities')->get();
        $occupants = DB::table('occupants')->get();
        $periods = DB::table('periods')->get();
        return view('upload')
            ->with('facilitys',$facilitys)
            ->with('occupants',$occupants)
            ->with('periods',$periods)
            ->with('i',0);
    }

    public function submit_upload_1(){
        
        $fullname = $_POST['fullname'];
        $contact1 = $_POST['contact1'];
        $contact2 = $_POST['contact2'];
        $whatsapp = $_POST['whatsapp'];
        $line = $_POST['line'];

        $user_id = Session::get('id');
        
        $now = date('Y-m-d H:i:s');
        DB::table('profiles')->insert(['user_id' => $user_id,'fullname' =>$fullname,'contact1'=>$contact1,'contact2'=>$contact2,
            'whatsapp'=>$whatsapp,'line'=>$line,'created_at'=>$now,'updated_at'=>$now]);

        $occupants = $_POST['occupants'];
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
            'id_occupant'=>$occupants,'created_at'=>$now,'updated_at'=>$now
         ]);

        Session::put('id_property',$property);
        


        
        for($i=1;$i<=3;$i++){
            $temp = 'periods'.$i;
            $waca = $_POST[$temp];
            if($waca == TRUE ){
                DB::table('relation_property_period')->insert(['period_id'=>$i,'property_id'=>$property]);
            }
        }

        //echo "alamat".$alamat."<br>pos ".$pos."<br>luas ".$luas."<br>jumlahkamartersedia ".$jumlahkamartersedia."<br>jumlahkamar ".
        //$jumlahkamar."<br>biayaharian ".$biayaharian."<br>biayabulanan ".$biayabulanan."<br>biayatahunan ".$biayatahunan;
        for($i=1;$i<=10;$i++){
            $temp = 'facilitis'.$i;
            $waca = $_POST[$temp];
            if($waca == TRUE){
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
