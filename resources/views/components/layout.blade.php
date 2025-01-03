    @props(['title'])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$title}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
@include('layouts.header')
<div class="flex items-center justify-between">
    {{$slot}}
</div>
@include('layouts.footer')
</body>
</html>

