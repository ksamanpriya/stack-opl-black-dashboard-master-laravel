<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 12/07/2019
 * Time: 10:33 AM
 */
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dash-board/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('dash-board/img/favicon.png')}}">
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    @yield('css',view('dashboard.components.css'))
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('dash-board/demo/demo.css')}}" rel="stylesheet" />
</head>
<body class="">
<div class="wrapper">
    @yield('sidebar',view('dashboard.components.sidebar'))
    <div class="main-panel">
        <!-- Navbar -->
    @yield('navbar',view('dashboard.components.navbar'))

        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>
        @yield('footer',view('dashboard.components.footer'))
    </div>
</div>
@yield('settings',view('dashboard.components.settings'))
@yield('js',view('dashboard.components.js'))

</body>
</html>
