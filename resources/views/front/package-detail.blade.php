@extends('front.layouts.app')
@section('title', 'Package Detail')
@section('content')
<style type="text/css">
	.book-tab-inn{width: 100% !important}
</style>s
<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2><span>package -> </span> {{ $package->package_name }}</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">{{ $package->package_name }}</a>
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




				<br>
				<div class="tour_head">
					<h2>
						<r class="text-success">{{ $package->package_name }}</r> Inforamtion
					</h2> 
				</div>
				<br>




				<div class="book-tab-inn w-100" >
					<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#home"><i class="fab fa-fly"></i> Basic Information</a></li>
					  <li><a data-toggle="tab" href="#menu1">Package Description</a></li>
					  <li><a data-toggle="tab" href="#menu2">Package Inclusion</a></li>
					  <li><a data-toggle="tab" href="#menu3">Package Exclusions </a></li>
					   <li><a data-toggle="tab" href="#menu5">Visa Image </a></li>
					</ul>

					<div class="tab-content book-tab-body">
					  <div id="home" class="tab-pane fade in active">
						<div class="book-tab-tit">
							<div class="tour_head1">
								<h3>Package : {{ $package->package_name }}</h3>
								<br>
								<table>
							
									<tbody>
										<tr>
											<th>Country</th>
											<td>{{ $package->country }}</td>
											<th>City</th>
											<td>{{ $package->city }}</td>
										</tr>

										<tr>
											<th>Total Night</th>
											<td>{{ $package->total_night }}</td>
											<th>Total Day</th>
											<td>{{ $package->total_day }}</td>
										</tr>

										<tr>
											<th>Price</th>
											<td>{{ $package->price }}</td>
											<th>Discount Price</th>
											<td>{{ $package->discount_price }}</td>
										</tr>

										<tr>
											<th>Package Category</th>
											<td>{{ $package->package_category }}</td>
											<th>Package Type</th>
											<td>{{ $package->package_type }}</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>


						
					  </div>
					  <div id="menu1" class="tab-pane fade">
						<div class="book-tab-tit">
							<div class="tour_head1">
								<h3>Package Description</h3>
								<p>{!! $package->package_description !!}</p>
							</div>
						</div>
					  </div>
					  <div id="menu2" class="tab-pane fade">
						<div class="book-tab-tit">
							<div class="tour_head1">
								<h3>Package Inclusion</h3>
								<p>{!! $package->package_inclusion !!}</p>
							</div>
						</div>
						
					  </div>
					  <div id="menu3" class="tab-pane fade">
						<div class="book-tab-tit">
							<div class="tour_head1">
								<h3>Package Exclusions</h3>
								<p>{!! $package->package_exclusions !!}</p>
							</div>
						</div>
						
					  </div>
			
					  <div id="menu5" class="tab-pane fade">
						<div class="book-tab-tit">
							<div class="tour_head1">
								<h3>Package Image</h3>
								<img src="{{ asset('backend/admin/package/'.$package->image) }}">
							</div>
						</div>
					  </div>
					</div>
				</div>



				
			</div>
			<div class="col-md-3 tour_r">
				<!--====== SPECIAL OFFERS ==========-->
				
				
				<!--====== PUPULAR TOUR PACKAGES ==========-->
				<div class="tour_right tour_rela tour-ri-com">
					<h3>Popular Packages</h3>
					@foreach ($packages as $serv)
                    	<div class="tour_rela_1"> <img src="{{ asset('backend/admin/package/'.$serv->image) }}" alt="" />
                    		<h4>Package : {{ $serv->package_name }}</h4>
                    		<a href="{{ url('package/'.$serv->id) }}" class="link-btn">View this Package</a> </div>
                    @endforeach
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection