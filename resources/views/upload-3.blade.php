@extends('layout.master')
@section('title','form 3')
@section('head')
	<link rel="stylesheet" href="{{url()}}/assets/jquery.splitter.css">
    <script src="{{url()}}/assets/jquery.splitter.js"></script>
	<script type="text/javascript" src="{{url()}}/assets/jquery.form.js"></script>
	<script type="text/javascript">

		function initMap() {
			var myCenter = new google.maps.LatLng(-7.270720622519107, 112.7955775255208);
	    	var mapProp = {
				    center: myCenter,
				    zoom:18,
				    draggable: true,
	      			scrollwheel: false,
	      			mapTypeControl: false,
				    mapTypeId: google.maps.MapTypeId.ROADMAP
			  	};

			var map = new google.maps.Map(document.getElementById("map"),mapProp);
			var panorama = new google.maps.StreetViewPanorama(
			      document.getElementById('pano'), {
			        position: myCenter,
			        visible: true
			      });

			panorama.setPov({
			    heading: -160.88039552062182,
			    pitch:-1.9802182077025277
			});
			
			map.setStreetView(panorama);

			

			
			panorama.addListener('position_changed', function() {
			    
				var lat = document.getElementById('lat');
				lat.value = panorama.position.lat() +'' ;   

				var lng = document.getElementById('lng');
			    lng.value = panorama.position.lng() +'';
			});
			var headingCell = document.getElementById('heading-cell');
			    var pitchCell = document.getElementById('pitch-cell');
			panorama.addListener('pov_changed', function() {
			    
			    headingCell.value = panorama.getPov().heading + '';
			    pitchCell.value = panorama.getPov().pitch + '';
			});

			headingCell.value = panorama.getPov().heading + '';
			pitchCell.value = panorama.getPov().pitch + '';
		  
		}

    </script>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAcNwxRT22cVHKWUpERpYT-44uxjagsjE&libraries=places&callback=initMap&signed_in=true">
    </script>
@endsection
@section('content')
    		<md-card>
		      <md-card-content>
		        <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="{{url()}}/upload_map">
			        {!! csrf_field() !!}
			        <h4>Peta</h4>
			        <div style="text-align:center;">
					    <md-card>
					    	<div id="map" style="height: 100%;width: 100%;" ></div>
					    	<div id="pano" style="height: 100%;width: 80%;" ></div>
						    <input type="text" id='lat' name="lat" value='waca'>
						    <input type="text" id='lng' name="lng" value='waca'>
						    <input type="text" id='heading-cell' name="heading" value='waca'>
						    <input type="text" id='pitch-cell' name="pitch" value='waca'>
					    </md-card>
				    </div>
			        <br>
			        <md-button type="submit" class="md-raised pull-right">
		            	<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
		            	Finish
		         	</md-button>
	    		
		      </md-card-content>
		    </md-card>
@endsection		    