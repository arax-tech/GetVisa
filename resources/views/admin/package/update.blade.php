@extends('admin.layouts.app')
@section('title', 'Update Package')
@section('css')
<style type="text/css">
label{font-size: 14px !important;}
.select2-container--default .select2-selection--multiple .select2-selection__rendered li{font-size: 12px !important; padding: 4px !important;}
td{vertical-align: middle !important;}
</style>
@endsection
@section('content')
<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-12 mt-2">
                        <h4 class="header-title">
                        Update Package
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ url('admin/package') }}">Back </a>
                        </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form method="post" action="{{ url('admin/package/update/'.$package->id) }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Name <span class="text-danger">*</span></label>
                                        <input class="form-control" required type="text" placeholder="Enter Name" name="package_name" value="{{ $package->package_name }}">
                                        <span class="invalid-feedback" id="cms_title_msg"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">Country <span class="text-danger">*</span></label>
                                        <input type="text" name="country" value="{{ $package->country }}" class="form-control" required="" placeholder="Enter Country">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" value="{{ $package->city }}" class="form-control" required="" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">No of Night <span class="text-danger">*</span></label>
                                        <input type="text" name="total_night" value="{{ $package->total_night }}" class="form-control" required maxlength="2" placeholder="Enter No of Night">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">No of Day <span class="text-danger">*</span></label>
                                        <input type="text" name="total_day" value="{{ $package->total_day }}" required="" class="form-control" maxlength="2" placeholder="Enter No of Days">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">Price <span class="text-danger">*</span></label>
                                        <input type="text" maxlength="8" placeholder="Enter package price" required="" class="form-control" name="price" value="{{ $package->price }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">Discount Price</label>
                                        <input type="text" maxlength="8" placeholder="Enter package discount price" class="form-control" name="discount_price" value="{{ $package->discount_price }}">
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mt-2">Package Category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="package_category">
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Domestic"
                                            @if ($package->package_category == "Domestic")
                                                selected 
                                            @endif
                                            >Domestic</option>
                                            <option value="International"
                                            @if ($package->package_category == "International")
                                                selected 
                                            @endif
                                            >International</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mt-2">Package Type <span class="text-danger">*</span></label>
                                        <select class="form-control" name="package_type">
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Budget Basic"
                                            @if ($package->package_type == "Budget Basic")
                                                selected 
                                            @endif
                                            >Budget Basic</option>
                                            <option value="Premium Package"
                                            @if ($package->package_type == "Premium Package")
                                                selected 
                                            @endif
                                            >Premium Package</option>
                                            <option value="Luxury Package"
                                            @if ($package->package_type == "Luxury Package")
                                                selected 
                                            @endif
                                            >Luxury Package</option>
                                            <option value="Family"
                                            @if ($package->package_type == "Family")
                                                selected 
                                            @endif
                                            >Family</option>
                                            <option value="Honeymoon"
                                            @if ($package->package_type == "Honeymoon")
                                                selected 
                                            @endif
                                            >Honeymoon</option>
                                        </select>
                                    </div>
                                </div>

                                @php
                                    $array = $package['amenities'];
                                    $amenities_name = explode(",", $array);
                                @endphp
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Amenities</label> <br>
                                        <div class="row" >
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Meal" @if (in_array("Meal", $amenities_name)) checked @endif> Meal
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Internet free wifi" @if (in_array("Internet free wifi", $amenities_name)) checked @endif> Internet free wifi
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Bathroom with shower" @if (in_array("Bathroom with shower", $amenities_name)) checked @endif> Bathroom with shower
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="TV facilities" @if (in_array("TV facilities", $amenities_name)) checked @endif> TV facilities
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Swimming pool" @if (in_array("Swimming pool", $amenities_name)) checked @endif> Swimming pool
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Coffee and Tea" @if (in_array("Coffee and Tea", $amenities_name)) checked @endif> Coffee and Tea
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Daily housekeeping" @if (in_array("Daily housekeeping", $amenities_name)) checked @endif> Daily housekeeping
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Fitness" @if (in_array("Fitness", $amenities_name)) checked @endif> Fitness
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Parking" @if (in_array("Parking", $amenities_name)) checked @endif> Parking
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Kitchen facilities" @if (in_array("Kitchen facilities", $amenities_name)) checked @endif> Kitchen facilities
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Free Drink" @if (in_array("Free Drink", $amenities_name)) checked @endif> Free Drink
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Blanket" @if (in_array("Blanket", $amenities_name)) checked @endif> Blanket
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Dustbin" @if (in_array("Dustbin", $amenities_name)) checked @endif> Dustbin
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Pillows" @if (in_array("Pillows", $amenities_name)) checked @endif> Pillows
                                            </div>







                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Breakfast" @if (in_array("Breakfast", $amenities_name)) checked @endif> Breakfast
                                            </div>

                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Visa" @if (in_array("Visa", $amenities_name)) checked @endif> Visa
                                            </div>

                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Insurance" @if (in_array("Insurance", $amenities_name)) checked @endif> Insurance
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Meet and Greet" @if (in_array("Meet and Greet", $amenities_name)) checked @endif> Meet and Greet
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Airport Transfer" @if (in_array("Airport Transfer", $amenities_name)) checked @endif> Airport Transfer
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Flights" @if (in_array("Flights", $amenities_name)) checked @endif> Flights
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Dinner" @if (in_array("Dinner", $amenities_name)) checked @endif> Dinner
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Offer" @if (in_array("Offer", $amenities_name)) checked @endif> Offer
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="City tour" @if (in_array("City tour", $amenities_name)) checked @endif> City tour
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Sightseeing" @if (in_array("Sightseeing", $amenities_name)) checked @endif> Sightseeing
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mt-2">Package Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="mt-2">Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" required>
                                        <option value="Active"
                                        @if ($package->status == "Active")
                                            selected 
                                        @endif
                                        >Active</option>
                                        <option value="InActive"
                                        @if ($package->status == "InActive")
                                            selected 
                                        @endif
                                        >InActive</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control textarea" name="package_description" >{!! $package->package_description !!}</textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Inclusion <span class="text-danger">*</span></label>
                                        <textarea class="form-control textarea1" name="package_inclusion" >{!! $package->package_inclusion !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Exclusions <span class="text-danger">*</span></label>
                                        <textarea class="form-control textarea2" name="package_exclusions" >{!! $package->package_exclusions !!}</textarea>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-primary btn-block  mt-3">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'package_description' );
    CKEDITOR.replace( 'package_inclusion' );
    CKEDITOR.replace( 'package_exclusions' );
</script>
@endsection