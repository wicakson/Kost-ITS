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

    <script src="//connect.facebook.net/en_US/sdk.js"></script>

	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="114106592334-bafgar9pdomjnme4tts990q51015op7t.apps.googleusercontent.com">
	<script>
		function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail());
		}
	</script>
	<script>
	  function signOut() {
	    var auth2 = gapi.auth2.getAuthInstance();
	    auth2.signOut().then(function () {
	      console.log('User signed out.');
	    });
	  }
	</script>
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
  <body layout="column">

  	<script>
  	  // This is called with the results from from FB.getLoginStatus().
	  function statusChangeCallback(response) {
	    console.log('statusChangeCallback');
	    console.log(response);
	    // The response object is returned with a status field that lets the
	    // app know the current login status of the person.
	    // Full docs on the response object can be found in the documentation
	    // for FB.getLoginStatus().
	    if (response.status === 'connected') {
	      // Logged into your app and Facebook.
	      testAPI();
	    } else if (response.status === 'not_authorized') {
	      // The person is logged into Facebook, but not your app.
	      document.getElementById('status').innerHTML = 'Please log ' +
	        'into this app.';
	    } else {
	      // The person is not logged into Facebook, so we're not sure if
	      // they are logged into this app or not.
	      document.getElementById('status').innerHTML = 'Please log ' +
	        'into Facebook.';
	    }
	  }

	  // This function is called when someone finishes with the Login
	  // Button.  See the onlogin handler attached to it in the sample
	  // code below.
	  function checkLoginState() {
	    FB.getLoginStatus(function(response) {
	      statusChangeCallback(response);
	    });
	  }

	  window.fbAsyncInit = function() {
		  FB.init({
		    appId      : '1723697981184571',
		    cookie     : true,  // enable cookies to allow the server to access 
		                        // the session
		    xfbml      : true,  // parse social plugins on this page
		    version    : 'v2.4' // use version 2.4
		  });

		  // Now that we've initialized the JavaScript SDK, we call 
		  // FB.getLoginStatus().  This function gets the state of the
		  // person visiting this page and can return one of three states to
		  // the callback you provide.  They can be:
		  //
		  // 1. Logged into your app ('connected')
		  // 2. Logged into Facebook, but not your app ('not_authorized')
		  // 3. Not logged into Facebook and can't tell if they are logged into
		  //    your app or not.
		  //
		  // These three cases are handled in the callback function.

		  FB.getLoginStatus(function(response) {
		    statusChangeCallback(response);
		  });

	  };

	  // Load the SDK asynchronously
	  (function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/sdk.js";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));

	  // Here we run a very simple test of the Graph API after login is
	  // successful.  See statusChangeCallback() for when this call is made.
	  function testAPI() {
	    FB.api('/me', function(response) {
	      document.getElementById('status').innerHTML = response.name;
	    });
	  }
	  FB.logout(function(response) {
	  });
	</script>
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
					    
					    <br><br>
					    <div class="row">
					    	<div class="col-sm-6" style="padding:10px;">
				        		<div class="fb-login-button" data-max-rows="1" data-size="large" data-auto-logout-link="false"></div>
					    	</div>
					    	<div class="col-sm-6" style="padding:10px;">
				        		<div class="g-signin2" data-onsuccess="onSignIn"></div>
					    	</div>
					    </div>
				    </div>
				    <div id="register" class="tab-pane fade">
				    	<form >
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
		            	<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
		            	Next
		         	</md-button>
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
			          <md-button onclick="FB.logout();signOut();">
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
			            <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb1" class="md-primary">
				          Air Conditionair
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb2" class="md-primary">
				          TV
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb3" class="md-primary">
				          TV Kabel
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb4" class="md-primary">
				          Kamar Mandi Dalam
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb5" class="md-primary">
				          Internet
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb6" class="md-primary">
				          Meja dan Kursi
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb7" class="md-primary">
				          Kipas Angin
				        </md-checkbox>
				        <md-checkbox md-no-ink aria-label="Checkbox No Ink" ng-model="data.cb8" class="md-primary">
				          Lemari
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb9" class="md-primary">
				          Kulkas
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb10" class="md-primary">
				          Air Panas
				        </md-checkbox>
				        <h4>Jenis Penghuni</h4>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb11" class="md-primary">
				          Khusus Perempuan
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb12" class="md-primary">
				          Khusus Laki-laki
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb13" class="md-primary">
				          Perempuan Laki-laki
				        </md-checkbox>
				        <h4>Periode</h4>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb14" class="md-primary">
				          Harian
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb15" class="md-primary">
				          Mingguan
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb16" class="md-primary">
				          Bulanan
				        </md-checkbox>
				        <md-checkbox aria-label="Checkbox No Ink" ng-model="data.cb17" class="md-primary">
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