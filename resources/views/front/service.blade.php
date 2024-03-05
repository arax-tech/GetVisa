@extends('front.layouts.app')
@section('title', 'Services')
@section('content')
<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>Our -</span> Services</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">Our Services</a>
				</li>
			</ul>
			<p>Book travel packages and enjoy your holidays with distinctive experience</p>
		</div>
	</div>
</section>

<section>
    <div class="rows pla pad-bot-redu tb-space">
        <div class="pla1 p-home container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title spe-title-1">
                <h2>Our <span>Services</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
            </div>
            
            <div class="popu-places-home">
            	@foreach ($services as $key => $service)
                <!-- POPULAR PLACES {{ $key+1 }} -->
                <div class="col-md-6 col-sm-6 col-xs-12 place">
                    <div class="col-md-6 col-sm-12 col-xs-12"> <img src="{{ asset('backend/admin/service/'.$service->image) }}" alt="" /> </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h3><span>{{ $service->name }}</span></h3>
                        <p>{{ mb_strimwidth($service->description, 0, 112, "...") }}</p> <a href="{{ url('service/'.$service->id) }}" class="link-btn">more info</a> </div>
                </div>
                @endforeach
               
            </div>
            
        </div>
    </div>
</section>

@endsection