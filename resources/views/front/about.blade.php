@extends('front.layouts.app')
@section('title', 'About')
@section('content')
@php
	$packages = DB::table('packages')->count();
	$destinations = DB::table('destinations')->count();
	$services = DB::table('services')->count();
@endphp

<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>About us -</span> GetVisa</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">About Us</a>
				</li>
			</ul>
			<p>Book travel packages and enjoy your holidays with distinctive experience</p>
		</div>
	</div>
</section>

<!--====== ABOUT CONTENT ==========-->
<section class="tourb2-ab-p-2 com-colo-abou">
	<div class="container">
		<!-- TITLE & DESCRIPTION -->
		
		<div class="row tourb2-ab-p1">
			<div class="col-md-6 col-sm-6">
				<div class="tourb2-ab-p1-left">
					<h3>Hi! Welcome to Holiday Tour & Travels</h3> <span>Duis pretium gravida nisi, ut pulvinar lorem bibendum eget</span>
					<p>Aliquam blandit nisl sem. Mauris quis enim purus. Vivamus nec tortor bibendum risus placerat vulputate at gravida ante. Nam sit amet tellus enim. Phasellus consectetur porttitor lobortis. Integer cursus odio at mattis porttitor. In hac habitasse platea dictumst. Nunc sit amet cursus felis. Etiam venenatis auctor metus, et lacinia elit dignissim non. Aenean auctor semper erat porta dictum.</p>
					<p>Fusce velit sem, vestibulum ac enim ut, tincidunt pretium augue. Vestibulum purus sapien, porttitor a porta faucibus, hendrerit eget enim.</p> <a href="#" class="link-btn">Call to us: +1 980 589 360  / +2 980 589 360</a> </div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="tourb2-ab-p1-right"> <img src="{{ asset('frontend/images/iplace-8.jpg') }}" alt="" /> </div>
			</div>
		</div>
	</div>
</section>
<section class="tourb2-ab-p-3 com-colo-abou">
	<div class="container">
		<div class="row tourb2-ab-p3">
			<div class="col-md-4 col-sm-6">
				<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>{{ $packages }}</span>
					<h4>Packages</h4>
					<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>{{ $destinations }}</span>
					<h4>Destinations</h4>
					<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="tourb2-ab-p3-1 tourb2-ab-p3-com"> <span>{{ $services }}</span>
					<h4>Services</h4>
					<p>Vivamus nec tortor bibendum risus placerat vulputate at gravida ante</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="tourb2-ab-p-4 com-colo-abou">
	<div class="container">
		<div class="row tourb2-ab-p4">
			<div class="col-md-6 col-sm-6">
				<div class="tourb2-ab-p4-1 tourb2-ab-p4-com"> <i class="fa fa-flag-o" aria-hidden="true"></i>
					<div class="tourb2-ab-p4-text">
						<h4><span>Travel</span> Packages</h4>
						<p>Curabitur vestibulum porta tortor vitae lacinia. Duis pretium gravida nisi, ut pulvinar lorem bibendum eget. Praesent turpis elit, dignissim nec tempor at, congue non justo.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="tourb2-ab-p4-1 tourb2-ab-p4-com"> <i class="fa fa-binoculars" aria-hidden="true"></i>
					<div class="tourb2-ab-p4-text">
						<h4><span>Travel</span> Destinations</h4>
						<p>Curabitur vestibulum porta tortor vitae lacinia. Duis pretium gravida nisi, ut pulvinar lorem bibendum eget. Praesent turpis elit, dignissim nec tempor at, congue non justo.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="tourb2-ab-p4-1 tourb2-ab-p4-com"> <i class="fa fa-map-o" aria-hidden="true"></i>
					<div class="tourb2-ab-p4-text">
						<h4><span>Travel</span> Services</h4>
						<p>Curabitur vestibulum porta tortor vitae lacinia. Duis pretium gravida nisi, ut pulvinar lorem bibendum eget. Praesent turpis elit, dignissim nec tempor at, congue non justo.</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>


 @endsection