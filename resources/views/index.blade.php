@extends('layout.master')
@section('title','Kost ITS')
@section('content')
	<div class="row" style="margin:0px;">
	    		<br>
	    		<div class="col-sm-6" ng-controller="CardCtrl">
	    			<h1 style="text-align:center;">Our Staff Pick</h1>
					<md-card>
					    <md-card-content style="padding:0px;">
						  <div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators" style="bottom:0%;height:3%;">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						      <li data-target="#myCarousel" data-slide-to="2"></li>
						      <li data-target="#myCarousel" data-slide-to="3"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">

						      <div class="item active">
						        <img src="{{url()}}/assets/kamar1.jpg" alt="Chania" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Kost Exclusive Kemang Eleven Di Kemang Cilandak Bangka Jakarta</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 4.000.000 s/d 9.500.000 *Bulanan</p>
						          <p>Jl Kemang Raya No 11 Jakarta Selatan</p>
						        </div>
						      </div>

						      <div class="item">
						        <img src="{{url()}}/assets/kamar2.jpg" alt="Chania" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Kost Dekat Itc Fatmawati Madrasah/24 Cilandak Jakarta Selatan</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 200.000 * Harian Rp. 1.800.000 s/d 2.500.000 * Bulanan</p>
						          <p>Jl Kemang Raya No 11 Jakarta Selatan</p>
						        </div>
						      </div>
						    
						      <div class="item">
						        <img src="{{url()}}/assets/kamar3.jpg" alt="Flower" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Koi Residence Exclusive Kost Jl Tanah Kusir 2/18 Gandaria Utara Jakarta</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 2.200.000 s/d 3.800.000 * Bulanan</p>
						          <p>Jl. Tanah Kusir 2 No 18, Jakarta Selatan Dekat Gandaria City Pondok Indah Mal</p>
						        </div>
						      </div>

						      <div class="item">
						        <img src="{{url()}}/assets/kamar2.jpg" alt="Flower" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Flowers</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 4.000.000 s/d 9.500.000 *Bulanan</p>
						          <p>Jl Kemang Raya No 11 Jakarta Selatan</p>
						        </div>
						      </div>
						    </div>
						  </div>
					    </md-card-content>
					</md-card>
				</div>
				<div class="col-sm-6" ng-controller="CardCtrl">
					<h1 style="text-align:center;">Favorites</h1>
					<md-card>
					    <md-card-content style="padding:0px;">
						  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators" style="bottom:0%;height:3%;">
						      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel2" data-slide-to="1"></li>
						      <li data-target="#myCarousel2" data-slide-to="2"></li>
						      <li data-target="#myCarousel2" data-slide-to="3"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">

						      <div class="item active">
						        <img src="{{url()}}/assets/kamar1.jpg" alt="Chania" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Kost Exclusive Kemang Eleven Di Kemang Cilandak Bangka Jakarta</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 4.000.000 s/d 9.500.000 *Bulanan</p>
						          <p>Jl Kemang Raya No 11 Jakarta Selatan</p>
						        </div>
						      </div>

						      <div class="item">
						        <img src="{{url()}}/assets/kamar2.jpg" alt="Chania" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Kost Dekat Itc Fatmawati Madrasah/24 Cilandak Jakarta Selatan</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 200.000 * Harian Rp. 1.800.000 s/d 2.500.000 * Bulanan</p>
						          <p>Jl Kemang Raya No 11 Jakarta Selatan</p>
						        </div>
						      </div>
						    
						      <div class="item">
						        <img src="{{url()}}/assets/kamar3.jpg" alt="Flower" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Koi Residence Exclusive Kost Jl Tanah Kusir 2/18 Gandaria Utara Jakarta</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 2.200.000 s/d 3.800.000 * Bulanan</p>
						          <p>Jl. Tanah Kusir 2 No 18, Jakarta Selatan Dekat Gandaria City Pondok Indah Mal</p>
						        </div>
						      </div>

						      <div class="item">
						        <img src="{{url()}}/assets/kamar2.jpg" alt="Flower" width="100%">
						        <div class="limit-text carousel-caption" style="background-color: rgba(17,16,16,0.5);left:0%;right:0%;bottom:0%;padding-top: 0%;padding-bottom: 3%;">
						          <h3 style="margin:1%;">Flowers</h3>
						          <p>Nyaman, Aman, Exclusive | Rp. 4.000.000 s/d 9.500.000 *Bulanan</p>
						          <p>Jl Kemang Raya No 11 Jakarta Selatan</p>
						        </div>
						      </div>
						    </div>
						  </div>
					    </md-card-content>
					</md-card>
				</div>
			</div>
@endsection