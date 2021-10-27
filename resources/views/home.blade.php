<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                <h1>{{ $nome . ' ' . $cognome }}</h1>
                <h2>{{ 'Classe:' . ' ' . $classe }}</h2>
            </div>

            <div class="links">
                <a href="/">Home</a>
                <a href="/about">About Me</a>
                <a href="/contacts">Contats</a>
            </div>
        </div>
    </body>
</html>
