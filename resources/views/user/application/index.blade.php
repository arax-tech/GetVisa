@extends('user.layouts.app')
@section('title', 'Application')
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
                        Applications
                        <span class="float-right">
                            <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Ceate">Create </a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="Ceate">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Application</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('user/application/store') }}">
                                                @csrf
                                                <div class="row mb-3">
                                                 
                                                    <div class="col-lg-4">
                                                        <label>Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="name" required>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Passport Number<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="passport_no" required>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Passport Expiry Date<span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" name="passport_expiry_date" required>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-4">
                                                        <label>No of old Passport <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="no_of_old_passport" required>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" name="date_of_birth" required>
                                                    </div>


                                                    <div class="col-lg-4">
                                                        <label>Country <span class="text-danger">*</span></label>
                                                        <select  class="form-control" name="country">
                                                            <option selected disabled value="">Select Country</option>
                                                            
                                                            @foreach ($VisaRequirments as $visa)
                                                            @php
                                                                error_reporting(0);
                                                                $country = DB::table('countries')->where('id', $visa->country)->first()
                                                            @endphp
                                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                   
                                                    
                                                    
                                                </div>


                                                <div class="row mb-3">
                                                    <div class="col-lg-4">
                                                        <label>Visa Type <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="visa_type" required>
                                                            <option selected disabled value="">Choose</option>
                                                            @foreach ($categories as $category)
                                                                <option value="<?php echo $category->name."-|-".$category->price?>">{{ $category->name }} - {{ $category->price }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Visa Price <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="price" readonly="">
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Select Priority <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="priority" required>
                                                            <option selected disabled value="">Choose</option>
                                                            <option value="Normal">Normal</option>
                                                            <option value="Urgent (Priority)">Urgent (Priority) {Extra Fee May Applicable For Urgent}</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Apply">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        
                        
                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Application ID</th>
                                    <th>Name</th>
                                    <th>Passport Number</th>
                                    <th>Country</th>
                                    <th>Visa Type</th>
                                    <th>Payment Status</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                    <th>Apply Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 

                                @foreach ($applications as $key => $application)
                                    <tr>
                                        <td>{{ $application->id }}</td>
                                        <td>{{ $application->name }}</td>
                                        <td>{{ $application->passport_no }}</td>
                                        <td>
                                            @php
                                                error_reporting(0);
                                                $country = DB::table('countries')->where('id', $application->country)->first()
                                            @endphp
                                            {{ $country->name }}
                                        </td>
                                        <td>{{ $application->visa_type }}</td>
                                        <td>
                                            @if ($application->payment_status == "Paid")
                                                <span class="badge badge-success">Paid</span>
                                            @else
                                                <span class="badge badge-danger">Unpaid</span>
                                            @endif
                                        </td>

                                        <td><span class="badge badge-primary">{{ $application->status }}</span></td>
                                        <td>{{ $application->remarks }}</td>
                                        <td>{{ $application->created_at->format('d M Y') }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <!-- Modal -->
                                                <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $application->id }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('user/application/delete/'.$application->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $application->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Application</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('user/application/update/'.$application->id) }}">
                                                        @csrf
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-4">
                                                                <label>Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="name" required value="{{ $application->name }}">
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Passport Number<span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="passport_no" required value="{{ $application->passport_no }}">
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Passport Expiry Date<span class="text-danger">*</span></label>
                                                                <input type="date" class="form-control" name="passport_expiry_date" required value="{{ $application->passport_expiry_date }}">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-4">
                                                                <label>No of old Passport <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="no_of_old_passport" required value="{{ $application->no_of_old_passport }}">
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Date of Birth <span class="text-danger">*</span></label>
                                                                <input type="date" class="form-control" name="date_of_birth" required value="{{ $application->date_of_birth }}">
                                                            </div>


                                                            <div class="col-lg-4">
                                                                <label>Country <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="country" required value="{{ $application->country }}">
                                                            </div>

                                                           
                                                            
                                                            
                                                        </div>


                                                        <div class="row mb-3">
                                                            <div class="col-lg-4">
                                                                <label>Visa Type <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="visa_type" required>
                                                                    <option value="Single Entry"
                                                                    @if ($application->visa_type == "Single Entry")
                                                                        selected 
                                                                    @endif
                                                                    >Single Entry</option>
                                                                    <option value="Dubble Entry"
                                                                    @if ($application->visa_type == "Dubble Entry")
                                                                        selected 
                                                                    @endif
                                                                    >Dubble Entry</option>
                                                                    <option value="Multiple Entry"
                                                                    @if ($application->visa_type == "Multiple Entry")
                                                                        selected 
                                                                    @endif
                                                                    >Multiple Entry</option>
                                                                    <option value="E-Visa Single"
                                                                    @if ($application->visa_type == "E-Visa Single")
                                                                        selected 
                                                                    @endif
                                                                    >E-Visa Single</option>
                                                                    <option value="E-Visa Dubble"
                                                                    @if ($application->visa_type == "E-Visa Dubble")
                                                                        selected 
                                                                    @endif
                                                                    >E-Visa Dubble</option>
                                                                    <option value="E-Visa Multiple"
                                                                    @if ($application->visa_type == "E-Visa Multiple")
                                                                        selected 
                                                                    @endif
                                                                    >E-Visa Multiple</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Visa Category <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="category" required>
                                                                    <option selected disabled value="">Choose</option>
                                                                    @foreach ($categories as $category)
                                                                        <option value="<?php echo $category->name."-|-".$category->price?>"
                                                                            @if ($category->name == $application->category)
                                                                                selected
                                                                            @endif
                                                                        >{{ $category->name }} - {{ $category->price }}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Select Priority <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="priority" required>
                                                                    <option selected disabled value="">Choose</option>
                                                                    <option value="Normal"
                                                                    @if ($application->priority == "Normal")
                                                                        selected 
                                                                    @endif
                                                                    >Normal</option>
                                                                    <option value="Urgent (Priority)"
                                                                    @if ($application->priority == "Urgent (Priority)")
                                                                        selected 
                                                                    @endif
                                                                    >Urgent (Priority) {Extra Fee May Applicable For Urgent}</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="submit" class="btn btn-primary btn-block" value="Update">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                                
                                
                            </tbody>
                        </table>
                    </div> 
                </div> 
            </div>
        </div>
        
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="visa_type"]').on('change', function(){
            var visa_type = $(this).val();
            var price=visa_type.split('-|-');
            $("#price").val(price[1]);

        });
    });
</script>
@endsection
