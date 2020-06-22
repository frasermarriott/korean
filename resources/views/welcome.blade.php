<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Korean Tools</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- Custom --}}
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="top-left links">
                <a href="{{ url('/') }}">Home</a>
            </div>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">My Dashboard</a>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    한국어
                </div>

                <div class="links">
                    <a href="{{ url('conjugator') }}">Conjugator</a>
                    <a href="{{ url('numbers') }}">Numbers</a>
                    <a href="{{ url('vocabulary') }}">Vocabulary</a>
                    <a href="{{ url('listening') }}">Listening</a>
                    <a href="{{ url('wordoftheday') }}">Word of the day</a>
                </div>
            </div>
        </div>
    </body>
</html>
