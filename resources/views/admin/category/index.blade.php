@extends('admin.layouts.app')
@section('title', 'Categories')
@section('css')
<style type="text/css">
    label{font-size: 14px !important;}
    .select2-container .select2-selection--single .select2-selection__rendered
    {
        color: #9b9ba9 !important;
        font-size: 13px !important;
        font-weight: 100 !important;
    }
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
                        Categories
                        <span class="float-right">
                            <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Ceate">Create </a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="Ceate">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Categories</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('admin/category/store') }}">
                                                @csrf
                                                {{-- <div class="row mb-3">
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select data-plugin="customselect" class="form-control" name="country_id">
                                                                <option selected disabled value="">Select Country</option>
                                                                
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="row mb-3">
                                                    
                                                    <div class="col-lg-12">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" required>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mb-3">
                                                    
                                                    <div class="col-lg-12">
                                                        <label>Price</label>
                                                        <input type="text" class="form-control" name="price" required>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Create">
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
                        
                        
                        
                        <table id="basic-datatable" class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>S#</th>
                                    {{-- <th>Country</th> --}}
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Register At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 

                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        {{-- <td>
                                            @php
                                                error_reporting(0);
                                                $country = DB::table('countries')->where('id', $category->country_id)->first()
                                            @endphp
                                            {{ $country->name }}
                                        </td> --}}
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->price }}</td>
                                        <td>{{ date('d F Y', strtotime($category->created_at)) }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <!-- Modal -->
                                                <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $category->id }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('admin/category/delete/'.$category->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $category->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('admin/category/update/'.$category->id) }}">
                                                        @csrf
                                                        {{-- <div class="row mb-3">
                                                            <div class="col-xl-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Country</label>
                                                                    <select data-plugin="customselect" class="form-control" name="country_id">
                                                                        <option selected disabled value="">Select Country</option>
                                                                        
                                                                        @foreach ($countries as $country)
                                                                            <option value="{{ $country->id }}"
                                                                                @if ($country->id = $category->country_id)
                                                                                    selected 
                                                                                @endif
                                                                            >{{ $country->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-12">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-lg-12">
                                                                <label>Price</label>
                                                                <input type="text" class="form-control" name="price" value="{{ $category->price }}" required>
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
