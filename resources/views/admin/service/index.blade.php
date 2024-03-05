@extends('admin.layouts.app')
@section('title', 'Service')
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
                        Services
                        <span class="float-right">
                            <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Ceate">Create </a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="Ceate">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Service</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('admin/service/store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3">
                                                 
                                                    <div class="col-lg-12">
                                                        <label>Service Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="name" required>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <label>Service Image <span class="text-danger">*</span></label>
                                                        <input type="file" class="form-control" name="image" required>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label>Service Status <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="status" required>
                                                            <option value="Active">Active</option>
                                                            <option value="InActive">InActive</option>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                </div>


                                                <div class="row mb-3">
                                                 
                                                    <div class="col-lg-12">
                                                        <label>Service Description</label>
                                                        <textarea class="form-control" name="description"></textarea>
                                                    </div>
                                                    
                                                </div>

                                                
                                                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Save">
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
                                    <th style="width: 100px;">Image</th>
                                    <th style="width: 100px;">Name</th>
                                    <th style="width: 100px;">Status</th>
                                    <th style="width: 150px;">Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 

                                @foreach ($services as $key => $service)
                                    <tr>
                                        <td>
                                            @if (!empty($service->image))
                                                <img class="rounded-circle" width="50px" height="50px" src="{{ asset('backend/admin/service/'.$service->image) }}" />
                                            @else
                                                <img class="rounded-circle" width="50px" height="50px" src="{{ asset('placeholder.jpg') }}" />
                                            @endif
                                        </td>
                                        <td>{{ $service->name }}</td>
                                        <td>
                                            @if ($service->status == "Active")
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">InActive</span>                                            
                                            @endif
                                        </td>
                                        <td>{{ mb_strimwidth($service->description, 0, 80, "...") }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <!-- Modal -->
                                                <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $service->id }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('admin/service/delete/'.$service->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $service->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Services</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('admin/service/update/'.$service->id) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-12">
                                                                <label>Service Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="name" value="{{ $service->name }}" required>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-6">
                                                                <label>Service Image <span class="text-danger">*</span></label>
                                                                <input type="file" class="form-control" name="image">
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <label>Service Status <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="status" required>
                                                                    <option value="Active"
                                                                    @if ($service->status == "Active")
                                                                        selected 
                                                                    @endif
                                                                    >Active</option>
                                                                    <option value="InActive"
                                                                    @if ($service->status == "InActive")
                                                                        selected 
                                                                    @endif
                                                                    >InActive</option>
                                                                </select>
                                                            </div>
                                                            
                                                            
                                                        </div>


                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-12">
                                                                <label>Service Description</label>
                                                                <textarea class="form-control" name="description">{{ $service->description }}</textarea>
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
