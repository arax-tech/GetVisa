<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        @if (!empty(auth::user()->image))
            <img src="{{ asset('backend/admin/profile/'.auth::user()->image) }}" class="avatar-sm rounded-circle mr-2">
        @else
            <img src="{{ asset('images/placeholder.jpg') }}" class="avatar-sm rounded-circle mr-2">
        @endif

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">{{ auth::user()->name }}</h6>
            <span class="pro-user-desc text-success">Online</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="{{ url('admin/profile') }}" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>Profile</span>
                </a>

                <a href="{{ url('admin/password') }}" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                    <span>Password</span>
                </a>

              
                <div class="dropdown-divider"></div>

                <a href="{{ url('admin/logout') }}" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Apps</li>

                <li>
                    <a href="{{ url('admin/dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/user') }}">
                        <i data-feather="users"></i>
                        <span> Users </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/category') }}">
                        <i data-feather="list"></i>
                        <span> Categories </span>
                    </a>
                </li>

            {{--     <li>
                    <a href="{{ url('admin/destination') }}">
                        <i data-feather="framer"></i>
                        <span> Destination </span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{ url('admin/package') }}">
                        <i data-feather="gift"></i>
                        <span> Package </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/service') }}">
                        <i data-feather="git-branch"></i>
                        <span> Service </span>
                    </a>
                </li>


                <li>
                    <a href="{{ url('admin/visa-requirment') }}">
                        <i data-feather="flag"></i>
                        <span> Visa Requirments </span>
                    </a>
                </li>


                <li>
                    <a href="{{ url('admin/application') }}">
                        <i data-feather="activity"></i>
                        <span> Application </span>
                    </a>
                </li>


               
                <li>
                    <a href="{{ url('admin/password') }}">
                        <i data-feather="lock"></i>
                        <span> Password </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/profile') }}">
                        <i data-feather="user-plus"></i>
                        <span> Profile </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>