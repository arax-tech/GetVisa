@extends('front.layouts.app')
@section('title', 'Destination Detail')
@section('content')
<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>Destination -> </span> {{ $destination->name }}</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">{{ $destination->name }}</a>
				</li>
			</ul>
			<p>Book travel packages and enjoy your holidays with distinctive experience</p>
		</div>
	</div>
</section>


<section>
	<div class="rows inn-page-bg com-colo">
		<div class="container inn-page-con-bg tb-space">
			<div class="col-md-9">
				<!--====== TOUR TITLE ==========-->
				<div class="tour_head">
					<h2>{{ $destination->name }}</h2> </div>
				
				<!--====== ROOMS: HOTEL BOOKING ==========-->
				<div class="tour_head1 hotel-book-room">
					<h3>Image</h3>
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						
						<!-- Wrapper for slides -->
						<div class="carousel-inner carousel-inner1" role="listbox">
							<div class="item active"> <img src="{{ asset('backend/admin/destination/'.$destination->image) }}" alt="" width="460" height="345"> </div>
						</div>
						
					</div>
				</div>

				<!--====== TOUR DESCRIPTION ==========-->
				<div class="tour_head1">
					<h3>Description</h3>
					<p>{{ $destination->description }}</p>
				</div>
				

			</div>
			<div class="col-md-3 tour_r">
				<!--====== SPECIAL OFFERS ==========-->
				
				
				<!--====== PUPULAR TOUR PACKAGES ==========-->
				<div class="tour_right tour_rela tour-ri-com">
					<h3>Popular Destinations</h3>
					

					@foreach ($destinations as $dest)
                    	<div class="tour_rela_1"> <img src="{{ asset('backend/admin/destination/'.$dest->image) }}" alt="" />
                    		<h4>{{ $dest->name }}</h4>
                    		<p>{{ mb_strimwidth($dest->description, 0, 50, "...") }}</p> <a href="{{ url('destination/'.$dest->id) }}" class="link-btn">View this Destination</a> </div>
                    @endforeach
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection