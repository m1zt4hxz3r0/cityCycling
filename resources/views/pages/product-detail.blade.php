@extends('master.page-master')
@section('content')
@include('includes.shop-header')
<link rel="stylesheet" href="css/product-detail.css">
<div class="container">
	<div class="row">
		<p id="label">BMXYZ123456 12vwsd5</p>
		<div id="containerThumbnail">
			<img src="http://placehold.it/100x100" alt="">
			<img src="http://placehold.it/100x100" alt="">
			<img src="http://placehold.it/100x100" alt="">
			<img src="http://placehold.it/100x100" alt="">
			<img src="http://placehold.it/100x100" alt="">
			<img src="http://placehold.it/100x100" alt="">
			<img src="http://placehold.it/100x100" alt="">
		</div>
	</div>	
	<div class="row" id="details-2">
		<div class="col-lg-5" id="largeImage">
			<img src="http://placehold.it/400x400" alt="">
		</div>
		<div class="col-lg-7" id="description">
			<p id="price">Price : Php. 1000.00</p>
			<p id="model">Model</p>
			<p id="height">Height</p>
			<p id="weight">Weight</p>
			<p id="stocks">Available Stocks</p>

		</div>
	</div>
	<button></button>
</div>

<div class="container" id="moreDetails">
	@include('includes.more-details')
</div>
 

</div>
</div>

@stop

