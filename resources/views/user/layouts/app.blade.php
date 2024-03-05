<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugins -->
        <link href="{{ asset('backend/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('backend/libs/smartwizard/smart_wizard.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('backend/libs/smartwizard/smart_wizard_theme_arrows.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('backend/libs/smartwizard/smart_wizard_theme_circles.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('backend/libs/smartwizard/smart_wizard_theme_dots.min.css') }}" type="text/css" />

        <link rel="stylesheet" href="{{ asset('backend/libs/select2/select2.min.css') }}" type="text/css" />


        <!-- Plugins css -->
        <link href="{{ asset('backend/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 


        <link href="{{ asset('backend/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />


        


        @yield('css')
    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('user.layouts.inc.navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('user.layouts.inc.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- content -->
                @yield('content')
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                {{ date('Y') }} &copy; Developed  <i class='uil uil-heart text-danger font-size-12'></i> by <a href="https://www.fiverr.com/arham_khan_web" target="_blank">Arham Khan</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

        <!-- optional plugins -->
        <script src="{{ asset('backend/libs/moment/moment.min.js') }}"></script>
        <script src="{{ asset('backend/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/libs/flatpickr/flatpickr.min.js') }}"></script>

        <!-- page js -->
        <script src="{{ asset('backend/js/pages/dashboard.init.js') }}"></script>

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



        <!-- datatable js -->
        <script src="{{ asset('backend/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/responsive.bootstrap4.min.js') }}"></script>


        <script src="{{ asset('backend/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('backend/libs/datatables/dataTables.select.min.js') }}"></script>

        <script src="{{ asset('backend/js/pages/datatables.init.js') }}"></script>


        <script src="{{ asset('backend/libs/smartwizard/jquery.smartWizard.min.js') }}"></script>

        

        <script src="{{ asset('backend/js/pages/form-wizard.init.js') }}"></script>


        <!-- Plugins Js -->
        <script src="{{ asset('backend/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('backend/libs/select2/select2.min.js') }}"></script>
        <script src="{{ asset('backend/libs/multiselect/jquery.multi-select.js') }}"></script>
        <script src="{{ asset('backend/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('backend/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        
        <!-- Init js-->
        <script src="{{ asset('backend/js/pages/form-advanced.init.js') }}"></script>

        @yield('js')

        

    </body>
</html>