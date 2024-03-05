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
                            <a class="btn btn-primary" href="{{ url('admin/package/create') }}">Create </a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="Ceate">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Package</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        
                        
                        <table id="basic-datatable" class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Package Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Days</th>
                                    <th>Nights</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($packages as $key => $package)
                                <tr>
                                    <td>
                                        @if (!empty($package->image))
                                        <img class="rounded-circle" width="50px" height="50px" src="{{ asset('backend/admin/package/'.$package->image) }}" />
                                        @else
                                        <img class="rounded-circle" width="50px" height="50px" src="{{ asset('placeholder.jpg') }}" />
                                        @endif
                                    </td>
                                    <td>{{ $package->package_name }}</td>
                                    <td>{{ $package->country }}</td>
                                    <td>{{ $package->city }}</td>
                                    <td>{{ $package->total_night }}</td>
                                    <td>{{ $package->total_day }}</td>
                                    <td>{{ $package->price }}</td>
                                    <td>
                                        @if ($package->status == "Active")
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">InActive</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <!-- Modal -->
                                            <a class="btn btn-primary" href="{{ url('admin/package/edit/'.$package->id) }}">Update</a>
                                            <a  class="btn btn-danger Delete" href="{{ url('admin/package/delete/'.$package->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                               
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