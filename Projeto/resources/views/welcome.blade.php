<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>aespa</title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="antialiased">
    <img class="logo-img" src="{{ 'img/aespa_logo.png' }}" alt="logo">
        <div class="cadastro">
            @if (Route::has('login'))
                <div class="cadastro">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="cadastro">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="cadastro">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="cadastro">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </body>
</html>
