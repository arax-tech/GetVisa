@extends('admin.layouts.app')
@section('title', 'Package')
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
                        Packages
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ url('admin/package') }}">Back </a>
                        </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form method="post" action="{{ url('admin/package/store') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Name <span class="text-danger">*</span></label>
                                        <input class="form-control" required type="text" placeholder="Enter Name" name="package_name">
                                        <span class="invalid-feedback" id="cms_title_msg"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">Country <span class="text-danger">*</span></label>
                                        <input type="text" name="country" class="form-control" required="" placeholder="Enter Country">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control" required="" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">No of Night <span class="text-danger">*</span></label>
                                        <input type="text" name="total_night" class="form-control" required maxlength="2" placeholder="Enter No of Night">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">No of Day <span class="text-danger">*</span></label>
                                        <input type="text" name="total_day" required="" class="form-control" maxlength="2" placeholder="Enter No of Days">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">Price <span class="text-danger">*</span></label>
                                        <input type="number" placeholder="Enter package price" required="" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="mt-2">Discount Price</label>
                                        <input type="number" placeholder="Enter package discount price" class="form-control" name="discount_price">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mt-2">Package Category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="package_category">
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Domestic">Domestic</option>
                                            <option value="International">International</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mt-2">Package Type <span class="text-danger">*</span></label>
                                        <select class="form-control" name="package_type">
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Budget Basic">Budget Basic</option>
                                            <option value="Premium Package">Premium Package</option>
                                            <option value="Luxury Package">Luxury Package</option>
                                            <option value="Family">Family</option>
                                            <option value="Honeymoon">Honeymoon</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Amenities</label> <br>
                                        <div class="row" >
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Meal"> Meal
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Internet free wifi"> Internet free wifi
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Bathroom with shower"> Bathroom with shower
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="TV facilities"> TV facilities
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Swimming pool"> Swimming pool
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Coffee and Tea"> Coffee and Tea
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Daily housekeeping"> Daily housekeeping
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Fitness"> Fitness
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Parking"> Parking
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Kitchen facilities"> Kitchen facilities
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Free Drink"> Free Drink
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Blanket"> Blanket
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Dustbin"> Dustbin
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Pillows"> Pillows
                                            </div>

                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Breakfast"> Breakfast
                                            </div>

                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Visa"> Visa
                                            </div>

                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Insurance"> Insurance
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Meet and Greet"> Meet and Greet
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Airport Transfer"> Airport Transfer
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Flights"> Flights
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Dinner"> Dinner
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Offer"> Offer
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="City tour"> City tour
                                            </div>
                                            <div class="col-md-3 mt-2">
                                                <input type="checkbox" name="amenities[]" value="Sightseeing"> Sightseeing
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mt-2">Package Image</label>
                                        <input type="file" required="" class="form-control" name="image">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="mt-2">Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" required>
                                        <option value="Active">Active</option>
                                        <option value="InActive">InActive</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control textarea" name="package_description" ></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Inclusion <span class="text-danger">*</span></label>
                                        <textarea class="form-control textarea1" name="package_inclusion" ></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="mt-2">Package Exclusions <span class="text-danger">*</span></label>
                                        <textarea class="form-control textarea2" name="package_exclusions" ></textarea>
                                    </div>
                                </div>
                           
                                
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Create" class="btn btn-primary btn-block  mt-3">
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