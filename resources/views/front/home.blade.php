@extends('front.layouts.app')
@section('title', 'Home')
@section('content')
@include('front.layouts.inc.slider')

<section>
    <div class="rows pad-bot-redu tb-space" id="package">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
               <h2>Top <span>Popular Packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
            </div>
            <!-- HOTEL GRID -->
            <div class="to-ho-hotel">
            	@foreach ($packages as $key => $package)
                <!-- HOTEL GRID {{ $key+1 }}-->
                <div class="col-md-4">
                    <a href="{{ url('package/'.$package->id) }}">
                        <div class="to-ho-hotel-con">
                            <div class="to-ho-hotel-con-1">
                                {{-- <div class="hot-page2-hli-3"> <img src="images/hci1.png" alt=""> </div> --}}
                                <div class="hom-hot-av-tic"> {{ $package->price }} </div> <img src="{{ asset('backend/admin/package/'.$package->image) }}" alt=""> </div>
                            <div class="to-ho-hotel-con-23">
                                <div class="to-ho-hotel-con-2">
                                    <a href="{{ url('package/'.$package->id) }}">
                                        <h4>{{ $package->place_name }}</h4>
                                    </a>
                                </div>
                                <div class="to-ho-hotel-con-3">
                                    <ul>
                                        <li>{{ mb_strimwidth($package->description, 0, 80, "...") }}
                                            <br>
                                            <div class="dir-rat-star ho-hot-rat-star"> <b>Country</b> : {{ $package->country }}</div>
                                            <div class="dir-rat-star ho-hot-rat-star"> <b>City</b> : {{ $package->city }}</div>
                                            <div class="dir-rat-star ho-hot-rat-star"> <b>Days</b> : {{ $package->total_day }}</div>
                                            <div class="dir-rat-star ho-hot-rat-star"> <b>Nights</b> : {{ $package->total_night }}</div>
                                        </li>
                                        <li><span class="ho-hot-pri-dis">{{ $package->price }}</span><span class="ho-hot-pri">{{ $package->price }}</span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                 @endforeach
                
            </div>
        </div>
    </div>
</section>


<section>
    <div class="rows tb-space pad-top-o pad-bot-redu">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Popular<span> Destinations</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 Destinations worldwide.</p>
            </div>
            <div>
            	@foreach ($destinations as $key => $destination)
                <!-- TOUR PLACE {{ $key+1 }} -->
                <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                    <!-- OFFER BRAND -->
                    {{-- <div class="band"> <img src="{{ asset('backend/admin/package/'.$package->image) }}" alt="" /> </div> --}}
                    <!-- IMAGE -->
                    <div class="v_place_img"> <img src="{{ asset('backend/admin/destination/'.$destination->image) }}" alt="Tour Booking" title="Tour Booking" /> </div>
                    <!-- TOUR TITLE & ICONS -->
                    <div class="b_pack rows">
                        <!-- TOUR TITLE -->
                        <div class="col-md-8 col-sm-8">
                            <h4><a href="{{ url('destination/'.$destination->id) }}">{{ $destination->name }}</a></h4>
                        </div>
                        <!-- TOUR ICONS -->
                        <div class="col-md-4 col-sm-4 pack_icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend/images/clock.png') }}" alt="Date" title="Tour Timing" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend/images/info.png') }}" alt="Details" title="View more details" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend/images/price.png') }}" alt="Price" title="Price" /> </a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend/images/map.png') }}" alt="Location" title="Location" /> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                 @endforeach
                
            </div>
        </div>
    </div>
</section>

<section>
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Package</span>                            <span class="ol-3"></span> <span class="ol-5">$99/-</span>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.5s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{ asset('frontend/images/icon/dis1.png') }}" alt="">
                                </a><span>Free WiFi</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.7s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{ asset('frontend/images/icon/dis2.png') }}" alt=""> </a><span>Breakfast</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="0.9s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{ asset('frontend/images/icon/dis3.png') }}" alt=""> </a><span>Pool</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.1s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{ asset('frontend/images/icon/dis4.png') }}" alt=""> </a><span>Television</span>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1.3s">
                                <a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{ asset('frontend/images/icon/dis5.png') }}" alt=""> </a><span>GYM</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-r">
                        <a href="#package">
                            <div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
                        </a>
                        <div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="rows pad-bot-redu tb-space">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Popular <span>Destination</span> </h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p>
            </div>
            <!-- CITY -->
            <div class="col-md-6">
                <a href="{{ url('destination') }}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="{{ asset('frontend/images/listing/home.jpg') }}" alt=""> </div>
                        <div class="tour-mig-lc-con">
                            <h5>Europe</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('destination') }}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="{{ asset('frontend/images/listing/home3.jpg') }}" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>Dubai</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('destination') }}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="{{ asset('frontend/images/listing/home2.jpg') }}" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>India</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('destination') }}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="{{ asset('frontend/images/listing/home1.jpg') }}" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>Usa</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('destination') }}">
                    <div class="tour-mig-like-com">
                        <div class="tour-mig-lc-img"> <img src="{{ asset('frontend/images/listing/home4.jpg') }}" alt=""> </div>
                        <div class="tour-mig-lc-con tour-mig-lc-con2">
                            <h5>London</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection