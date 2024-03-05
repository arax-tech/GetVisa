@extends('front.layouts.app')
@section('title', 'Package Detail')
@section('content')
<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>Service -> </span> {{ $service->name }}</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">{{ $service->name }}</a>
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
					<h2>{{ $service->name }}</h2> </div>
				
				<!--====== ROOMS: HOTEL BOOKING ==========-->
				<div class="tour_head1 hotel-book-room">
					<h3>Image</h3>
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						
						<!-- Wrapper for slides -->
						<div class="carousel-inner carousel-inner1" role="listbox">
							<div class="item active"> <img src="{{ asset('backend/admin/service/'.$service->image) }}" alt="" width="460" height="345"> </div>
						</div>
						
					</div>
				</div>

				<!--====== TOUR DESCRIPTION ==========-->
				<div class="tour_head1">
					<h3>Description</h3>
					<p>{{ $service->description }}</p>
				</div>
				

			</div>
			<div class="col-md-3 tour_r">
				<!--====== SPECIAL OFFERS ==========-->
				
				
				<!--====== PUPULAR TOUR PACKAGES ==========-->
				<div class="tour_right tour_rela tour-ri-com">
					<h3>Popular Packages</h3>
					@foreach ($services as $serv)
                    	<div class="tour_rela_1"> <img src="{{ asset('backend/admin/service/'.$serv->image) }}" alt="" />
                    		<h4>{{ $serv->name }}</h4>
                    		<p>{{ mb_strimwidth($service->description, 0, 50, "...") }}</p> <a href="{{ url('service/'.$serv->id) }}" class="link-btn">View this Package</a> </div>
                    @endforeach
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection