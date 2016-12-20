<!DOCTYPE html> 
<html>
    <head>
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>{{ $pagetitle }}</h1>
        @yield('content')
    </body>
</html>
