<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.cs')}}s">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          {{--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <table class="table">
                    <tr>
                        <td>  <div class="logo_area mb-3">
                                <img src="img/logo.jpg" alt="mopol">
                            </div>
            </td>
            <td>
                    <div class="logo_area mb-3">
                            <img src="img/mapollogo.png" alt="mopol">
                        </div>

            </td>
                    </tr>
                </table>


               <div class="login_button">

                   @if (Route::has('login'))
                       @auth
                      <a href="{{route('home')}}" class="btn btn-md btn-success">
                            Go to dashboard
                      </a>
                       @else
                       <a href="{{ route('login')}}" class="btn btn-primary btn-block btn-lg">Login</a>
                       @endauth
                   @endif


               </div>
            </div>
        </div>
    </body>
</html>
