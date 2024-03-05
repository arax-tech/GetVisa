@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-12 mt-2">
                        <h4 class="header-title">Update Password</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('admin/update_password') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label>Current Password</label>
                                    <input type="password" class="form-control" name="current_password" id="current_password">
                                    <span id="change"></span>
                                </div>
                                
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label>New Password</label>
                                    <input type="Password" class="form-control" name="new_password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="con-password">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-block" value="Update Password">
                                </div>
                            </div>
                        </form>
                        </div> <!-- end card body-->
                        </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    
                </div>
            </div>
            @endsection
            @section('js')
            <script type="text/javascript">
            $("#current_password").on('change', function(){
            var current_password = $(this).val();
            // alert(current_password);
            var url = "{{ url('/admin/check-pwd')}}";
            $.ajax({
            type: 'get',
            url: url,
            data: {current_password:current_password},
            success:function(resp){
            $("#change").html(resp);
            },
            error:function(resp){
            alert("Opps Try Agian...");
            }
            });
            });
            </script>
            @endsection