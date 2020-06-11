<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset("css/app.css")}}">

        <!-- Required Core stylesheet -->
        <link rel="stylesheet" href="{{asset("node_modules/@glidejs/glide/dist/css/glide.core.min.css")}}">

        <!-- Optional Theme stylesheet -->
        <link rel="stylesheet" href="{{asset("node_modules/@glidejs/glide/dist/css/glide.theme.min.css")}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="bg-dark">

        @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
