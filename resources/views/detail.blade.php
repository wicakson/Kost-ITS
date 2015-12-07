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

    <link href="{{url()}}/assets/pgwslideshow/pgwslideshow.min.css" rel="stylesheet">
    <script src="{{url()}}/assets/pgwslideshow/pgwslideshow.min.js"></script>
    <script src="{{url()}}/assets/pgwslideshow/style.js"></script>

    <link rel="stylesheet" href="{{url()}}/assets/style.css">
    <script src="{{url()}}/assets/java.js"></script>

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
		}

    </script>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAcNwxRT22cVHKWUpERpYT-44uxjagsjE&libraries=places&callback=initMap&signed_in=true">
    </script>
  </head>
  <body layout="column">
    <div ng-app="sidenavDemo1" ng-controller="AppCtrl">
    	<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		    	  <ul class="nav nav-tabs row" style="margin:0px;text-align:center;">
				    <li class="active col-sm-6" style="padding:0px;"><a data-toggle="tab" href="#login" style="margin: 0px;border-radius: 4px 0 0 0;">Log in</a></li>
				    <li class="col-sm-6" style="padding:0px;"><a data-toggle="tab" href="#register" style="margin: 0px;border-radius: 0 4px 0 0;">Register</a></li>
				  </ul>

				  <div class="tab-content" style="padding:25px;">
				    <div id="login" class="tab-pane fade in active">
				    	<form action="" method="post">
					        <div layout layout-sm="column">
						        <md-input-container flex style="padding-bottom: 2px;">
						          <label>Email</label>
						          <input>
						        </md-input-container>
						        <md-input-container flex style="padding-bottom: 2px;">
						          <label>Password</label>
						          <input>
						        </md-input-container>
						        <md-button class="md-raised" type=submit class="pull-right">
					            	Log in
					         	</md-button>
						    </div>
					    </form>
					    <br>
					    <p style="text-align:center;">or</p>
					    <br>
					    <div class="row">
					    	<div class="col-sm-6">
					    		<md-button class="md-raised" type=submit class="pull-right" style="width:100%;">
					            	Facebook
					         	</md-button>
					    	</div>
					    	<div class="col-sm-6">
				        		<md-button class="md-raised" type=submit class="pull-right" style="width:100%;">
					            	Google +
					         	</md-button>
					    	</div>
					    </div>
				    </div>
				    <div id="register" class="tab-pane fade">
				    	<form style="padding-bottom:0px;">
					    	<div layout layout-sm="column">
						        <md-input-container flex style="padding-bottom: 2px;">
						          <label>Nama</label>
						          <input>
						        </md-input-container>
						    </div>
					      	<div layout layout-sm="column">
						        <md-input-container flex style="padding-bottom: 2px;">
						          <label>Email</label>
						          <input>
						        </md-input-container>
						    </div>
						    <div layout layout-sm="column">
						        <md-input-container flex style="padding-bottom: 2px;">
						          <label>Password</label>
						          <input>
						        </md-input-container>
						    </div>
						    <div class="row">
							    <md-button class="md-raised pull-right">
							        Register
							    </md-button>
						    </div>
						</form>
				    </div>
				  </div>
			</div>
		  </div>
		</div>
        <md-backdrop class="md-sidenav-backdrop md-opaque md-default-theme md-sidenav-backdrop-custom disabled" ng-click="checkClosingForm()"></md-backdrop>
        	<md-toolbar style="position:fixed;background-color:rgba(63, 81, 181,0.9);">
		      <div class="md-toolbar-tools" >
		      	<div>
		          <md-button class="menu md-icon-button" aria-label="Settings" ng-click="toggleLeft()">
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
		          <md-button class="menu md-icon-button" aria-label="Settings2" ng-click="toggleRight()" class="md-primary">
		          	<md-tooltip md-direction="left">
			          Menu Pencarian
			        </md-tooltip>
		            <md-icon md-svg-icon="{{url()}}/assets/ic_searchmenu_white.svg"></md-icon>
		          </md-button>
		        </div>
		      </div>
    		</md-toolbar>
    		<div style="height:64px;background-color:rgb(63, 81, 181);">
    		</div>

    		<ul class="pgwSlideshow">
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt="Rio de Janeiro, Brazil"></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt="" data-large-src="{{url()}}/assets/kamar1.jpg"></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li><img src="{{url()}}/assets/kamar1.jpg" alt=""></li>
			    <li>
			        <a href="http://en.wikipedia.org/wiki/Monaco" target="_blank">
			            <img src="{{url()}}/assets/kamar1.jpg" alt="Monaco">
			        </a>
			    </li>
			</ul>

    		<div ng-controller="CardCtrl">
    			<md-card>
			      <md-card-content style="padding:0px;">
			        <md-tabs md-dynamic-height md-border-bottom>
				      <md-tab label="Info Properti">
				        <md-content class="md-padding">
				          <h4>Alamat</h4>
				          <p>Jl. Tanah Kusir 2 No 18, Jakarta Selatan Dekat Gandaria City Pondok Indah Mal</p>
				          <h4>Kode Pos</h4>
				          <p>12240</p>
				          <h4>Luas Kamar</h4>
				          <p>3x4m2 & 4mx6m2</p>
				          <h4>Jumlah Kamar yang Tersedia</h4>
				          <p>8</p>
				          <h4>Jumlah Kamar</h4>
				          <p>10</p>
				        </md-content>
				      </md-tab>
				      <md-tab label="Info Pengelola">
				        <md-content class="md-padding">
				          <h4>Nama</h4>
				          <p>Nugroho Wicaksono</p>
				          <h4>Kontak 1</h4>
				          <p>087759775948</p>
				          <h4>Kontak 2</h4>
				          <p>08123380917</p>
				          <h4>Whatsapp</h4>
				          <p>087759775947</p>
				          <h4>Line</h4>
				          <p>@nwicaksono</p>
				        </md-content>
				      </md-tab>
				      <md-tab label="Info Fasilitas">
				        <md-content class="md-padding">
				        	<h4>Fasilitas</h4>
				            <div class="row">
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb1" class="md-primary">
							          Air Conditionair
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb2" class="md-primary">
							          TV
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb3" class="md-primary">
							          TV Kabel
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb4" class="md-primary">
							          Kamar Mandi Dalam
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb5" class="md-primary">
							          Internet
							        </md-checkbox>
			    				</div>
						        <div class="col-sm-3">
						        	<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb6" class="md-primary">
							          Meja dan Kursi
							        </md-checkbox>
			    				</div>
						        <div class="col-sm-3">
						        	<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb7" class="md-primary">
							          Kipas Angin
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb8" class="md-primary">
							          Lemari
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb9" class="md-primary">
							          Kulkas
							        </md-checkbox>
			    				</div>
			    				<div class="col-sm-3">
			    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb10" class="md-primary">
							          Air Panas
							        </md-checkbox>
			    				</div>
			    			</div>
					        <h4>Jenis Penghuni</h4>
					        <div class="row">
					        	<div class="col-sm-3">
					        		<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb11" class="md-primary">
							          Khusus Perempuan
							        </md-checkbox>
					        	</div>
					        	<div class="col-sm-3">
					        		<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb12" class="md-primary">
							          Khusus Laki-laki
							        </md-checkbox>
					        	</div>
					        	<div class="col-sm-3">
					        		<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb13" class="md-primary">
							          Perempuan Laki-laki
							        </md-checkbox>
					        	</div>
					        </div>
				        </md-content>
				      </md-tab>
				      <md-tab label="Info Biaya">
				        <md-content class="md-padding">
				          <h4>Harian</h4>
				          <p>Rp. 2.200.000 s/d 3.800.000</p>
				          <h4>Bulanan</h4>
				          <p>Rp. 2.200.000 s/d 3.800.000</p>
				          <h4>Tahunan</h4>
				          <p>Rp. 2.200.000 s/d 3.800.000</p>  
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
        
        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
          <md-toolbar class="md-theme-light">
		        <h1 class="md-toolbar-tools">Kost ITS</h1>
		    </md-toolbar>
		    <md-content>
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
			          <md-button data-toggle="modal" data-target="#myModal">
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
        	<form action="search" method="get" style="margin:0px;">
        	  <md-toolbar class="md-theme-left">
	            <h1 class="md-toolbar-tools">Pencarian Lanjut</h1>
	          </md-toolbar>
	          <md-content style="padding:0px;">
	          	<md-menu-content style="padding:0px;">
	          		<a href="{{url()}}/search" style="color:black;text-decoration:none;">
		          		<md-menu-item>
				          <md-button type="submit">
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				            	Search
				          </md-button>
				        </md-menu-item>
			        </a>
			        <a href="{{url()}}/search-with-map" style="color:black;text-decoration:none;">
				        <md-menu-item>
				          <md-button type="submit">
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