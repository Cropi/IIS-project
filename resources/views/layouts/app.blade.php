<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="layout-pf layout-pf-fixed">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>

    <!--<link href="/css/app.css" rel="stylesheet" type="text/css">-->
    <link href="/css/patternfly.min.css" rel="stylesheet" type="text/css">
    <link href="/css/patternfly-additions.min.css" rel="stylesheet" type="text/css">
    <!--<link href="/css/so2platform/styles.css" rel="stylesheet" type="text/css">-->
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <!-- Filtering -->
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>

    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-pf-vertical">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a href="/" class="navbar-brand">
                <img class="navbar-brand-icon" src="/img/logo-alt.svg" alt=""/>
                <img class="navbar-brand-name" src="/img/brand-alt.svg" alt="PatternFly Enterprise Application" />
            </a> -->
        </div>
        <nav class="collapse navbar-collapse">

            <!-- Magic -->
            {{--<ul class="nav navbar-nav">
                <li>
                    <a href="#" target="_blank" class="nav-item-iconic nav-item-iconic-new-window"><span title="Launch" class="fa fa-external-link"></span></a>
                </li>
            </ul>--}}

            <!-- Left side of navbar -->
            <ul class="nav navbar-nav navbar-left navbar-iconic">
                <li>
                    <a href="#">
                        {{ config('app.name', 'Veterinary IS') }}
                    </a>
                </li>
            </ul>

            <!-- Right side of navbar -->
            <ul class="nav navbar-nav navbar-right navbar-iconic">

                <!-- <li class="dropdown">
                    <a class="dropdown-toggle nav-item-iconic" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span title="Notifications" class="fa pficon-flag"></span>
                        <span class="badge">2</span>
                    </a>
                    <div class="dropdown-menu infotip bottom-right">
                        <div class="arrow"></div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="i pficon pficon-info"></span> Modified Datasources ExampleDS
                            </li>
                            <li class="list-group-item">
                                <span class="i pficon pficon-info"></span> Error: System Failure
                            </li>
                        </ul>
                        <div class="footer">
                            <a>Clear Messages</a>
                        </div>
                    </div>
                </li> -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span title="Help" class="fa pficon-help"></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </li> -->

                <!-- User informations/Logged in -->
                <li class="dropdown">
                    <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span title="Username" class="fa pficon-user"></span>
                        <span class="dropdown-title">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{route('sidebar.users.settings')}}">Settings</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>
    </nav> <!--/.navbar-->

    <!-- Side navbar -->
    <div class="nav-pf-vertical nav-pf-vertical-with-sub-menus">

        <ul class="list-group">
            <li class="list-group-item {{ Request::is('home') ? 'active' : '' }}">
                <a href="{{URL::to('home')}}">
                    <span class="fa pficon-home" data-toggle="tooltip" title="Dashboard"></span>
                    <span class="list-group-item-value">Home</span>
                </a>
            </li>
            <li class="list-group-item {{ Request::is('users') ? 'active' : '' }} secondary-nav-item-pf" data-target="#ipsum-secondary">
                <a href="{{ route('users') }}">
                    <span class="fa pficon-user" data-toggle="tooltip" title="Users"></span>
                    <span class="list-group-item-value">Users</span>
                </a>

                <div id="-secondary" class="nav-pf-secondary-nav">
                    <div class="nav-item-pf-header">
                        <a  class="secondary-collapse-toggle-pf" data-toggle="collapse-secondary-nav"></a>
                        <span>Users</span>
                    </div>
                <ul class="list-group">
                    <li class="list-group-item active " data-target="#ipsum-intellegam-tertiary">
                        <a href="{{route('register')}}"><span class="list-group-item-value">Create new user</span></a>
                    </li>
                </ul>
                </div>
            </li>


            <li class="list-group-item {{ Request::is('owners') ? 'active' : '' }} secondary-nav-item-pf" data-target="#owners-secondary">
                <a href="{{route('owners')}}">
                    <span class="fa pficon-users" data-toggle="tooltip" title="Owners"></span>
                    <span class="list-group-item-value">Owners</span>
                </a>

                <div class="nav-pf-secondary-nav">
                    <div class="nav-item-pf-header">
                        <a  class="secondary-collapse-toggle-pf" data-toggle="collapse-secondary-nav"></a>
                        <span>Owners</span>
                    </div>
                <ul class="list-group">
                    <li class="list-group-item active " data-target="#aipsum-intellegam-tertiarya">
                        <a href="{{route('owners.create')}}"><span class="list-group-item-value">Create new owner</span></a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="list-group-item">
                <a>
                    <span class="fa fa-plus-square" data-toggle="tooltip" title="Lorem"></span>
                    <span class="list-group-item-value">Medicines</span>
                </a>
            </li>
            <li class="list-group-item">
                <a>
                    <span class="fa fa-paw" data-toggle="tooltip" title="Adipscing"></span>
                    <span class="list-group-item-value">Animals</span>
                </a>
            </li>
            <li class="list-group-item">
                <a>
                    <span class="fa fa-medkit" data-toggle="tooltip" title="Lorem"></span>
                    <span class="list-group-item-value">Treatment</span>
                </a>
            </li>
        </ul>
     </div> <!-- left side navbar -->

    <!-- Content -->
    <div class="container-fluid container-cards-pf container-pf-nav-pf-vertical" id="app">
        <div class="row row-cards-pf">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script>
        window.Laravel = {
            'csrfToken' : '{{csrf_token()}}'
        };
    </script>
    <!--<script src="/js/manifest.js"></script>-->
    <!--<script src="/js/vendor.js"></script>-->
    <!--<script src="/js/app.js"></script>-->
    <script src="/js/patternfly.js"></script>
    <script>
        var app = new Vue({
            el: '#app'
        });
    </script>
    <script>
        $(document).ready(function() {
            $().setupVerticalNavigation(true);
        });
    </script>
    @yield('scripts')
    @show
</body>
</html>
