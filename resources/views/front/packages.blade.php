@php
    use App\Package;
    error_reporting(0);
    $country = DB::table('countries')->where('id', $package->country)->first();

@endphp


@extends('front.layouts.app')
@section('title', 'Packages')
@section('content')

<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>Our -> </span> Packages</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">Our Packages</a>
				</li>
			</ul>
			<p>Book travel packages and enjoy your holidays with distinctive experience</p>
		</div>
	</div>
</section>

<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
            <!-- TITLE & DESCRIPTION -->
            

            <div class="spe-title col-md-12">
                <h2>Our <span> packages</span></h2>
                <div class="title-line">
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                    <div class="tl-3"></div>
                </div>
                <br>
                <form>
                    <div class="row row-fluid">
                        <div class="col-md-3" style="padding: 1px !important">
                            <select style="display: block !important; height: 40px !important" name="category">
                                <option value=""  selected>Select Category...</option>
                                <option value="Domestic"
                                @if (isset($_REQUEST['category']))
                                    @if ($_REQUEST['category'] == "Domestic")
                                        selected 
                                    @endif
                                @endif
                                >Domestic</option>
                                <option value="International"
                                @if (isset($_REQUEST['category']))
                                    @if ($_REQUEST['category'] == "International")
                                        selected 
                                    @endif
                                @endif
                                >International</option>
                            </select>
                            
                        </div>
                        <div class="col-md-3" style="padding: 1px !important">
                            <select style="display: block !important; height: 40px !important" name="package_type">
                                <option selected  value="">Select Package Type...</option>
                                <option value="Budget Basic"
                                @if (isset($_REQUEST['package_type']))
                                    @if ($_REQUEST['package_type'] == "Budget Basic")
                                        selected 
                                    @endif
                                @endif
                                >Budget Basic</option>
                                <option value="Premium Package"
                                @if (isset($_REQUEST['package_type']))
                                    @if ($_REQUEST['package_type'] == "Premium Package")
                                        selected 
                                    @endif
                                @endif
                                >Premium Package</option>
                                <option value="Luxury Package"
                                @if (isset($_REQUEST['package_type']))
                                    @if ($_REQUEST['package_type'] == "Luxury Package")
                                        selected 
                                    @endif
                                @endif
                                >Luxury Package</option>
                                <option value="Family"
                                @if (isset($_REQUEST['package_type']))
                                    @if ($_REQUEST['package_type'] == "Family")
                                        selected 
                                    @endif
                                @endif
                                >Family</option>
                                <option value="Honeymoon"
                                @if (isset($_REQUEST['package_type']))
                                    @if ($_REQUEST['package_type'] == "Honeymoon")
                                        selected 
                                    @endif
                                @endif
                                >Honeymoon</option>
                            </select>
                        </div>

                        <div class="col-md-2" style="padding: 1px !important">
                            <select style="display: block !important; height: 40px !important" name="country">
                                <option selected  value="">Select Country...</option>
                                @foreach ($packageCountry as $pack)
                                    <option value="{{ $pack->country }}"
                                        @if (isset($_REQUEST['country']))
                                            @if ($_REQUEST['country'] == $pack->country)
                                                selected 
                                            @endif
                                        @endif
                                    >{{ $pack->country }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-md-2" style="padding: 1px !important">
                            <select style="display: block !important; height: 40px !important" name="price_range">
                                <option selected  value="">Select Price Range...</option>
                                10000-15000
                                15000-20000
                                20000-25000
                                25000-30000
                                30000-40000
                                 50000 - 75000
                                75000-100000
                                Upper than 100000

                                <option value="10000 - 15000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "10000 - 15000")
                                        selected 
                                    @endif
                                @endif
                                >10000 - 15000</option>
                                <option value="15000 - 20000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "15000 - 20000")
                                        selected 
                                    @endif
                                @endif
                                >15000 - 20000</option>
                                <option value="20000 - 25000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "20000 - 25000")
                                        selected 
                                    @endif
                                @endif
                                >20000 - 25000</option>
                                <option value="25000 - 30000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "25000 - 30000")
                                        selected 
                                    @endif
                                @endif
                                >25000 - 30000</option>
                                <option value="30000 - 35000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "30000 - 35000")
                                        selected 
                                    @endif
                                @endif
                                >30000 - 35000</option>
                                <option value="35000 - 40000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "35000 - 40000")
                                        selected 
                                    @endif
                                @endif
                                >35000 - 40000</option>
                                <option value="50000 - 75000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "50000 - 75000")
                                        selected 
                                    @endif
                                @endif
                                >50000 - 75000</option>
                                <option value="75000 - 100000"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "75000 - 100000")
                                        selected 
                                    @endif
                                @endif
                                >75000 - 100000</option>
                                <option value="100000 - Max"
                                @if (isset($_REQUEST['price_range']))
                                    @if ($_REQUEST['price_range'] == "100000 - Max")
                                        selected 
                                    @endif
                                @endif
                                >100000 - Max</option>
                                
                            </select>
                        </div>

                        <div class="col-md-2" style="padding: 1px !important">
                            <input style="display: block !important; height: 40px !important; line-height: 40px !important" type="submit" value="Search" name="search" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                        </div>


                        
                    </div>
                 
                </form>
              

            </div>

            <br clear="all">

            <div class="tour_head1">
                <div class="tr-room-type">
                    <ul>
                        
                        @if (isset($_REQUEST['search']))
                            @php
                                // error_reporting(0);
                                
                                $search = Package::query();
                                if ($_REQUEST['category'])
                                {
                                    $search->where('package_category', $_REQUEST['category']);
                                }
                                if ($_REQUEST['package_type'])
                                {
                                    $search->where('package_type', $_REQUEST['package_type']);
                                }
                                if ($_REQUEST['country'])
                                {
                                    $search->where('country', $_REQUEST['country']);
                                }
                                
                                if($_REQUEST['price_range'])
                                {
                                    $arr = explode(" - ", $_REQUEST['price_range']);
                                    $val1 = $arr[0];
                                    $val2 = $arr[1];

                                    if ($val2 == "Max")
                                    {
                                        $search->where('price', '>=', 100000);
                                    }
                                    else
                                    {
                                        $search->whereRaw('price BETWEEN ' . $val1 . ' AND ' . $val2 . '');
                                    }
                                    // $search->whereBetween('price', [$val1, $val2]);

                                }
                                


                                $search = $search->get();
                                // dd($search);
                            @endphp

                            @foreach ($search as $key => $package)
                                <li>
                                    <div class="tr-room-type-list">
                                        <div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('backend/admin/package/'.$package->image) }}" alt="">
                                        </div>
                                        <div class="col-md-6 tr-room-type-list-2">
                                            <h3 style="margin-top: 15px !important">{{ $package->package_name }}</h3>
                                                <span><b>Country</b> : {{ $package->country }}</span>
                                                <span><b>city</b> : {{ $package->city }}</span>
                                                <span><b>Total Night</b> : {{ $package->total_night }}</span>
                                                <span><b>Total Day</b> : {{ $package->total_day }}</span>
                                                <span><b>Package Type</b> : {{ $package->package_type }}</span>
                                                <span><b>Package Categoy</b> : {{ $package->package_category }}</span>

                                            <p><b>Amenities: </b>{{ mb_strimwidth($package->amenities, 0, 100, " and more...") }} </p>
                                        </div>
                                        <div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price </span> <span class="hot-list-p3-2"> 
                                            @if (!empty($package->discount_price))
                                                {{ $package->price - $package->discount_price }}
                                                <del>{{ $package->price }}</del>
                                            @else    
                                                {{ $package->price }}
                                            @endif
                                        </span> 
                                            @guest
                                                <a href="javascript:" onclick="return confirm('Please Login to Access...');" title="Please Login Firtst" data-toggle="tooltip" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a>
                                            @else
                                                @if (Auth::user()->role == "Admin")
                                                    <a ref="javascript:" onclick="return confirm('Please Login as User to Access...');" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a>   
                                                @else
                                                    <a href="{{ url('user/application') }}" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a>   
                                                @endif
                                                    <a href="{{ url('package/'.$package->id) }}" class="hot-page2-alp-quot-btn spec-btn-text">View</a>   
                                            @endguest
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else

                            @foreach ($packages as $key => $package)
                                <li>
                                    <div class="tr-room-type-list">
                                        <div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('backend/admin/package/'.$package->image) }}" alt="">
                                        </div>
                                        <div class="col-md-6 tr-room-type-list-2">
                                            <h3 style="margin-top: 15px !important">{{ $package->package_name }}</h3>
                                                <span><b>Country</b> : {{ $package->country }}</span>
                                                <span><b>city</b> : {{ $package->city }}</span>
                                                <span><b>Total Night</b> : {{ $package->total_night }}</span>
                                                <span><b>Total Day</b> : {{ $package->total_day }}</span>
                                                <span><b>Package Type</b> : {{ $package->package_type }}</span>
                                                <span><b>Package Categoy</b> : {{ $package->package_category }}</span>

                                            <p><b>Amenities: </b>{{ mb_strimwidth($package->amenities, 0, 100, " and more...") }} </p>
                                        </div>
                                        <div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price </span> <span class="hot-list-p3-2"> 
                                            @if (!empty($package->discount_price))
                                                {{ $package->price - $package->discount_price }}
                                                <del>{{ $package->price }}</del>
                                            @else    
                                                {{ $package->price }}
                                            @endif
                                        </span> 
                                            @guest
                                                <a href="javascript:" onclick="return confirm('Please Login to Access...');" title="Please Login Firtst" data-toggle="tooltip" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a>
                                            @else
                                                @if (Auth::user()->role == "Admin")
                                                    <a ref="javascript:" onclick="return confirm('Please Login as User to Access...');" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a>   
                                                @else
                                                    <a href="{{ url('user/application') }}" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a>   
                                                @endif
                                                <a href="{{ url('package/'.$package->id) }}" class="hot-page2-alp-quot-btn spec-btn-text">View</a>   
                                            @endguest
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </div>
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