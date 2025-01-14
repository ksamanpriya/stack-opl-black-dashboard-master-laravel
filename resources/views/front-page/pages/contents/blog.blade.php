<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 23/07/2019
 * Time: 2:27 PM
 */
?>
<section id="blog" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
            <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="blog-item-img">
                        <a href="{{route('post')}}">
                            <img src="{{asset('front-page/img/blog/img1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="{{route('post')}}">Suspendisse dictum non velit</a>
                        </h3>
                        <p>
                            Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas.
                        </p>
                        <a href="{{route('post')}}" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item-img">
                        <a href="{{route('post')}}">
                            <img src="{{asset('front-page/img/blog/img2.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="{{route('post')}}">Remarkably Did Increasing</a>
                        </h3>
                        <p>
                            Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas.
                        </p>
                        <a href="{{route('post')}}" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
                    <div class="blog-item-img">
                        <a href="{{route('post')}}">
                            <img src="{{asset('front-page/img/blog/img3.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="{{route('post')}}">Changing the topic scope</a>
                        </h3>
                        <p>
                            Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas.
                        </p>
                        <a href="{{route('post')}}" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
        </div>
    </div>
</section>
