@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-4 col-xl-6">
                <h4 class="mb-1 mt-0">Dashboard</h4>
            </div>
        </div>

        <!-- content -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Destination
                                </span>
                                <h2 class="mb-0">{{ $destination }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="framer"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Package
                                </span>
                                <h2 class="mb-0">{{ $package }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="gift"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Services
                                </span>
                                <h2 class="mb-0">{{ $service }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="git-branch"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Visa Requirments
                                </span>
                                <h2 class="mb-0">{{ $visaRequirment }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="flag"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Application
                                </span>
                                <h2 class="mb-0">{{ $application }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="activity"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Users
                                </span>
                                <h2 class="mb-0">{{ $user }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="user"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    </div>
</div>

@endsection
