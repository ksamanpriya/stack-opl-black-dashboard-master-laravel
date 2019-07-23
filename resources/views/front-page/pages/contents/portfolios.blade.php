<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 23/07/2019
 * Time: 2:26 PM
 */
?>
<section id="portfolios" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Works</h2>
            <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Portfolio Controller/Buttons -->
                <div class="controls text-center">
                    <a class="filter active btn btn-common btn-effect" data-filter="all">
                        All
                    </a>
                    <a class="filter btn btn-common btn-effect" data-filter=".design">
                        Design
                    </a>
                    <a class="filter btn btn-common btn-effect" data-filter=".development">
                        Development
                    </a>
                    <a class="filter btn btn-common btn-effect" data-filter=".print">
                        Print
                    </a>
                </div>
                <!-- Portfolio Controller/Buttons Ends-->
            </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
            <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="{{asset('front-page/img/portfolio/img-1.jpg')}}" alt="" />
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="{{asset('front-page/img/portfolio/img-1.jpg')}}"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#">Creative Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="{{asset('front-page/img/portfolio/img-2.jpg')}}" alt="" />
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="{{asset('front-page/img/portfolio/img-2.jpg')}}"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#">Retina Ready</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix development">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="{{asset('front-page/img/portfolio/img-3.jpg')}}" alt="" />
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="{{asset('front-page/img/portfolio/img-3.jpg')}}"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#">Responsive</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix development design">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="{{asset('front-page/img/portfolio/img-4.jpg')}}" alt="" />
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="{{asset('front-page/img/portfolio/img-4.jpg')}}"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#">Well Documented</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix development">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="{{asset('front-page/img/portfolio/img-5.jpg')}}" alt="" />
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="{{asset('front-page/img/portfolio/img-5.jpg')}}"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#">Customer Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
                <div class="portfolio-item">
                    <div class="shot-item">
                        <img src="{{asset('front-page/img/portfolio/img-6.jpg')}}" alt="" />
                        <div class="single-content">
                            <div class="fancy-table">
                                <div class="table-cell">
                                    <div class="zoom-icon">
                                        <a class="lightbox" href="{{asset('front-page/img/portfolio/img-6.jpg')}}"><i class="lni-eye item-icon"></i></a>
                                    </div>
                                    <a href="#">User Friendly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container Ends -->
</section>
