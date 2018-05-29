<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="icon" href="#">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ set_page_tittle($title ?? '') }}</title>
        
        <!-- Bootstrap and Font-Awesome files in my computer -->
        {{--  <link href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">  --}}
        
        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional Bootstrap theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Stylesheet -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>

        @include('layouts/partials/_nav')

        @yield('content')
        
        @include('layouts/partials/_footer')

        @include('layouts/partials/_script')

        @include('flashy::message')

        @yield('scripts.footer')

    </body>

    
</html>
