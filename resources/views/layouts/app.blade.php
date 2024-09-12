<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Training and Placement Cell') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav style="background-color: #ffffff; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);">
            <div style="max-width: 1280px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 1rem;">
                <a style="font-size: 1.25rem; color: #000000; text-decoration: none;" href="{{ url('/') }}">
                    {{ config('app.name', 'Training and Placement Cell') }}
                </a>
                <button style="background: none; border: none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="display: inline-block; width: 1.5em; height: 1.5em; vertical-align: middle; content: ''; background: no-repeat center center; background-size: 100% 100%;"></span>
                </button>

                <div style="display: flex; flex-grow: 1; justify-content: flex-end;" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul style="list-style: none; padding-left: 0; margin-bottom: 0; display: flex; flex-grow: 1;">
                        <!-- Add left side navbar items here if needed -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul style="list-style: none; padding-left: 0; margin-bottom: 0; display: flex; align-items: center;">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li style="margin-left: 0.5rem;">
                                    <a style="color: #000000; text-decoration: none;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li style="margin-left: 0.5rem;">
                                    <a style="color: #000000; text-decoration: none;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li style="margin-left: 0.5rem; position: relative;">
                                <a id="navbarDropdown" style="color: #000000; text-decoration: none;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div style="position: absolute; top: 100%; right: 0; background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 0.25rem; z-index: 1000;" aria-labelledby="navbarDropdown">
                                    <a style="display: block; padding: 0.25rem 1.5rem; clear: both; color: #000000; text-align: inherit; white-space: nowrap; background-color: transparent; border: 0;" class="dropdown-item" href="{{ route('logout') }}"
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

        <main style="padding-top: 1rem;">
            @yield('content')
        </main>
    </div>
</body>
</html>
