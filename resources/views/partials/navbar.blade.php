<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <img src="storage/pages/logo.png">
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('Home')}}">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('doctors')}}">Doctors</a></li>
                        <li><a href="#">Hospitals</a></li>
                        <li><a href="#">Pharmacies</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/blog')}}">Blog</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{route('packages')}}">Packages</a></li>
                <li><a href="{{route('contact_us')}}">Contact us</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            <strong>{{ Auth::user()->name }} </strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            {{--<p class="text-center">--}}
                                                {{--<span class="glyphicon glyphicon-user icon-size"></span>--}}

                                            {{--</p>--}}
                                            <img src="{{asset(Auth::user()->avatar)}}" class="icon-size img-thumbnail" >
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="text-left"><strong>{{ Auth::user()->role->display_name}} </strong>
                                            </p>
                                            <p class="text-left small">{{ Auth::user()->email }} </p>
                                            <p class="text-left">
                                                <a href="{{route('user.show',['username'=>Auth::user()->username])}}" class="btn btn-primary btn-block btn-sm">Profile</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider navbar-login-session-bg"></li>
                            <li><a href="{{route('user.edit')}}">Account Settings <span
                                            class="glyphicon glyphicon-cog pull-right"></span></a></li>

                            <li class="divider"></li>
                            <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Sign Out <span
                                            class="glyphicon glyphicon-log-out pull-right"></span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>