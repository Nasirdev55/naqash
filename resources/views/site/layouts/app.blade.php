<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield("title")</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="i-shop" name="keywords">

    <!-- Favicon -->
    {{--<link href="{{asset("site/android-chrome-512x512.png")}}" rel="icon">--}}

    @include("site.layouts.css")
    @yield("style")

</head>

<body>
@include('site.layouts.header')

@yield('content')


{{--footer include--}}

@include('site.layouts.footer')

</body>
</html>
@include("site.layouts.js")
@yield("script")