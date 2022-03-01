<!DOCTYPE html>
<html lang="en">
@yield('admin.css')

<body>
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

{{--        <!-- Logo -->--}}
        <div class="header-left">

            <a href="{{ route('home') }}" class="logo">     {{ \Illuminate\Support\Facades\Auth::user()->name}}

{{--                <img src="{{ asset('pages/img/enver.png') }}" width="40" height="40" alt="">--}}
            </a>
        </div>
        <!-- /Logo -->

        <a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
        </a>


        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

        <!-- Header Menu -->
        <ul class="nav user-menu">

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="{{ asset('pages/img/enver.png') }}" alt="">
							<span class="status online"></span></span>
                    <span>{{ \Illuminate\Support\Facades\Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu">
{{--                    <a class="dropdown-item" href="profile.html">My Profile</a>--}}
{{--                    <a class="dropdown-item" href="settings.html">Settings</a>--}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>

                </div>
            </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
{{--                <a class="dropdown-item" href="profile.html">My Profile</a>--}}
{{--                <a class="dropdown-item" href="settings.html">Settings</a>--}}
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>

                    <li >
                        <a href="{{ route('home') }}"><i class="la la-comment"></i> <span> Comments</span></a>

                    </li>

                    <li >
                        <a href="{{ route('users.index') }}"><i class="la la-users"></i> <span> Users</span></a>

                    </li>

                    <li >
                        <a href="{{ route('abouts.index') }}"><i class="la la-file-text"></i> <span> About Us</span></a>

                    </li>
                    <li >
                        <a href="{{ route('services.index') }}"><i class="la la-server"></i> <span> Services</span></a>

                    </li>
                    <li >
                        <a href="{{ route('projects.index') }}"><i class="la la-project-diagram"></i> <span> Projects</span></a>

                    </li>
                    <li >
                        <a href="{{ route('skills.index') }}"><i class="la la-folder-plus"></i> <span> Skills</span></a>

                    </li>
                    <li >
                        <a href="{{ route('blogs.index') }}"><i class="la la-blog"></i> <span> Blogs</span></a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
@yield('admin.body')
<!-- /Page Wrapper -->

</div>
@yield('admin.js')
</body>
</html>
