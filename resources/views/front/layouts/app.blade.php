<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>@yield('title')</title>
    <!-- CSS here -->
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
</head>

<body>

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> --}}

    

    <!-- header area start here -->
    @include('front.layouts.inc.header')
    <!-- header area end here -->

    @yield('content')


    <!-- Footer start -->
    @include('front.layouts.inc.footer')
    <!-- Footer end -->



    <!-- JS here -->
    <script src="{{ asset('frontend/js/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/materialize.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    

</body>
</html>