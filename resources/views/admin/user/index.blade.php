@extends('admin.layouts.app')
@section('title', 'Users')
@section('css')
<style type="text/css">
    label{font-size: 14px !important;}
    .select2-container--default .select2-selection--multiple .select2-selection__rendered li{font-size: 12px !important; padding: 4px !important;}
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
                        Users
                        <span class="float-right">
                            <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Ceate">Create </a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="Ceate">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Users</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('admin/user/store') }}">
                                                @csrf
                                                <div class="row mb-3">
                                                 
                                                    <div class="col-lg-6">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    
                                                    <div class="col-lg-12">
                                                        <label>Password</label>
                                                        <input type="text" class="form-control" name="password" required>
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
                                    <th style="width: 120px;">S#</th>
                                    <th style="width: 150px;">Name</th>
                                    <th style="width: 150px;">Email</th>
                                    <th style="width: 150px;">Register At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 

                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ date('d F Y', strtotime($user->created_at)) }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <!-- Modal -->
                                                <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $user->id }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('admin/user/delete/'.$user->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $user->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Companies</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('admin/user/update/'.$user->id) }}">
                                                        @csrf
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-6">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-lg-12">
                                                                <label>Password</label>
                                                                <input type="text" class="form-control" name="password">
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
