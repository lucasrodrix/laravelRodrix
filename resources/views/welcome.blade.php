<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Rodrix</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body>
        <h1>Bem-vindo ao Laravel 11</h1>
        <a href="{{ route('courses.index')}}"><button>Listar</button></a><br><br>
        <!-- <p>Data Atual:{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s')}}</p> -->
    </body>
</html>
