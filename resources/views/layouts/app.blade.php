<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'IT-Genious') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css" rel="stylesheet">
        <!-- Gretong CSS -->

                <link type="text/css" href="{{ asset('gretong') }}/css/style.css" rel="stylesheet">
                <link type="text/css" href="{{ asset('css') }}/style.css" rel="stylesheet">

        <link type="text/css" href="{{ asset('gretong') }}/css/etalage.css" rel="stylesheet">
        <link type="text/css" href="{{ asset('gretong') }}/css/megamenu.css" rel="stylesheet">

    </head>
    <body class="{{ $class ?? '' }}">
        @auth
        @if (Auth::user()->privilege == 0){        
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('Client.sidebar')
        }
        @elseif(Auth::user()->privilege == 1){
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('Admin.sidebar')
        }
        @endif
        @endauth
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
        @endguest

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
        <!-- Gretong JS -->
        <script src="{{ asset('gretong') }}/js/megamenu.js"></script>
        <script src="{{ asset('gretong') }}/js/menu_jquery.js"></script>
        <script src="{{ asset('gretong') }}/js/simpleChart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    </body>
</html>