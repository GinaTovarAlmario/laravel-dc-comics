<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield("additional-meta")
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page-title", "")</title>

    @yield("additional-cdn")
</head>
<body>
    {{--Includi Header--}}
    @include("partials.header")

    {{--Inserisci contenuti da chi estende--}}
    <main>
        @yield("main-content")
    </main>

    {{--Includi Footer--}}
    @include("partials.footer")

    @yield("additional-scripts")
    @vite("resources/js/app.js")
</body>
</html>
