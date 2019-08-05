<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 13/07/2019
 * Time: 12:59 AM
 */
?>

@extends('dashboard.layouts.main')
@section('title','Typography')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-5">
                    <h5 class="card-category">Black Table Heading</h5>
                    <h3 class="card-title">Created using Poppins Font Family</h3>
                </div>
                <div class="card-body">
                    <div class="typography-line">
                        <h1>
                            <span>Header 1</span>The Life of Black Dashboard </h1>
                    </div>
                    <div class="typography-line">
                        <h2>
                            <span>Header 2</span>The Life of Black Dashboard </h2>
                    </div>
                    <div class="typography-line">
                        <h3>
                            <span>Header 3</span>The Life of Black Dashboard </h3>
                    </div>
                    <div class="typography-line">
                        <h4>
                            <span>Header 4</span>The Life of Black Dashboard </h4>
                    </div>
                    <div class="typography-line">
                        <h5>
                            <span>Header 5</span>The Life of Black Dashboard </h5>
                    </div>
                    <div class="typography-line">
                        <h6>
                            <span>Header 6</span>The Life of Black Dashboard </h6>
                    </div>
                    <div class="typography-line">
                        <p>
                            <span>Paragraph</span>
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Quote</span>
                        <blockquote>
                            <p class="blockquote blockquote-primary">
                                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                <br>
                                <br>
                                <small>
                                    - Noaa
                                </small>
                            </p>
                        </blockquote>
                    </div>
                    <div class="typography-line">
                        <span>Muted Text</span>
                        <p class="text-muted">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Primary Text</span>
                        <p class="text-primary">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                    </div>
                    <div class="typography-line">
                        <span>Info Text</span>
                        <p class="text-info">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typography-line">
                        <span>Success Text</span>
                        <p class="text-success">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typography-line">
                        <span>Warning Text</span>
                        <p class="text-warning">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Danger Text</span>
                        <p class="text-danger">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typography-line">
                        <h2>
                            <span>Small Tag</span>
                            Header with small subtitle
                            <br>
                            <small>Use "small" tag for the headers</small>
                        </h2>
                    </div>
                    <div class="typography-line">
                        <span>Lists</span>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Unordered List</h5>
                                <ul>
                                    <li>List Item</li>
                                    <li>List Item</li>
                                    <li class="list-unstyled">
                                        <ul>
                                            <li>List Item</li>
                                            <li>List Item</li>
                                            <li>List Item</li>
                                        </ul>
                                    </li>
                                    <li>List Item</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>Ordered List</h5>
                                <ol>
                                    <li>List Item</li>
                                    <li>List Item</li>
                                    <li>List item</li>
                                    <li>List Item</li>
                                </ol>
                            </div>
                            <div class="col-md-3">
                                <h5>Unstyled List</h5>
                                <ul class="list-unstyled">
                                    <li>List Item</li>
                                    <li>List Item</li>
                                    <li>List item</li>
                                    <li>List Item</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5>Inline List</h5>
                                <ul class="list-inline">
                                    <li class="list-inline-item">List1</li>
                                    <li class="list-inline-item">List2</li>
                                    <li class="list-inline-item">List3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="typography-line">
                        <span>Code</span>
                        <p>This is
                            <code>.css-class-as-code</code>, an example of an inline code element. Wrap inline code within a
                            <code> &lt;code&gt;...&lt;/code&gt;</code>tag.
                        </p>
                        <pre>1. #This is an example of preformatted text.<br/>2. #Here is another line of code</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js-script')
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>

@endpush

