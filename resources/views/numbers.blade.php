<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Numbers</title>

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

                    {{-- @php

                        $array = ['1' => '일', '2' => '이', '3' => '삼', '4' => '사', '5' => '오'];

                        // $random = Arr::random($array);
                        // print($random);

                        shuffle($array);
                        echo $array[0];

                    @endphp --}}

                    

                    {{-- <a id="myButton" href="#">
                        click here to get random stuff
                    </a> --}}
                    <button type="button" id="myButton" class="btn btn-light">Random number</button>
                        
                    <div id="myRandomDiv">
                    </div>

                    <br>
                    <button type="button" class="btn btn-light" onClick="window.location.reload();">Refresh Page</button>

                </div>

            </div>

        </div>

        {{-- Bootstrap --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        {{-- /Bootstrap --}}
 
        {{-- Custom --}}
        <script src="{{ asset('js/custom.js') }}" defer></script>     



    </body>
</html>
