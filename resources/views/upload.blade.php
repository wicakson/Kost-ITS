@extends('layout.master')
@section('title','form 1')
@section('head')
    <link rel="stylesheet" href="{{url()}}/assets/jquery.splitter.css">
    <script src="{{url()}}/assets/jquery.splitter.js"></script>
    <script type="text/javascript" src="{{url()}}/assets/jquery.form.js"></script>
@endsection
@section('content')
    		<md-card>
		      <md-card-content>
		        <form method="POST" action="{{url()}}/submit_upload_1">
					{!! csrf_field() !!}
					    	
		        	<h4>Info Pengelola</h4>
		        	<md-input-container flex>
				        <label>Nama</label>
				        <input name="fullname">
				    </md-input-container>
				    <div layout layout-sm="column">
				        <md-input-container flex>
				          <label>Kontak 1</label>
				          <input required name="contact1">
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
				          <input required name="alamat">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Kode Pos</label>
				          <input required name="pos">
				        </md-input-container>
				    </div>
				    <div layout layout-sm="column">
				        <md-input-container flex>
				          <label>Luas Kamar</label>
				          <input required name="luas">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Jumlah Kamar Tersedia</label>
				          <input required name="jumlahkamartersedia">
				        </md-input-container>
				        <md-input-container flex>
				          <label>Jumlah Kamar</label>
				          <input required name="jumlahkamar">
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
		    					<md-checkbox aria-label="Checkbox No Ink" ng-model="fasilitas[{{$facilitys->id}}].value" class="md-primary" name="facilitys{{$facilitys->id}}">
									{{$facilitys->name}}
						        </md-checkbox>
		    				</div>
		    				<input type="hidden" name="facilitis{{$facilitys->id}}" value="<%fasilitas[{{$facilitys->id}}].value%>">
	    				@endforeach

	    				
	    			</div>

			        <h4>Jenis Penghuni</h4>
			        <div class="row">
			        	<md-radio-group ng-model="jenis_penghuni">
			        	@foreach($occupants as $occupants)
			        		<?php $i++; ?>
			        		<div class="col-sm-3">
			        			<md-radio-button style="margin:10px;" value="{{$occupants->id}}"  class="md-primary">
			        				{{$occupants->name}}
			        			</md-radio-button>
				        	</div>
			        	@endforeach
			        	<input type="hidden" name="occupants" value="<%jenis_penghuni%>">
			        	</md-radio-group>
			        </div>
			        <h4>Periode</h4>
			        <div class="row">
			        	@foreach($periods as $periods)
			        		<?php $i++; ?>
			        		<div class="col-sm-3">
				        		<md-checkbox aria-label="Checkbox No Ink" ng-model="periode[{{$periods->id}}].value" class="md-primary"  name="periods{{$periods->id}}">
									{{ $periods->name }}
						        </md-checkbox>
				        	</div>
				        	<input type="hidden" name="periods{{$periods->id}}" value="<%periode[{{$periods->id}}].value%>">
			        	@endforeach
			        </div>
			        <md-button type="submit" class="md-raised pull-right">
		            	<md-icon md-svg-icon="{{url()}}/assets/ic_clear_black.svg" md-menu-align-target></md-icon>
		            	Next
		         	</md-button>
	    		</form>
		      </md-card-content>
		    </md-card>
@endsection