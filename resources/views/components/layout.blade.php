<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link ref="stylesheet" href="{{ asset('css/app.css') }}">

        <title>{{ $title }} - Controle de Séries</title>
    </head>

    <body>
        <h1>{{ $title }}</h1>

        {{ $slot }}
    </body>
</html>
