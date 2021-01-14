<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome {{$name}}!</title>
    </head>
    <body class="antialiased">
    <h1>Username: {{$name}} {{$surname}} </h1>
    </body>
</html>
