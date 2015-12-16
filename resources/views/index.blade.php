@extends('layout.master')
@section('title','Kost ITS')
@section('head')
	<link href="{{url()}}/assets/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="{{url()}}/assets/tooltip.js" type="text/javascript"></script>
@endsection
@section('content')
	<div class="row" style="margin:0px;">
		<img ng-src="{{url()}}/assets/index.jpg" class="img-responsive">
		<div class="col-sm-4" ng-controller="CardCtrl" style="padding:0px;">
			<md-card style="background-color:#3E51B5;">
		    	<md-card-content style="padding:0px;height:272px;">
		    		<div class="limit-text carousel-caption" style="background-color:rgba(17,16,16,0.5);bottom:initial;right:25%;left:25%;padding:5px;">
			      		<h3>Space Iklan</h3>
			      	</div>
				</md-card-content>
			</md-card>
		</div>
		<div class="col-sm-4" ng-controller="CardCtrl" style="padding:0px;">
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
				      	<div class="limit-text carousel-caption" style="background-color:rgba(17,16,16,0.5);bottom:initial;right:25%;left:25%;padding:5px;">
				      		<h3>Pilihan Kami</h3>
				      	</div>

					    <div class="item active" onmouseover="tooltip.pop(this, '#tip1', {position:0})">
					        <img src="{{url()}}/assets/kamar1.jpg" alt="Chania" width="100%">
					    </div>

					    <div class="item" onmouseover="tooltip.pop(this, '#tip2', {position:0})">
					        <img src="{{url()}}/assets/kamar2.jpg" alt="Chania" width="100%">
					    </div>
					    
					    <div class="item" onmouseover="tooltip.pop(this, '#tip3', {position:0})">
					        <img src="{{url()}}/assets/kamar3.jpg" alt="Flower" width="100%">
					    </div>

					    <div class="item" onmouseover="tooltip.pop(this, '#tip4', {position:0})">
					        <img src="{{url()}}/assets/kamar2.jpg" alt="Flower" width="100%">
					    </div>
				    </div>
				  </div>
			    </md-card-content>
			</md-card>
		</div>
		<div class="col-sm-4" ng-controller="CardCtrl" style="padding:0px;">
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

				    	<div class="limit-text carousel-caption" style="background-color:rgba(17,16,16,0.5);bottom:initial;right:25%;left:25%;padding:5px;">
				      		<h3>Favorit</h3>
				      	</div>

					    <div class="item active">
					        <img src="{{url()}}/assets/kamar1.jpg" width="100%">
					    </div>

					    <div class="item">
					        <img src="{{url()}}/assets/kamar2.jpg" width="100%">
					    </div>

					    <div class="item">
					        <img src="{{url()}}/assets/kamar3.jpg" width="100%">
					    </div>

					    <div class="item">
					        <img src="{{url()}}/assets/kamar2.jpg" width="100%">
					    </div>
				    </div>
				  </div>
			    </md-card-content>
			</md-card>
		</div>
	</div>
	<div style="display:none;">
        <div id="tip1">
            <img src="src/tooltips-cd2.jpg" style="float:right;margin-left:12px;width:75px;height:75px;" alt="" />
            <h3>Allows any HTML content</h3>
            <p>Allows any HTML content contained in the page by just passing the element ID to the tooltip.pop() command.</p>
        </div>
        <div id="tip2">
            <img src="src/tooltips-cd3.jpg" style="float:right;margin-left:12px;width:75px;height:75px;" alt="" />
            <h3>Easy to Config</h3>
            <p>Easy to config display styles such as position, callout size, sticky, etc by passing the options to the tooltip.pop() call.</p>
        </div>
    </div>
@endsection