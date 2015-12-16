<html lang="en">
  <head>
  	<title>@yield('title')</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    @yield('head')
  </head>
  <body layout="column">
    <div ng-app="sidenavDemo1" ng-controller="AppCtrl">
      <md-backdrop class="md-sidenav-backdrop md-opaque md-default-theme md-sidenav-backdrop-custom disabled right" ng-click="checkClosingForm()"></md-backdrop>
      <md-backdrop class="md-sidenav-backdrop md-opaque md-default-theme md-sidenav-backdrop-custom disabled left" ng-click="checkClosingForm2()"></md-backdrop>
        <md-content>
        	<md-toolbar style="position:fixed;background-color:rgba(63, 81, 181,0.9);">
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
		        		<img ng-src="{{url()}}/assets/logo.png" style="width:40px;height:40px;">
				        <span>	Kost ITS</span>
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
    		<div style="height:64px;background-color:rgb(63, 81, 181);">
    		</div>


        	@yield('content')	
			
        </md-content>
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
					    		
					            <a href="{{url()}}/auth/facebook"><div class="col-sm-6">
					        		<md-button class="md-raised" type=submit class="pull-right" style="width:100%;">
						            	Facebook
						         	</md-button>
						        </a> 	
					    	</div>
					         	
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



        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
          <md-toolbar class="md-theme-light">
		        <h1 class="md-toolbar-tools">
		        		@if(Session::has('id'))
				       		{{Session::get('name')}}
				       	@else
				       		Kost ITS
				       	@endif
			    </h1>
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
			        @if(!Session::has('id'))
			       		<md-menu-item>
							<md-button data-toggle="modal" data-target="#myModal">
								<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
								Log in
							</md-button>
						</md-menu-item>
			       	@else
			       		<a href="{{url()}}/upload_1" style="text-decoration:none;color:black">
							<md-menu-item>
								<md-button>
									<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
									Upload
								</md-button>
							</md-menu-item>
						</a>
			       		<a href="{{url()}}/logout" style="text-decoration:none;color:black">
							<md-menu-item>
								<md-button>
									<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
									Log out
								</md-button>
							</md-menu-item>
						</a>
			        @endif
			    </md-menu-content>
		    </md-content>
		  </form>
        </md-sidenav>

        <md-sidenav class="md-sidenav-right md-whiteframe-z2" md-component-id="right">
        	<form action="search" method="get" style="margin:0px;">
        	  <md-toolbar class="md-theme-left">
	            <h1 class="md-toolbar-tools">Pencarian Lanjut</h1>
	          </md-toolbar>
	          <md-content ng-controller="LeftCtrl" style="padding:0px;">
			    <div layout-padding>
			    	<div class="row" style="margin:0px;">
			    		<md-button class="col-sm-12 md-raised md-primary" style="margin:0px;">Search</md-button>
			    	</div>
			    	<div ng-controller="Radio">
				    	<md-radio-group ng-model="data.rd1" >
				    		<div class="row">
				    			<div class="col-sm-4">
				    				<md-radio-button flex value="search" class="md-primary" style="margin:10px;" >
							        	Search
							        </md-radio-button>
							        
				    			</div>
				    			<div class="col-sm-8">
				    				<md-radio-button flex value="search-with-map" class="md-primary" style="margin:10px;" >
							        	Search with map
							        </md-radio-button>

				    			</div>
				    			<input type="hidden" name="search" value="<% data.rd1 %>">
				    		</div>
				        </md-radio-group>
			        </div>
		            <h4>Harga</h4>
		            <div class="row" style="margin:10px;">
						<div class="col-sm-12" id="html5">
						</div>
						<div class="col-sm-6">
							<md-input-container style="padding:6px 2px 2px 2px;">
								<input name="batas_bawah" type="number" min="0" max="5000000" step="100000" id="input-number-1">
							</md-input-container>

						</div>
						<div class="col-sm-6">
							<md-input-container style="padding:6px 2px 2px 2px;">
								<input name="batas_atas" type="number" min="0" max="5000000" step="100000" id="input-number-2">
							</md-input-container>
						</div>
					</div>
					<h4>Periode</h4>
			        <div ng-controller="Radio">
				    	<md-radio-group ng-model="data.rd3" >
				        	<md-radio-button flex value="biayaharian" class="md-primary" style="margin:10px;" >
					        	Harian
					        </md-radio-button>
					        <md-radio-button flex value="biayabulanan" class="md-primary" style="margin:10px;" >
					        	Bulanan
					        </md-radio-button>
					        <md-radio-button flex value="biayatahunan" class="md-primary" style="margin:10px;" >
					        	Tahunan
					        </md-radio-button>
				        </md-radio-group>
				        
				        <input type="hidden" name="periode" value="<% data.rd3 %>">
			        </div>
				    <h4>Fasilitas</h4>
			        <div ng-controller="Checkbox">
			        	<div ng-repeat="x in fasilitas">
	    					<md-checkbox ng-model="x.value" class="md-primary">
					        	<% x.name %>
					        </md-checkbox>
				        	<input type="hidden" name="fasilitas<% x.id %>" value="<% x.value %>">
				        </div>
				    </div>
				    <h4>Jenis Penghuni</h4>
			        <div ng-controller="Radio">
				    	<md-radio-group ng-model="data.rd2" >
				        	<md-radio-button flex value="1" class="md-primary" style="margin:10px;" >
					        	Khusus Perempuan
					        </md-radio-button>
					        <md-radio-button flex value="2" class="md-primary" style="margin:10px;" >
					        	Khusus Laki-laki
					        </md-radio-button>
					        <md-radio-button flex value="3" class="md-primary" style="margin:10px;" >
					        	Perempuan Laki-laki
					        </md-radio-button>
				        </md-radio-group>
				        <input type="hidden" name="jenis_penghuni" value="<% data.rd2 %>">
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