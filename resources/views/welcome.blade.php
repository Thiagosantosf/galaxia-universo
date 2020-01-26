<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CCM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('http://getwallpapers.com/wallpaper/full/b/f/9/16392.jpg');
                background-size: cover;
                background-repeat : no-repeat
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
                color:white
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                vertical-align : top;
                color : white

               
            }
            
        </style>
    </head>
    
    <body>
    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Acessar</a>

                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Centro de Cosmologia Mundial
                </div>
                <h1>O centro de cosmologia mundial possui um sistema de banco de dados que é capaz de cadastrar, listar e modificar novos planetas e sistemas interplanetários descobertos pela comunidade mundial </h1>
                
            </div>
        </div>
        <div style="position: relative">    
    <div style="position: absolute; color: white;">
    Desenvolvido por Thiago França e João Fidelis.
    </div>
        </div>
    </body>
</html>
