<html lang="en">
  <head>
  	<title>Kost ITS</title>
  	<link rel="icon" href="{{url()}}/assets/logo.png" type="image/gif" sizes="16x16">
    <script src="{{url()}}/assets/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="{{url()}}/assets/bootstrap.min.css">
    <script src="{{url()}}/assets/bootstrap.min.js"></script>

    <!--
    <link rel="stylesheet" href="{{url()}}/assets///ajax.googleapis.com/ajax/libs/angular_material/0.11.1/angular-material.min.css">
    -->
    <!-- Angular Material Dependencies -->
    <!--
    <script src="{{url()}}/assets///ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script src="{{url()}}/assets///ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-messages.js"></script>
    <script src="{{url()}}/assets///ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.min.js"></script>
    <script src="{{url()}}/assets///ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-aria.min.js"></script>
    <script src="{{url()}}/assets///ajax.googleapis.com/ajax/libs/angular_material/0.11.1/angular-material.min.js"></script>
	-->
    <!--<link href="{{url()}}/assets/https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->

    
    <link rel="stylesheet" href="{{url()}}/assets/angular-material.min.css">
    <script src="{{url()}}/assets/angular.min.js"></script>
    <script src="{{url()}}/assets/angular-material.min.js"></script>
    <script src="{{url()}}/assets/angular-aria.min.js"></script>
    <script src="{{url()}}/assets/angular-animate.min.js"></script>

    <link rel="stylesheet" href="{{url()}}/assets/jquery.splitter.css">
    <script src="{{url()}}/assets/jquery.splitter.js"></script>

    <link href="{{url()}}/assets/nouislider.min.css" rel="stylesheet">
    <script src="{{url()}}/assets/nouislider.min.js"></script>

    <link rel="stylesheet" href="{{url()}}/assets/style.css">
    <script src="{{url()}}/assets/java.js"></script>

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
  </head>
  <body layout="column">
    <div ng-app="sidenavDemo1" ng-controller="AppCtrl" layout="column" style="height:100%;" ng-cloak >
      <section layout="row" flex>
        <md-content>
        	<md-toolbar>
		      <div class="md-toolbar-tools" >
		      	<div>
		          <md-button class="md-icon-button" aria-label="Settings" ng-click="toggleLeft()">
		          	<md-tooltip md-direction="right">
			          Menu
			        </md-tooltip>
		            <md-icon md-svg-icon="{{url()}}/assets/ic_menu_white.svg"></md-icon>
		          </md-button>
		        </div>
		        <div style="width:100%;">
		        	<h2 style="text-align:center;">
				        <span>Kost ITS</span>
				    </h2>
				</div>
		        <span flex></span>
		        <div>
		          <md-button class="md-icon-button" aria-label="Settings2" ng-click="toggleRight()" class="md-primary">
		          	<md-tooltip md-direction="left">
			          Menu Pencarian
			        </md-tooltip>
		            <md-icon md-svg-icon="{{url()}}/assets/ic_searchmenu_white.svg"></md-icon>
		          </md-button>
		        </div>
		      </div>
    		</md-toolbar>
    		
    		<div class="row" style="margin:0px;">
	    		<div class="col-sm-12" ng-controller="CardCtrl">
	    			<div ng-repeat="x in listKost" class="col-sm-4" style="margin:0px;padding:0px;">
						<md-card>
					      <img ng-src="{{url()}}/assets/<%x.imagePath%>" class="md-card-image" alt="Washed Out">
					      <md-card-content class="limit-text">
					        <h2 class="md-title"><%x.title%></h2>
					        <p><%x.description%></p>
					        <p><%x.address%></p>
					        <p><%x.price%></p>
					      </md-card-content>
					      <md-card-actions layout="row" layout-align="end center">
					        <md-button>Action 1</md-button>
					        <md-button>Action 2</md-button>
					      </md-card-actions>
					    </md-card>
					</div>
				</div>
			</div>
			
        </md-content>
        
        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
          <md-toolbar class="md-theme-light">
		        <h1 class="md-toolbar-tools">Kost ITS</h1>
		    </md-toolbar>
		    <md-content ng-controller="RightCtrl">
		    	<md-menu-content style="padding:0px;">
		    		<md-menu-item>
			          <md-button>
			            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
			            	Akun
			          </md-button>
			        </md-menu-item>
			        <a href="{{url()}}/" style="color: black;text-decoration: none;">
				        <md-menu-item>
				          <md-button>
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				            	Home
				          </md-button>
				        </md-menu-item>
			        </a>
			        <a href="{{url()}}/contact-us" style="color: black;text-decoration: none;">
				        <md-menu-item >
				          <md-button>
					        <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
					           Contact Us
					      </md-button>
				        </md-menu-item>
			        </a>
			        <md-menu-item>
			          <md-button>
			            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
			            	Log in
			          </md-button>
			        </md-menu-item>
			        <md-menu-item>
			          <md-button>
			            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
			            	Log out
			          </md-button>
			        </md-menu-item>
			    </md-menu-content>
		    </md-content>
        </md-sidenav>
        <!--ng-controller="SelectOptGroupController"-->
        <md-sidenav class="md-sidenav-right md-whiteframe-z2" md-component-id="right">
        	<form ng-submit="$event.preventDefault()" style="margin:0px;">
        	  <md-toolbar class="md-theme-left">
	            <h1 class="md-toolbar-tools">Pencarian Lanjut</h1>
	          </md-toolbar>
	          <md-content ng-controller="LeftCtrl" style="padding:0px;">
	          	<md-menu-content style="padding:0px;">
	          		<a href="{{url()}}/search" style="color:black;text-decoration:none;">
		          		<md-menu-item>
				          <md-button>
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				            	Search
				          </md-button>
				        </md-menu-item>
			        </a>
			        <a href="{{url()}}/search-with-map" style="color:black;text-decoration:none;">
				        <md-menu-item>
				          <md-button>
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				            	Search with map
				          </md-button>
				        </md-menu-item>
			        </a>
			    </md-menu-content>
			    <div layout-padding>
		            <h4>Harga</h4>
		            <div class="row" style="margin:10px;">
						<div class="col-sm-12" id="html5">
						</div>
						<div class="col-sm-6">
							<md-input-container style="padding:6px 2px 2px 2px;">
								<input type="number" min="0" max="5000000" step="100000" id="input-number-1">
							</md-input-container>
						</div>
						<div class="col-sm-6">
							<md-input-container style="padding:6px 2px 2px 2px;">
								<input type="number" min="0" max="5000000" step="100000" id="input-number-2">
							</md-input-container>
						</div>
					</div>
				    <div ng-controller="Checkbox">
			            <h4>Fasilitas</h4>
			            <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb1" class="md-primary">
				          Air Conditionair
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb2" class="md-primary">
				          TV
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb3" class="md-primary">
				          TV Kabel
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb4" class="md-primary">
				          Kamar Mandi Dalam
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb5" class="md-primary">
				          Internet
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb6" class="md-primary">
				          Meja dan Kursi
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb7" class="md-primary">
				          Kipas Angin
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb8" class="md-primary">
				          Lemari
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb9" class="md-primary">
				          Kulkas
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb10" class="md-primary">
				          Air Panas
				        </md-checkbox>
				        <h4>Jenis Penghuni</h4>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb11" class="md-primary">
				          Khusus Perempuan
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb12" class="md-primary">
				          Khusus Laki-laki
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb13" class="md-primary">
				          Perempuan Laki-laki
				        </md-checkbox>
				        <h4>Periode</h4>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb14" class="md-primary">
				          Harian
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb15" class="md-primary">
				          Mingguan
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb16" class="md-primary">
				          Bulanan
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb17" class="md-primary">
				          Tahunan
				        </md-checkbox>
				    </div>
				</div>
	          </md-content>
		    </form>
	    </md-sidenav>
      </section>
    </div>		
					<script>
						var html5Slider = document.getElementById('html5');

						noUiSlider.create(html5Slider, {
							start: [ 0, 500000 ],
							connect: true,
							step: 100000,
							range: {
								'min': 0,
								'max': 5000000
							}
						});
					</script>			
					<script>
						var inputNumber = [];
						inputNumber[0] = document.getElementById('input-number-1');
						inputNumber[1] = document.getElementById('input-number-2');

						html5Slider.noUiSlider.on('update', function( values, handle ) {

							var value = values[handle];

							if ( handle ) {
								inputNumber[1].value = value;
							} else {
								inputNumber[0].value = value;
							}
						});

						inputNumber[0].addEventListener('change', function(){
							html5Slider.noUiSlider.set([null, this.value]);
						});

						inputNumber[1].addEventListener('change', function(){
							html5Slider.noUiSlider.set([null, this.value]);
						});
					</script>
  </body>
</html>