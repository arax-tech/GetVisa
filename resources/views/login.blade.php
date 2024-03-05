<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <!-- App css -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <style type="text/css">
            .auth-page-sidebar {
                padding: 0;
                background-image: url({{ asset('images/auth-bg.jpg') }});
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
                position: relative;
            }
        </style>
    </head>

    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-6 p-5">
                                        <div class="mx-auto mb-5 text-center">
                                                <h3 class="d-inline align-middle ml-1 text-logo">Login</h3>
                                        
                                        </div>

                                        <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                            access admin panel.</p>

                                        <form action="{{ url('login') }}" class="authentication-form" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-control-label">Email Address</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" autofocus class="form-control" name="email" >
                                                </div>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label class="form-control-label">Password</label>
                                                {{-- <a href="pages-recoverpw.html" class="float-right text-muted text-unline-dashed ml-1">Forgot your password?</a> --}}
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="checkbox-signin" checked>
                                                    <label class="custom-control-label" for="checkbox-signin">Remember
                                                        me</label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit"> Log In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 d-none d-md-inline-block">
                                        <div class="auth-page-sidebar">
                                            <div class="overlay"></div>
                                            <div class="auth-user-testimonial">
                                                <p class="font-size-24 font-weight-bold text-white mb-1">Welcome Back!</p>
                                                <p class="lead">"Enter your email address and password to
                                            access admin panel."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                      

                    </div> <!-- end col -->
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="{{ url('register') }}" class="text-primary font-weight-bold ml-1">Sign Up</a></p>
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/js/app.min.js') }}"></script>

        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        @if(Session::has('flash_message_error'))
            <script>
                $(document).ready(function () {
                    toastr.error('{!! session('flash_message_error') !!}', 'Danger');
                });
            </script>
        @endif

        @if(Session::has('flash_message_success'))
            <script>
                $(document).ready(function () {
                    toastr.success('{!! session('flash_message_success') !!}', 'Success');
                });
            </script>
        @endif
        
    </body>
</html>