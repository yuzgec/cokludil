<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
</head>

<body>

<a href="#" class="scrolltop-btn"><span><i class="flaticon-arrow"></i></span></a>

    @include('frontend.layout.header')


    @yield('content')


@include('frontend.layout.footer')
@include('frontend.layout.js')
@yield('customJS')




</body>
</html>
