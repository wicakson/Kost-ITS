@extends('layout.master')
@section('title','form 2')
@section('head')
	<link rel="stylesheet" href="{{url()}}/assets/jquery.splitter.css">
    <script src="{{url()}}/assets/jquery.splitter.js"></script>

    <script type="text/javascript" src="{{url()}}/assets/jquery.form.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			
			$('#images').on('change',function(){
				$('#multiple_upload_form').ajaxForm({
					target:'#images_preview',
					beforeSubmit:function(e){
						$('.uploading').show();
					},
					success:function(e){
						$('.uploading').hide();
					},
					error:function(e){
					}
				}).submit();
			});
		});
	</script>
  </head>
@endsection
@section('content')
        	
    		<md-card>
		      <md-card-content>
		        	<h4>Upload Gambar</h4>
			        <div class="upload_div">
					    <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="{{url()}}/upload-images">
					    	
					    	<input type="hidden" name="image_form_submit" value="1"/>
					            <label>Choose Image</label>
					            <input type="file" name="images[]" id="images" multiple >
					        <div class="uploading none">
					            <label>&nbsp;</label>
					            <img src="{{url()}}/assets/uploading.gif"/>
					        </div>
					    </form>
				    </div>
					
				    <div class="gallery" id="images_preview"></div>
			        <br>
			        
			        <md-button class="md-raised pull-right">
			        <a href="{{url()}}/upload-3"
		            	<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
		            	Next
		         	</md-button>
		         	</a>
		      </md-card-content>
		    </md-card>
@endsection
        
        