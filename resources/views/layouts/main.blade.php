<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi sitio web</title>
    </head>
    <body>
        <p>
            @auth
            Hi ! {{ auth()->user()-> name }}
            <a href="{{ route('auth.logout') }}">Logout</a>
            @endauth
        </p>
        @yield('content')

    </body>
</html>
