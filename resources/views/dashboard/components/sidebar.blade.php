<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 12/07/2019
 * Time: 11:47 PM
 */
?>
<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">

            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>

        <ul class="nav">
            <li class="{{$active=='dashboard'?'active':''}}">
                <a href="{{route('dashboard')}}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{$active=='icon'?'active':''}}">
                <a href="{{route('icon')}}">
                    <i class="tim-icons icon-atom"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="{{$active=='map'?'active':''}}">
                <a href="{{route('map')}}">
                    <i class="tim-icons icon-pin"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="{{$active=='notifications'?'active':''}}">
                <a href="{{route('notifications')}}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="{{$active=='profile'?'active':''}}">
                <a href="{{route('profile')}}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="{{$active=='table'?'active':''}}">
                <a href="{{route('table')}}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li class="{{$active=='typography'?'active':''}}">
                <a href="{{route('typography')}}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>Typography</p>
                </a>
            </li>
        </ul>
    </div>
</div>
