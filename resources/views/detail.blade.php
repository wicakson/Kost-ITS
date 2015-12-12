@extends('layout.master')
@section('title','detail')
@section('head')
	<link rel="stylesheet" href="{{url()}}/assets/jquery.splitter.css">
    <script src="{{url()}}/assets/jquery.splitter.js"></script>
    <link href="{{url()}}/assets/pgwslideshow/pgwslideshow.min.css" rel="stylesheet">
    <script src="{{url()}}/assets/pgwslideshow/pgwslideshow.min.js"></script>
    <script src="{{url()}}/assets/pgwslideshow/style.js"></script>

    <script type="text/javascript">

		function initMap() {
			var lat = $('#lat').val().trim();
			var lng = $('#lng').val().trim();
			var heading = $('#heading').val().trim();
			var pitch = $('#pitch').val().trim();

			var myCenter = new google.maps.LatLng(lat, lng);
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
			    heading: heading,
			    pitch:pitch
			});
			
			map.setStreetView(panorama);
		}

    </script>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAcNwxRT22cVHKWUpERpYT-44uxjagsjE&libraries=places&callback=initMap&signed_in=true">
    </script>
@endsection
@section('content')
			<input type="hidden" id="lat" value="{{$map->lat}}" />
			<input type="hidden" id="lng" value="{{$map->lng}}" />
			<input type="hidden" id="pitch" value="{{$map->pitch}}" />
			<input type="hidden" id="heading" value="{{$map->heading}}" />
    		<ul class="pgwSlideshow">
    			@foreach($relation_property_image as $relation)
	    			
	    				<li>
					        <a href="" target="_blank">
					            <img src="{{url()}}/{{$relation->image->path}}" alt="">
					        </a>
					    </li>
	    			
	    		@endforeach	
			    
			</ul>

    		<div ng-controller="CardCtrl">
    			<md-card>
			      <md-card-content style="padding:0px;">
			        <md-tabs md-dynamic-height md-border-bottom>
				      <md-tab label="Info Properti">
				        <md-content class="md-padding">

				          <h4>Alamat</h4>
				          <p>{{$property->alamat}}</p>
				          <h4>Kode Pos</h4>
				          <p>{{$property->pos}}</p>
				          <h4>Luas Kamar</h4>
				          <p>{{$property->luas}}</p>
				          <h4>Jumlah Kamar yang Tersedia</h4>
				          <p>{{$property->jumlahkamartersedia}}</p>
				          <h4>Jumlah Kamar</h4>
				          <p>{{$property->jumlahkamar}}</p>
				        </md-content>
				      </md-tab>
				      <md-tab label="Info Pengelola">
				        <md-content class="md-padding">
				          <h4>Nama</h4>
				          <p>{{$profile->fullname}}</p>
				          <h4>Kontak 1</h4>
				          <p>{{$profile->contact1}}8</p>
				          <h4>Kontak 2</h4>
				          <p>{{$profile->contact2}}</p>
				          <h4>Whatsapp</h4>
				          <p>{{$profile->whatsapp}}</p>
				          <h4>Line</h4>
				          <p>{{$profile->line}}</p>
				        </md-content>
				      </md-tab>
				      <md-tab label="Info Fasilitas">
				        <md-content class="md-padding">
				        	<h4>Fasilitas</h4>
				            <div class="row">
				            	@foreach($relation_property_facility as $relation)
					    			<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb1" class="md-primary">
							         {{$relation->facility->name}}
							        </md-checkbox>
					    		@endforeach	
			    			</div>
					        <h4>Jenis Penghuni</h4>
					        <div class="row">
					        	<div class="col-sm-3">
					        		<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb11" class="md-primary">
							          {{$property->occupant->name}}
							        </md-checkbox>
					        	</div>
					        </div>
				        </md-content>
				      </md-tab>
				      <md-tab label="Info Biaya">
				        <md-content class="md-padding">
				          <h4>Harian</h4>
				          <p>{{$property->biayaharian}}</p>
				          <h4>Bulanan</h4>
				          <p>{{$property->biayabulanan}}</p>
				          <h4>Tahunan</h4>
				          <p>{{$property->biayatahunan}}</p>  
				        </md-content>
				      </md-tab>
				      <md-tab label="Peta" onclick="initMap()">
				      	<md-card>
						    <div id="map" style="height: 100%;width: 100%;" ></div>
					    </md-card>
					    <md-card>
						    <div id="pano" style="height: 100%;width: 100%;" ></div>
					    </md-card>
				      </md-tab>
				    </md-tabs>
			      </md-card-content>
			    </md-card>
			</div>
        </md-content>
@endsection