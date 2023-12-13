<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2023</p>
        </footer>
    </body>
</html>
