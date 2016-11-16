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

		<div class="col-lg-7" id="descContainer">
			<p id="price">Price : Php. 1000.00</p>
			<div id="description">
				<p id="model">Model</p>
				<p id="height">Height</p>
				<p id="weight">Weight</p>
				<p id="stocks">Available Stocks</p>
			</div>
			<button class="btn btn-primary pull-right toBottomRight" id="btnAdd"><i class="glyphicon glyphicon-shopping-cart"></i>ADD TO CART</button>	
		</div>

	</div>
	
</div>

<div class="container" id="moreDetails">
	@include('includes.more-details')
</div>
<div class="container" id="moreItems">
	@include('includes.more-items')
</div>
 

</div>
</div>

@stop

