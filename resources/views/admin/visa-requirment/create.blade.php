@extends('admin.layouts.app')
@section('title', 'Create Visa Requirment')
@section('css')
<style type="text/css">
    label{font-size: 14px !important;}
</style>
@endsection
@section('content')
<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-5">
                            Create Visa Requirment
                            <span class="float-right">
                                <a class="btn btn-primary" href="{{ url('admin/visa-requirment') }}">Back </a>
                            </span>
                        </h4>
                        <form method="post" action="{{ url('admin/visa-requirment/store') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div id="smartwizard-arrows">
                                <ul>
                                    <li><a href="#sw-arrows-step-1">Requirment<small class="d-block">Step 1</small></a></li>
                                    <li><a href="#sw-arrows-step-2">Tourist Visa<small class="d-block">Step 2</small></a></li>
                                    <li><a href="#sw-arrows-step-3">Business Visa<small class="d-block">Step 3</small></a></li>
                                    <li><a href="#sw-arrows-step-4">Process Timeline<small class="d-block">Step 4</small></a></li>
                                    <li><a href="#sw-arrows-step-5">Other<small class="d-block">Step 5</small></a></li>
                                </ul>
                                <div class="p-3">
                                    <div id="sw-arrows-step-1">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Country</label>
                                                    <select data-plugin="customselect" class="form-control" name="country">
                                                        <option selected disabled value="">Select Country</option>
                                                        
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Capital</label>
                                                    <input type="text" class="form-control"  name="capital">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Currency</label>
                                                    <input type="text" class="form-control"  name="currency">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Embassy Address:</label>
                                                    <input type="text" class="form-control"  name="embassy_address">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control"  name="email">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Telephone</label>
                                                    <input type="text" class="form-control"  name="telephone">
                                                </div>
                                            </div>




                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Fax</label>
                                                    <input type="text" class="form-control"  name="fax">
                                                </div>
                                            </div>


                                            <div class="col-xl-6 col-sm-6">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Website Link</label>
                                                    <input type="text" class="form-control"  name="website_link">
                                                </div>
                                            </div>



                                            


                                        </div> <!-- end row -->
                                    </div>
                                    <div id="sw-arrows-step-2">
                                        <div class="row">
                                        
                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Tourist Visa</label>
                                                    <textarea name="tourist_visa"></textarea>
                                                </div>
                                            </div>
                                        

                                            
                                        </div> <!-- end row -->
                                    </div>


                                    <div id="sw-arrows-step-3">
                                        <div class="row">
                                        
                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Business Visa</label>
                                                    <textarea name="business_visa"></textarea>
                                                </div>
                                            </div>
                                            


                                            
                                        </div> <!-- end row -->
                                    </div>


                                    <div id="sw-arrows-step-4">
                                        <div class="row">
                                        
                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Process Timeline</label>
                                                    <textarea name="process_timeline"></textarea>
                                                </div>
                                            </div>    
                                            
                                        </div> <!-- end row -->
                                    </div>


                                    <div id="sw-arrows-step-5">
                                        <div class="row">
                                        
                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Status</label>
                                                    <select data-plugin="customselect" class="form-control" name="status">
                                                        <option value="Active">Active</option>
                                                        <option value="InActive">InActive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Visa Form</label>
                                                    <input type="file" class="form-control"  name="visa_form">
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control"  name="image">
                                                </div>
                                            </div>
                                                

                                            <div class="col-xl-12 col-sm-12">
                                                <div class="form-group mt-3 mt-sm-0">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Save">
                                                </div>
                                            </div>

                                            
                                        </div> <!-- end row -->
                                    </div>

                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
        
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'tourist_visa' );
    CKEDITOR.replace( 'business_visa' );
    CKEDITOR.replace( 'process_timeline' );
</script>
@endsection
