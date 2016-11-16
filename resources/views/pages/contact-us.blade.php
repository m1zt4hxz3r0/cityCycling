@extends('master.page-master')

@section('content')
<link rel="stylesheet" href="css/contact-us.css">
<div class="container">
	<div class="row">
		<div class="col-md-6 center-all">
			<img src="../img/logo2.png" alt="" id="contact-logo">	
		</div>
		<div class="col-md-6 center-all">
			<p id="about-company-title">City Cycling</p>
			<p>is a bike retail located at</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			@include('includes.contact-form')
		</div>
		<div class="col-md-6">
			@include('includes.contact-info')
		</div>
	</div>
</div>



@stop