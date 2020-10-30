<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Title --}}
        <title>@yield('title', 'Music Web')</title>
        {{-- Css common --}}
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        {{-- Style Libraries --}}
        @yield('style-libraries')
        {{-- Style Customize --}}
        @yield('style-customize')
    </head>
    <body>
        {{-- Header --}}
        @include('partial.header')
        {{-- End Header --}}

        {{-- Content --}}
        @yield('content')
        {{-- End Content --}}

        {{-- Footer --}}
        @include('partial.footer')
        {{-- End Footer --}}
        
        {{-- Script Js Common --}}
        <script src="{{ asset('js/font.js')}}"></script>
            <!-- Bootstrap Js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- Script Libraries --}}
        @yield('script-libraries')
        {{-- Script Customize --}}
        @yield('script-customize')
    </body>
</html>