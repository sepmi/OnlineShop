


    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title ?? 'OnlineShop'}} - mysite</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    {{$css ?? ''}}
</head>
<body>
<div class="container-fluid">
    <x-layouts.header></x-layouts.header>
    <div class="content mt-5">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

