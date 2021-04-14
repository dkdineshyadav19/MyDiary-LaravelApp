<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .login{
            background:#4cc9f0;
            width:7vw;
            text-align:center;
        }
        .register{
            border-left:2px solid white;
            background:#4895ef;
            width:10vw;
            text-align:center;
         
        }
        .hov{
            color:black;
        }
        .hov:hover{
            color:blue;
        }
        .martop{
            margin-top:-3px;
        }
       
        @media screen  and (max-width:770px){
                .login{
                    margin:0px 10px 10px 0px;
                    width:12vw;
                }
                .register{
            width:17vw;
           
         
        }
            }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm  text-light">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                <div><img src="/images/diary.png" style="height:20px;margin-top:3px;" class="pr-3"></div>
                <div class="pl-3" style="border-left:2px solid  red; color:#0073fa;">MY-Diary</div>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                                    <a class="nav-link hov text-light" href="{{ url('/') }}"><h6><b>Home</b></h6></a>
                                </li>
                    <li class="nav-item">
                                    <a class="nav-link hov text-light" href="{{ url('/public') }}"><h6><b>Public Diary</b></h6></a>
                                </li>
                    <li class="nav-item">
                                    <a class="nav-link hov text-light" href="{{ url('/private') }}"><h6><b>Private Diary</b></h6></a>
                                </li>
                    <li class="nav-item">
                                    <a class="nav-link hov text-light" href="{{ url('/contact') }}"><h6><b>Contact</b></h6></a>
                                </li>
                   
                        <!-- Authentication Links -->
        
                    
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link login text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link register text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle martop text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <b>{{ Auth::user()->name }}</b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-danger" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
