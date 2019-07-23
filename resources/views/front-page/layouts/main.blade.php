<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 12/07/2019
 * Time: 10:34 AM
 */
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    @yield('css',view('front-page.components.css'))

</head>
<body>

<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a href="{{route('welcome')}}" class="navbar-brand"><img src="{{asset('front-page/img/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            @yield('navbar',view('front-page.components.navbar'))
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
        <div class="container">
            @yield('slider')
        </div>
    </div>
    <!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->
@yield('content')
<!-- Feature Section Start -->

@yield('feature')
<!-- Feature Section End -->

<!-- Services Section Start -->
@yield('service')
<!-- Services Section End -->

<!-- Start Video promo Section -->
@yield('video')
<!-- End Video Promo Section -->

<!-- Team Section Start -->
@yield('team')

<!-- Team Section End -->

<!-- Counter Section Start -->
@yield('counter')

<!-- Counter Section End -->

<!-- Pricing section Start -->
@yield('pricing')

<!-- Pricing Table Section End -->
@yield('skills')


<!-- Portfolio Section -->
@yield('portfolios')

<!-- Portfolio Section Ends -->

<!-- Testimonial Section Start -->
@yield('testimonial')

<!-- Testimonial Section End -->

<!-- Blog Section -->
@yield('blog')

<!-- blog Section End -->

<!-- Clients Section Start -->
@yield('clients')

<!-- Clients Section End -->

<!-- Contact Section Start -->
@yield('contact')

<!-- Contact Section End -->

<!-- Copyright Section Start -->
@yield('footer',view('front-page.components.footer'))

<!-- Copyright Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@yield('js',view('front-page.components.js'))
</body>
</html>

