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

    <script type="text/javascript" src="{{url()}}/assets/jquery.form.js"></script>

    <link rel="stylesheet" href="{{url()}}/assets/style.css">
    <script src="{{url()}}/assets/java.js"></script>

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
    		<div style="height:64px;background-color:rgb(63, 81, 181);">
    		</div>
    		<md-card>
		      <md-card-content>
		        <form method="POST" action="{{url()}}/submit_upload">
					{!! csrf_field() !!}
					    	
		        	<h4>Info Pengelola</h4>
		        	<md-input-container flex>
				        <label>Nama</label>
				        <input name="fullname">
				    </md-input-container>
				    <div layout layout-sm="column">
				        <md-input-container flex>
				          <label>Kontak 1</label>
				          <input name="contact1">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Kontak 2</label>
				          <input name="contact2">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Whatsapp</label>
				          <input name="whatsapp">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Line</label>
				          <input name="line">
				        </md-input-container>
				    </div>
				    <h4>Info Properti</h4>
				    <div layout layout-sm="column">
				        <md-input-container flex>
				          <label>Alamat</label>
				          <input name="alamat">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Kode Pos</label>
				          <input name="pos">
				        </md-input-container>
				    </div>
				    <div layout layout-sm="column">
				        <md-input-container flex>
				          <label>Luas Kamar</label>
				          <input name="luas">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Jumlah Kamar Tersedia</label>
				          <input name="jumlahkamartersedia">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Jumlah Kamar</label>
				          <input name="jumlahkamar">
				        </md-input-container>
				    </div>
				    <h4>Info Biaya</h4>
				    <div layout layout-sm="column">
				        <md-input-container flex>
				          <label>Harian</label>
				          <input name="biayaharian">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Bulanan</label>
				          <input name="biayabulanan">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Tahunan</label>
				          <input name="biayatahunan">
				        </md-input-container>
				    </div>
	    			<h4>Fasilitas</h4>
	    			<div class="row">
	    				@foreach($facilitys as $facilitys)
	    					<?php $i++; ?>
		    				<div class="col-sm-3">
		    					<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb{{$i}}" class="md-primary" name="facilitys{{$facilitys->id}}">
									{{$facilitys->name}}
						        </md-checkbox>
		    				</div>
		    				<input type="hidden" name="facilitis{{$facilitys->id}}" value="<% data.cb{{$i}} %>">
	    				@endforeach

	    				
	    			</div>

			        <h4>Jenis Penghuni</h4>
			        <div class="row">
			        	<md-radio-group>
			        	@foreach($occupants as $occupants)
			        		<?php $i++; ?>
			        		<div class="col-sm-3">
			        			<md-radio-button style="margin:10px;" ng-value="<?php echo $i;?>" class="md-primary">
			        				{{$occupants->name}}
			        			</md-radio-button>
				        	</div>
				        	<input type="hidden" name="occupants{{$occupants->id}}" value="<% data.cb{{$i}} %>">
			        	@endforeach
			        	</md-radio-group>
			        </div>
			        <h4>Periode</h4>
			        <div class="row">
			        	@foreach($periods as $periods)
			        		<?php $i++; ?>
			        		<div class="col-sm-3">
				        		<md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb{{$i}}" class="md-primary">
									{{ $periods->name }}
						        </md-checkbox>
				        	</div>
				        	<input type="hidden" name="periods{{$periods->id}}" value="<% data.cb{{$i}} %>">
			        	@endforeach
			        </div>
			        <md-button type="submit" class="md-raised pull-right">
		            	<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
		            	Next
		         	</md-button>
	    		</form>
		      </md-card-content>
		    </md-card>
        </md-content>
        
        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
          <md-toolbar class="md-theme-light">
		        <h1 class="md-toolbar-tools">Kost ITS</h1>
		    </md-toolbar>
		    <md-content>
		    	<md-menu-content style="padding:0px;">
		    		<a href="{{url()}}/upload" style="color: black;text-decoration: none;">
				        <md-menu-item>
				          <md-button id="status">
				            <md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
				          </md-button>
				        </md-menu-item>
			        </a>
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
	          <md-content ng-controller="LeftCtrl" style="padding:0px;">
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
			            <md-checkbox ng-repeat="x in fasilitas" aria-label="Checkbox No Ink" ng-model="x.value" class="md-primary">
				          <%x.name%>
				        </md-checkbox>
				        <h4>Jenis Penghuni</h4>
				        <md-checkbox ng-repeat="x in jenis_penghuni" aria-label="Checkbox No Ink" ng-model="x.value" class="md-primary">
				          <%x.name%>
				        </md-checkbox>
				        <h4>Periode</h4>
				        <md-checkbox ng-repeat="x in periode" aria-label="Checkbox No Ink" ng-model="x.value" class="md-primary">
				          <%x.name%>
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