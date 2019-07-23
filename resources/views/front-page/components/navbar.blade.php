<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 23/07/2019
 * Time: 2:10 PM
 */
?>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
        @hasSection('slider')
            <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                    Home
                </a>
            </li>
        @endif
        @hasSection('feature')
            <li class="nav-item">
                <a class="nav-link" href="#feature">
                    Feature
                </a>
            </li>
        @endif
        @hasSection('services')
            <li class="nav-item">
                <a class="nav-link" href="#services">
                    Services
                </a>
            </li>
        @endif
        @hasSection('team')
            <li class="nav-item">
                <a class="nav-link" href="#team">
                    Team
                </a>
            </li>
        @endif
        @hasSection('pricing')
            <li class="nav-item">
                <a class="nav-link" href="#pricing">
                    Pricing
                </a>
            </li>
        @endif
        @hasSection('portfolios')
            <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                    Works
                </a>
            </li>
        @endif
        @hasSection('testimonial')
            <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                    Testimonial
                </a>
            </li>
        @endif
        @hasSection('blog')
            <li class="nav-item">
                <a class="nav-link" href="#blog">
                    Blog
                </a>
            </li>
        @endif
        @hasSection('contact')
            <li class="nav-item">
                <a class="nav-link" href="#contact">
                    Contact
                </a>
            </li>
        @endif
        @hasSection('content')
            <li class="nav-item">
                <a class="nav-link {{ request()->route()->named('post*') ? 'active' : '' }}" href="{{route('post')}}">
                    Single Blog
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link {{ request()->route()->named('dashboard*') ? 'active' : '' }}" href="{{route('dashboard')}}">
                Dashboard
            </a>
        </li>
    </ul>
</div>
