@extends('master.page-master')

@section('content')
	<link rel="stylesheet" href="css/home.css">
	<div class="container-fluid">
    	<div class="row">
	        <div class="col-lg-12 grow shadow" id="mountainBike">
	            <div id="base">
	            	
	            </div>
	            <div class="pull-right detail-left">
	            		<p class="whiteFont">Climb Mountains</p>
						<p class="whiteFont">Mountain Bikes</p> 
	            </div>
	        </div>
	        <div class="col-lg-12 grow shadow" id="ladyBike">
	            <div  id="shapeY">

	            </div>
	            <div class="pull-right detail-left">
	            		<p id="name" class="whiteFont">Ride with Style</p>
						<p id="phrase" class="whiteFont">Lady's Bike</p> 
	            </div>
	        </div>
	      
	        <div class="col-lg-12 grow shadow" id="kidBike">
	        	<div id="shapeY">
	            	
	            </div>
	            <div class="pull-right detail-left">
	            		<p class="whiteFont">Play with Fun</p>
						<p class="whiteFont">Kids Bike</p> 
	            </div>
	           
	        </div>
		</div>
	</div>
<!-- ===================================Products=============================== -->
<div class="container-fluid"  id="productsContainer">

	<div id="containerLabel">
		<div class="container">
				Highlights
		</div>
	</div>
<div class="container">

	<div class="row padding5pxtopbot">
		@foreach($pictures as $key => $picture)
			<div class="col-md-4">
			<img src="pic/{{ $picture->id }}" width = 300 height = 300 alt="">
		</div>
		@endforeach
		<!-- <div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
 -->	</div>
<!-- 	<div class="row padding5pxtopbot">
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
	</div>
	<div class="row padding5pxtopbot">
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt="">
		</div>
	</div> -->
</div>
	</div>
@stop

