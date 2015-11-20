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

    <link href="{{url()}}/assets/nouislider.min.css" rel="stylesheet">
    <script src="{{url()}}/assets/nouislider.min.js"></script>

    <link rel="stylesheet" href="{{url()}}/assets/style.css">
    <script src="{{url()}}/assets/java.js"></script>
  </head>
  <body layout="column">
    <div ng-app="sidenavDemo1" ng-controller="AppCtrl" layout="column" style="height:100%;" ng-cloak >
      <section layout="row" flex>
        <md-content style="width:100%;">
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
	    		<br>
	    		<div class="col-sm-6" ng-controller="CardCtrl">
	    			<h1 style="text-align:center;">Contact Us</h1>
	    			<h2 class="md-title" style="text-align:center;">For blablabla</h2>
					<md-card>
					    <md-card-content>
					        <p>	Wisma 77 tower 2, 9th floor<br>Jl. Letjen S. Parman Kav. 77<br>
								Slipi, Jakarta Barat 11410 Indonesia<br>PT. Mediapura Digital Indonesia<br>
								Telp +6221 296 75920 Ext 134</p>
					      </md-card-content>
					    </md-card>
				</div>
				<div class="col-sm-6" ng-controller="CardCtrl">
					<h1 style="text-align:center;">Follow Us</h1>
					<h2 class="md-title" style="text-align:center;">For blablabla</h2>
					<md-card>
					    <md-card-content>
					    	<div class="col-sm-3">
					    		Facebook
					    	</div>
					    	<div class="col-sm-3">
					    		Twitter
					    	</div>
					    	<div class="col-sm-3">
					    		Google+
					    	</div>
					    	<div class="col-sm-3">
					    		Instagram
					    	</div>
					      </md-card-content>
					    </md-card>
				</div>
				<br>
				<div class="col-sm-12" ng-controller="CardCtrl">
					<h1 style="text-align:center;">Our Team</h1>
					<div class="col-sm-3">
						<md-card>
						    <md-card-content style="padding:0px;">
						    	<img src="{{url()}}/assets/kamar1.jpg" class="img-responsive" alt="Responsive image">
						        <div style="padding-left:15px;padding-right:15px;">
							        <h2 class="md-title">Kevin Sanjoyo</h2>
							        <p>	Wisma 77 tower 2, 9th floor<br>Jl. Letjen S. Parman Kav. 77<br>
										Slipi, Jakarta Barat 11410 Indonesia<br>PT. Mediapura Digital Indonesia<br>
										Telp +6221 296 75920 Ext 134</p>
								</div>
						    </md-card-content>
						</md-card>
					</div>
					<div class="col-sm-3">
						<md-card>
						    <md-card-content style="padding:0px;">
						    	<img src="{{url()}}/assets/kamar1.jpg" class="img-responsive" alt="Responsive image">
						        <div style="padding-left:15px;padding-right:15px;">
							        <h2 class="md-title">Kevin Sanjoyo</h2>
							        <p>	Wisma 77 tower 2, 9th floor<br>Jl. Letjen S. Parman Kav. 77<br>
										Slipi, Jakarta Barat 11410 Indonesia<br>PT. Mediapura Digital Indonesia<br>
										Telp +6221 296 75920 Ext 134</p>
								</div>
						    </md-card-content>
						</md-card>
					</div>
					<div class="col-sm-3">
						<md-card>
						    <md-card-content style="padding:0px;">
						    	<img src="{{url()}}/assets/kamar1.jpg" class="img-responsive" alt="Responsive image">
						    	<div style="padding-left:15px;padding-right:15px;">
							        <h2 class="md-title">Kevin Sanjoyo</h2>
							        <p>	Wisma 77 tower 2, 9th floor<br>Jl. Letjen S. Parman Kav. 77<br>
										Slipi, Jakarta Barat 11410 Indonesia<br>PT. Mediapura Digital Indonesia<br>
										Telp +6221 296 75920 Ext 134</p>
								</div>
						    </md-card-content>
						</md-card>
					</div>
					<div class="col-sm-3">
						<md-card>
						    <md-card-content style="padding:0px;">
						    	<img src="{{url()}}/assets/kamar1.jpg" class="img-responsive" alt="Responsive image">
						    	<div style="padding-left:15px;padding-right:15px;">
							        <h2 class="md-title">Kevin Sanjoyo</h2>
							        <p>	Wisma 77 tower 2, 9th floor<br>Jl. Letjen S. Parman Kav. 77<br>
										Slipi, Jakarta Barat 11410 Indonesia<br>PT. Mediapura Digital Indonesia<br>
										Telp +6221 296 75920 Ext 134</p>
								</div>
						    </md-card-content>
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
			            	Log in
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
        	<md-toolbar class="md-theme-left">
	            <h1 class="md-toolbar-tools">Pencarian Lanjut</h1>
	        </md-toolbar>
	        <md-content ng-controller="LeftCtrl" style="padding:0px;">
	          	<md-menu-content style="padding:0px;">
	          		<a href="{{url()}}/search" style="color: black;text-decoration: none;">
				        <md-menu-item>
				          <md-button>
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				            <p>Search</p>
				          </md-button>
				        </md-menu-item>
			        </a>
			        <a href="{{url()}}/search-with-map" style="color:black;text-decoration:none;">
				        <md-menu-item>
				          <md-button>
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				            <p>Search with map</p>
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