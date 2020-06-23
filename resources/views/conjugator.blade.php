<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Conjugator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- Custom --}}
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        

        <!-- Scripts -->
        {{-- Verbix API --}}
        <script src="https://verbix-api.nyc3.cdn.digitaloceanspaces.com/conjugator/v2.0.0.js"></script>
        {{-- Custom --}}
        <script src="{{ asset('js/custom.js') }}" defer></script>

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

            <div class="content container">
                <div class="title m-b-md">
                    Conjugator 
                </div>

                {{-- <input type="text" class="form-control form-control-lg" name="search" placeholder="Search for a verb" autofocus> --}}

                <div data-verbix-conjugate-language='kor' data-verbix-conjugate-key='8f4b5b9b-ad4f-11ea-8527-e237142b3bef' class="input-group mb-3">
                    <input id="verb" type="text" class="form-control form-control-lg" placeholder="Enter a verb in Korean" aria-label="Enter a verb in Korean" required autofocus>
                    <div class="input-group-append">
                        <button id="verb_search" class="btn btn-outline-secondary" type="button" value="Go" onclick="showConjugationResults();verbix.conjugate(document.getElementById('verb').value);">Search</button>
                    </div>
                    {{-- <input type="button" value="Go" onclick="verbix.conjugate(document.getElementById('verb').value);">  --}}
                </div>

{{--                 <div data-verbix-conjugate-tense='0'></div>
                <div data-verbix-conjugate-tense='1'></div>
                <div data-verbix-conjugate-tense='2'></div> --}}


                <div class="card-group conjugation-results" id="conjugation-results">
                  <div class="card">
                    {{-- <div class="card-header">Past</div> --}}
                    <div class="card-body">
                      <h5 class="card-title">Past</h5>
                      <p class="card-text" data-verbix-conjugate-tense='1'></p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Present</h5>
                      <p class="card-text" data-verbix-conjugate-tense='0'></p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Future</h5>
                      <p class="card-text" data-verbix-conjugate-tense='2'></p>
                    </div>
                  </div>
                </div>





            </div>
        </div>


    {{-- Bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- /Bootstrap --}}

        
    </body>
</html>
