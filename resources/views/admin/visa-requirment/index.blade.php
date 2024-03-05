@extends('admin.layouts.app')
@section('title', 'Visa Requirment')
@section('content')
<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-12 mt-2">
                        <h4 class="header-title">
                            Visa Requirment
                            <span class="float-right">
                                <a class="btn btn-primary" href="{{ url('admin/visa-requirment/create') }}">Create </a>
                            </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        
                        
                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    <th>Country</th>
                                    <th>Capital</th>
                                    <th>Currency</th>
                                    <th>Embassy Address</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 

                                @foreach ($visas as $key => $visa)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            @php
                                                error_reporting(0);
                                                $country = DB::table('countries')->where('id', $visa->country)->first();
                                                echo $country->name;
                                            @endphp
                                        </td>
                                        <td>{{ $visa->capital }}</td>
                                        <td>{{ $visa->currency }}</td>
                                        <td>{{ $visa->embassy_address }}</td>
                                        <td>
                                            @if ($visa->status == "Active")
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">InActive</span>
                                            @endif  
                                        </td>
                                    
                                        <td>
                                            <div class="btn-group">
                                                <!-- Modal -->
                                                <a class="btn btn-primary" href="{{ url('admin/visa-requirment/edit/'.$visa->id) }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('admin/visa-requirment/delete/'.$visa->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
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
