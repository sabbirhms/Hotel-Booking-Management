<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Hotel Management System')</title>
<link rel="stylesheet" href="{{asset('assets/fronted/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fronted/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('assets/fronted/css/lightbox.min.css')}}">
  <script rel="stylesheet" href="{{asset('assets/fronted/js/lightbox-plus-jquery.min.js')}}"> </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

   <div class="navbar">

        <ul id="color">
        
        <li id="Home"><a href="/" >Home</a></li>
        <li id="Rooms"><a href="{{route('rooms')}}">Rooms</a></li>
        <li id="Gallery"><a href="{{route('gallery')}}">Gallery</a></li>
        <li id="Contact"><a href="{{route('contact')}}">Contact</a></li>
        @guest
                            <li id="Login">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li id="Register">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a id="Account" href="{{route('home')}}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    My Account
                                </a>
                                <li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                          
                        @endguest
        
        </ul>
        
        
        </div>

@yield('content')

@yield('custom_js')
<script src="{{asset('assets/fronted/js/bootstrap.min.js')}}"></script>
</body>
</html>