@extends('user.layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="content mt-4">
        <!-- Start Content-->
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" style="height: 375px">
                        <div class="card-body">
                            <div class="text-center mt-3">
                                @if (!empty(auth::user()->image))
                                <img src="{{ asset('backend/user/profile/'.auth::user()->image) }}" class="avatar-lg rounded-circle">
                                @else
                                <img src="{{ asset('images/placeholder.jpg') }}" class="avatar-lg rounded-circle">
                                @endif
                                <h5 class="mt-2 mb-0 text-capitalize">{{ auth::user()->name }}</h5>
                                </h6>
                                <h6 class="text-muted font-weight-normal mt-1 mb-4 text-success">Online</h6>
                                
                                
                            </div>
                            <!-- profile  -->
                            
                            <div class="mt-3 pt-2 border-top">
                                <h4 class="mb-3 font-size-15">Personal Info</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0 text-muted">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td class="text-capitalize">{{ auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ auth::user()->email }}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Update Info</h4>
                                    
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('user/profile') }}">
                                        @csrf
                                        
                                        <div class="row">
                                            <div class="col">
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" value="{{ auth::user()->email }}">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label >Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="profile" class="custom-file-input">
                                                            <label class="custom-file-label" for="file">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Update Profile">
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </form>
                                    
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection