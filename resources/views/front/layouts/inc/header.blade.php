<style type="text/css">
    .active1{background: linear-gradient(to bottom,#f4364f,#dc2039) !important; color: #fff !important; border-bottom: 2px solid #e23464 !important;box-shadow: 0 3px 3px 0 rgb(0 0 0 / 14%), 0 1px 7px 0 rgb(0 0 0 / 12%) !important; padding:20px !important;}
</style>
<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="{{ url('home') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="" />

                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        
                        <h4>Menu</h4>
                        <ul>
                            <li><a class="{{ (strpos(url()->full() , 'home')) ? 'active1' : ''  }}" href="{{ url('home') }}">Home</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'about')) ? 'active1' : ''  }}" href="{{ url('about') }}">About</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'service')) ? 'active1' : ''  }}" href="{{ url('service') }}">Service</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'packages')) ? 'active1' : ''  }}" href="{{ url('packages') }}">Packages</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'visa')) ? 'active1' : ''  }}" href="{{ url('visa') }}">Visa</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'contact')) ? 'active1' : ''  }}" href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#"><span>Opening Time :</span> Mon - Fri : 09 AM - 05 PM</a>
                            </li>
                            <li><a href="#">Phone: +1 980 589 360  / +2 980 589 360</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>

                            <li>
                                @guest
                                <a href="{{ url('login') }}">Login</a>
                                @else
                                <a href="{{ url(strtolower(auth()->user()->role).'/dashboard') }}">Dashbaord</a>
                                @endguest
                            </li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="{{ url('home') }}">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>                          
                            <li><a class="{{ (strpos(url()->full() , 'home')) ? 'active1' : ''  }}" href="{{ url('home') }}">Home</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'about')) ? 'active1' : ''  }}" href="{{ url('about') }}">About</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'service')) ? 'active1' : ''  }}" href="{{ url('service') }}">Service</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'packages')) ? 'active1' : ''  }}" href="{{ url('packages') }}">Packages</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'visa')) ? 'active1' : ''  }}" href="{{ url('visa') }}">Visa</a></li>
                            <li><a class="{{ (strpos(url()->full() , 'contact')) ? 'active1' : ''  }}" href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->