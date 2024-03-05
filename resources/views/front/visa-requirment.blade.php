@php
	error_reporting(0);
    $country = DB::table('countries')->where('id', $visaRequirment->country)->first();

@endphp

<style type="text/css">
	.book-tab-inn{width: 100% !important}
</style>
@extends('front.layouts.app')
@section('title', 'Visa Requirment')
@section('content')

@if ($country != null)
	<section>
		<div class="rows inner_banner inner_banner_2">
			<div class="container">
				<h2><span>{{ $country->name }} -> </span> Visa Requirment</h2>
				<ul>
					<li><a href="{{ url('home') }}">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
					<li><a href="#inner-page-title" class="bread-acti">{{ $country->name }} Visa Requirment</a>
					</li>
				</ul>
				<p>Book travel packages and enjoy your holidays with distinctive experience</p>
			</div>
		</div>
	</section>


	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg mt-3">
				<div class="col-md-12">
					<!--====== TOUR TITLE ==========-->
					<br>
					<div class="tour_head">
						<h2>
							<r class="text-success">{{ $country->name }}</r> Inforamtion
						</h2> 
					</div>
					<br>




					<div class="book-tab-inn w-100" >
						<ul class="nav nav-tabs">
						  <li class="active"><a data-toggle="tab" href="#home"><i class="fab fa-fly"></i> Basic Information</a></li>
						  <li><a data-toggle="tab" href="#menu1">Tourist Visa</a></li>
						  <li><a data-toggle="tab" href="#menu2">Business Visa</a></li>
						  <li><a data-toggle="tab" href="#menu3">Process Timeline </a></li>
						   <li><a data-toggle="tab" href="#menu4">Visa Form </a></li>
						   <li><a data-toggle="tab" href="#menu5">Visa Image </a></li>
						</ul>

						<div class="tab-content book-tab-body">
						  <div id="home" class="tab-pane fade in active">
							<div class="book-tab-tit">
								<div class="tour_head1">
									<h3>Country : {{ $country->name }}</h3>
									<br>
									<table>
								
										<tbody>
											<tr>
												<th>Capital</th>
												<td>{{ $visaRequirment->capital }}</td>
												<th>Currency</th>
												<td>{{ $visaRequirment->currency }}</td>
											</tr>

											<tr>
												<th>Embassy Address</th>
												<td>{{ $visaRequirment->embassy_address }}</td>
												<th>Email</th>
												<td>{{ $visaRequirment->email }}</td>
											</tr>

											<tr>
												<th>Telephone</th>
												<td>{{ $visaRequirment->telephone }}</td>
												<th>Fax</th>
												<td>{{ $visaRequirment->fax }}</td>
											</tr>

											<tr>
												<th>Website Link</th>
												<td>{{ $visaRequirment->website_link }}</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>


							
						  </div>
						  <div id="menu1" class="tab-pane fade">
							<div class="book-tab-tit">
								<div class="tour_head1">
									<h3>Tourist Visa</h3>
									<p>{!! $visaRequirment->tourist_visa !!}</p>
								</div>
							</div>
						  </div>
						  <div id="menu2" class="tab-pane fade">
							<div class="book-tab-tit">
								<div class="tour_head1">
									<h3>Business Visa</h3>
									<p>{!! $visaRequirment->business_visa !!}</p>
								</div>
							</div>
							
						  </div>
						  <div id="menu3" class="tab-pane fade">
							<div class="book-tab-tit">
								<div class="tour_head1">
									<h3>Process Timeline</h3>
									<p>{!! $visaRequirment->process_timeline !!}</p>
								</div>
							</div>
							
						  </div>
						  <div id="menu4" class="tab-pane fade">
							<div class="book-tab-tit">
								<div class="tour_head1">
									<h3>Download Visa Form</h3>
									<embed src="{{ asset('backend/admin/visa-requirment/'.$visaRequirment->visa_form) }}" type="application/pdf" width="100%" height="1000px" />
								</div>
							</div>
						  </div>
						  <div id="menu5" class="tab-pane fade">
							<div class="book-tab-tit">
								<div class="tour_head1">
									<h3>Visa Image</h3>
									<img src="{{ asset('backend/admin/visa-requirment/'.$visaRequirment->image) }}">
								</div>
							</div>
						  </div>
						</div>
					</div>
				</div>		

			</div>
			<br><br>
		</div>
	</section>

@else

<section>
	<div class="rows inner_banner inner_banner_2">
		<div class="container">
			<h2>Visa Requirment</h2>
			<ul>
				<li><a href="{{ url('home') }}">Home</a>
				</li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
				<li><a href="#inner-page-title" class="bread-acti">Visa Requirment</a>
				</li>
			</ul>
			<p>Book travel packages and enjoy your holidays with distinctive experience</p>
		</div>
	</div>
</section>


<section>
	<div class="rows inn-page-bg com-colo">
		<div class="container inn-page-con-bg tb-space">
			<div class="col-md-12">
				<!--====== TOUR TITLE ==========-->
				<div class="tour_head">
					<h2>
						Visa Requirment is not Availabe for this country right now...
					</h2> 
					<br>
					<center>
						<a class="link-btn mx-auto" href="{{ url('home') }}">Back to Home</a>
					</center>
				</div>
				
			
			</div>


		

		</div>
	</div>
</section>
@endif
@endsection