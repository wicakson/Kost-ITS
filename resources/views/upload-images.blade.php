<?php 
use \DB;
use \Session;
if($_POST['image_form_submit'] == 1)
{

	
	$images_arr = array();

	foreach($_FILES['images']['name'] as $key=>$val){
		
		$user_id = Session::get('id');
		$property_id = DB::table('propertys')->where('user_id',$user_id)->first()->id;
		
		
		$temp = DB::table('relation_property_image')->where('id_propertys',$property_id)->count();
		$image_name = $property_id.$temp.".jpg";

		
		//$image_name = $_FILES['images']['name'][$key];
		$tmp_name 	= $_FILES['images']['tmp_name'][$key];
		$size 		= $_FILES['images']['size'][$key];
		$type 		= $_FILES['images']['type'][$key];
		$error 		= $_FILES['images']['error'][$key];
		
		############ Remove comments if you want to upload and stored images into the "uploads/" folder #############
		
		$target_dir = "assets/uploads/";
		$target_file = $target_dir.$image_name;

		
		if(move_uploaded_file($tmp_name,$target_file)){
			$images_arr[] = $target_file;
			
		}

		

		
		$now = date('Y-m-d H:i:s');
		//Input::file('image')->move($target_dir, $tmp_name); // uploading file to given path
		$id = DB::table('images')->insertGetId([ 'path' => $target_file , 'created_at' => $now , 'updated_at' => $now ]);
		//echo $image_name;

		


		DB::table('relation_property_image')->insert([ 'id_propertys' => $property_id , 'id_images' => $id ,
			'created_at' => $now , 'updated_at' => $now]);		
	
		//echo $target_dir;
		//echo $target_file;
		
		//display images without stored
		//$extra_info = getimagesize($_FILES['images']['tmp_name'][$key]);
    	//$images_arr[] = "data:" . $extra_info["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name'][$key]));
	}

	//Generate images view
	
	if(!empty($images_arr)){ 
		$count=0;
		foreach($images_arr as $image_src){ $count++ ?>
			
			<ul class="reorder_ul reorder-photos-list">
            	<li id="image_li_{{ $count }}" class="ui-sortable-handle">
                	<a href="javascript:void(0);" style="float:none;" class="image_link"><img src="{{ $image_src}}" alt=""></a>
               	</li>
          	</ul>
	<?php }
	}

}

?>
