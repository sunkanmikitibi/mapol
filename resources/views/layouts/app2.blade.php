<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

   @include('partials._styles')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <style>
        .logo {
            width: 50px;
            height: 50px;
            display: block;
        }

        td, th{
            font-size: 11px;
        }

        @media print{
                      .donot{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">
                                    <i class="fa fa-cogs"></i> Dashboard <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                              @can('admin', auth()->user())
                              <a class="nav-link" href="{{ route('officers.index') }}">
                                <i class="fa fa-users"></i>
                                Officers</a>
                              @elsecan('superadmin', auth()->user())
                              <a class="nav-link" href="{{ route('officers.index') }}">
                                    <i class="fa fa-users"></i> Officers</a>
                              @endcan

                          </li>
                          <li class="nav-item">
                              @can('superadmin', auth()->user())
                              <a class="nav-link" href="{{ route('mopol.index') }}">
                                    <i class="fa fa-list"></i>
                                    Armoury Records</a>
                              @elsecan('user', auth()->user())
                              <a class="nav-link" href="{{ route('mopol.index') }}">   <i class="fa fa-list"></i> Armoury Records</a>
                              @endcan

                          </li>
                          <li class="nav-item"><a href="{{ route('support-tickets.index')}}" class="nav-link"> <i class="fa fa-question-circle"></i> Support</a></li>

                          @can('admin', auth()->user())
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index')}}">   <i class="fa fa-users"></i> Users</a>
                              </li>
                          @elsecan('superadmin', auth()->user())
                          <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index')}}">   <i class="fa fa-users"></i> Users</a>
                              </li>
                          @endcan

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

    @include('partials._scripts')
</body>
</html>
