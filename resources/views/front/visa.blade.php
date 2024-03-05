@extends('front.layouts.app')
@section('title', 'Visa Requirments')
@section('content')

<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>Our -> </span> Visa Requirments</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">Visa Requirments</a>
				</li>
			</ul>
			<p>Here is all visa Requirments </p>
		</div>
	</div>
</section>

<section>
    <div class="rows pad-bot-redu tb-space">
        <div class="container">
            <!-- TITLE & DESCRIPTION -->
            <div class="spe-title">
                <h2>Visa <span> Requirments</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <p>World's leading tour and travels Booking website,Over 30,000 Destinations worldwide.</p>
            </div>

            <form>
                <div class="row row-fluid">
                   
                    

                    <div class="col-md-3"></div>
                    <div class="col-md-4" style="padding: 1px !important">
                        <select style="display: block !important; height: 40px !important" name="country">
                            <option selected  value="">Select Country...</option>
                            @foreach ($visas as $vis)
                            @php
                                $country = DB::table('countries')->where('id', $vis->country)->first();
                            @endphp
                                <option value="{{ $vis->country }}"
                                    @if (isset($_REQUEST['country']))
                                        @if ($_REQUEST['country'] == $vis->country)
                                            selected 
                                        @endif
                                    @endif
                                >{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>


             

                    <div class="col-md-2" style="padding: 1px !important">
                        <input style="display: block !important; height: 40px !important; line-height: 40px !important" type="submit" value="Search" name="search" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                    </div>
                    <div class="col-md-3"></div>

                    
                </div>
             
            </form>
            <br><br><br>

            <div>
                @if (isset($_REQUEST['search']))
                    @php
                        $search = DB::table('visa_requirments')->where('country', $_REQUEST['country'])->get();
                    @endphp
                    @foreach ($search as $key =>  $visa)
                        @php
                            error_reporting(0);
                            $country = DB::table('countries')->where('id', $visa->country)->first();

                        @endphp
                        <!-- TOUR PLACE {{ $key+1 }} -->
                        <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                            <!-- OFFER BRAND -->
                            {{-- <div class="band"> <img src="{{ asset('backend/admin/package/'.$package->image) }}" alt="" /> </div> --}}
                            <!-- IMAGE -->
                            <div class="v_place_img"> <img style="width: 100%; height: 200px;" src="{{ asset('backend/admin/visa-requirment/'.$visa->image) }}"/> </div>
                            <!-- TOUR TITLE & ICONS -->
                            <div class="b_pack rows">
                                <!-- TOUR TITLE -->
                                <div class="col-md-8 col-sm-8">
                                    <h4><a href="{{ url('country?country='.$country->name) }}">{{ $country->name }}</a></h4>
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
                @else
                    @foreach ($visas as $key =>  $visa)
                        @php
                            error_reporting(0);
                            $country = DB::table('countries')->where('id', $visa->country)->first();

                        @endphp
                        <!-- TOUR PLACE {{ $key+1 }} -->
                        <div class="col-md-4 col-sm-6 col-xs-12 b_packages wow slideInUp" data-wow-duration="0.5s">
                            <!-- OFFER BRAND -->
                            {{-- <div class="band"> <img src="{{ asset('backend/admin/package/'.$package->image) }}" alt="" /> </div> --}}
                            <!-- IMAGE -->
                            <div class="v_place_img"> <img style="width: 100%; height: 200px;" src="{{ asset('backend/admin/visa-requirment/'.$visa->image) }}"/> </div>
                            <!-- TOUR TITLE & ICONS -->
                            <div class="b_pack rows">
                                <!-- TOUR TITLE -->
                                <div class="col-md-8 col-sm-8">
                                    <h4><a href="{{ url('country?country='.$country->name) }}">{{ $country->name }}</a></h4>
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
                @endif
            	
                
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
  
    <script>
        $(document).ready(function () {
            $("select").removeClass();
        });
    </script>
@endsection