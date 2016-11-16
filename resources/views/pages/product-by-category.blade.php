@extends('master.page-master')
@section('content')
@include('includes.shop-header')
<link rel="stylesheet" href="css/product-by-category.css">
<div class="container">
	<div class="row">
		<div class="col-md-6 blackborder" id="category-image">
			<img src="http://placehold.it/350x350" alt="">
		</div>
		<div class="col-md-6 blackborder" id="category-description">
			<p id="category-name">
				Mountain Bike
			</p>
			<br>
			<br>
			<p id="category-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam amet nobis, ipsum corporis! Quod quae minus, voluptates sapiente aspernatur vero, perspiciatis dicta iure ipsa similique, ab quia dignissimos omnis maiores.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam amet nobis, ipsum corporis! Quod quae minus, voluptates sapiente aspernatur vero, perspiciatis dicta iure ipsa similique, ab quia dignissimos omnis maiores.

				<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam amet nobis, ipsum corporis! Quod quae minus, voluptates sapiente aspernatur vero, perspiciatis dicta iure ipsa similique, ab quia dignissimos omnis maiores.
			</p>
		</div>
	</div>
	<div class="row">
		<link rel="stylesheet" href="css/products-carousel.css">
<script src="js/products-carousel.js"></script>

<!-- ======================================Carousel================================ -->

    <div class="container-fluid">
        <div class="row">
            <div class="span12">
                <div class="well">
                    <div id="myCarousel" class="carousel fdi-Carousel slide">
                     <!-- Carousel items -->
                        <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                            <div class="carousel-inner onebyone-carosel">
                                <div class="item active">
                                	
                                    <div class="col-md-4">
                                        <a href="/product-detail"><img src="http://placehold.it/250x250" class="img-responsive center-block"></a>
                                        <div class="text-center">1</div>
                                    </div>
                                    
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="http://placehold.it/250x250" class="img-responsive center-block"></a>
                                        <div class="text-center">2</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="http://placehold.it/250x250" class="img-responsive center-block"></a>
                                        <div class="text-center">3</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="http://placehold.it/250x250" class="img-responsive center-block"></a>
                                        <div class="text-center">4</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="http://placehold.it/250x250" class="img-responsive center-block"></a>
                                        <div class="text-center">5</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#"><img src="http://placehold.it/250x250" class="img-responsive center-block"></a>
                                        <div class="text-center">6</div>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#eventCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a class="right carousel-control" href="#eventCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                        <!--/carousel-inner-->
                    </div><!--/myCarousel-->
                </div><!--/well-->
            </div>
        </div>
    </div>
	</div>

	<div class="row" id="more-products">
		<div class="row margin10px">
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
				<div class="row" id="product-detail">
					<div class="col-md-6 ">
						<p id="product-name" class="font-stye-primary">
							BMX-29j2e
						</p>
					</div>
					<div class="col-md-6">
						<p id="product-price" class="font-stye-primary">
						Php. 23,00
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
					<div class="row" id="product-detail">
					<div class="col-md-6 ">
						<p id="product-name" class="font-stye-primary">
							BMX-29j2e
						</p>
					</div>
					<div class="col-md-6">
						<p id="product-price" class="font-stye-primary">
						Php. 23,00
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
					<div class="row" id="product-detail">
					<div class="col-md-6 ">
						<p id="product-name" class="font-stye-primary">
							BMX-29j2e
						</p>
					</div>
					<div class="col-md-6">
						<p id="product-price" class="font-stye-primary">
						Php. 23,00
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
					<div class="row" id="product-detail">
					<div class="col-md-6 ">
						<p id="product-name" class="font-stye-primary">
							BMX-29j2e
						</p>
					</div>
					<div class="col-md-6">
						<p id="product-price" class="font-stye-primary">
						Php. 23,00
						</p>
					</div>
				</div>
			</div>
		</div>
			<div class="row margin10px">
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
		</div>
			<div class="row margin10px">
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
			<div class="col-md-3">
				<img src="http://placehold.it/250x250" alt="">
			</div>
		</div>
	</div>
	<nav aria-label="Page navigation" id="pages">
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>

</div>
@stop