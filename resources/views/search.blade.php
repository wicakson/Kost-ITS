@extends('layout.master')
@section('title','search')
@section('head')
    <link rel="stylesheet" href="{{url()}}/assets/jquery.splitter.css">
    <script src="{{url()}}/assets/jquery.splitter.js"></script>
    <script>
    	var map;
    	var myCenter;
    	var mapProp;
    	var map;
    	var marker=[];
    	var infowindow;
    	var panorama;
    	var cek=0;

		function initialize()
		{
			myCenter = new google.maps.LatLng(-7.27075, 112.79546);

		  	mapProp = {
			    center: myCenter,
			    zoom:18,
			    draggable: true,
      			scrollwheel: false,
      			mapTypeControl: false,
			    mapTypeId: google.maps.MapTypeId.ROADMAP
		  	};

		  	map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

		  	panorama = new google.maps.StreetViewPanorama(
			    document.getElementById('pano'), {
			        position: myCenter,
			        pov: {
			          heading: 34,
			          pitch: 10
			        }
				}
			);
			map.setStreetView(panorama);

			// Create the search box and link it to the UI element.
			var input = document.getElementById('pac-input');
			var searchBox = new google.maps.places.SearchBox(input);
			map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

			// Bias the SearchBox results towards current map's viewport.
			map.addListener('bounds_changed', function() {
			    searchBox.setBounds(map.getBounds());
			});

			// [START region_getplaces]
			// Listen for the event fired when the user selects a prediction and retrieve
			// more details for that place.
			searchBox.addListener('places_changed', function() {
				var places = searchBox.getPlaces();

				if (places.length == 0) {
				    return;
				}

				// Clear out the old markers.
				marker.forEach(function(marker) {
				    marker.setMap(null);
				});
				marker = [];

				// For each place, get the icon, name and location.
				var bounds = new google.maps.LatLngBounds();
				places.forEach(function(place) {
					var icon = {
				        size: new google.maps.Size(71, 71),
				        origin: new google.maps.Point(0, 0),
				        anchor: new google.maps.Point(17, 34),
				        scaledSize: new google.maps.Size(25, 25)
				    };

				    // Create a marker for each place.
				    marker.push(new google.maps.Marker({
				        map: map,
				        icon: icon,
				        title: place.name,
				        position: place.geometry.location
				    }));

				    if (place.geometry.viewport) {
				        // Only geocodes have viewport.
				        bounds.union(place.geometry.viewport);
				    }
				    else {
				        bounds.extend(place.geometry.location);
				    }
				});
				map.fitBounds(bounds);
			});
		}

		var script;

		function loadScript()
		{
			if(cek==0)
			{
				script = document.createElement("script");
			  	script.type = "text/javascript";
			  	script.src = "http://maps.googleapis.com/maps/api/js?key=&signed_in=true&sensor=false&libraries=places&callback=initialize";
			  	document.body.appendChild(script);
			  	cek=1;
			}
			else
				return;
		}

		function codeAddress()
		{

		}
	</script>
@endsection
@section('content')
    		<div class="row" style="margin:0px;">
	    		<div class="col-sm-12" ng-controller="CardCtrl">
    				@foreach($search as $search)
    					<div class="col-sm-4" style="margin:0px;padding:0px;">
							<md-card>
						      <img src="{{url()}}/assets/uploads/{{Session::get('id')}}0.jpg" class="md-card-image" alt="Washed Out">
						      <md-card-content class="limit-text">
						        <p>
						        	{{$search->alamat}}
					        	</p>
					        	@if($search->biayaharian != null)
					        	<p>
						        		{{$search->biayaharian}}
						        	</p>
						        @endif
						       	@if($search->biayabulanan != null)
						        	<p>{{$search->biayabulanan}}</p>
						        @endif
						        @if($search->biayatahunan != null)
						        	<p>{{$search->biayatahunan}}</p>
						        @endif
						      </md-card-content>
						      <md-card-actions layout="row" layout-align="end center">
						      <a href="{{url()}}/detail/{{$search->id}}" style="text-decoration:none;";
						        <md-button class="md-raised md-primary">Lihat Selengkapnya</md-button>
						        </a>
						      </md-card-actions>
						    </md-card>
						</div>
    				@endforeach
				</div>
			</div>
@endsection