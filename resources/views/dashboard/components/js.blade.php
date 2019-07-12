<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 12/07/2019
 * Time: 7:25 PM
 */
?>
<!--   Core JS Files   -->
<script src="{{asset('dash-board/js/core/jquery.min.js')}}"></script>
<script src="{{asset('dash-board/js/core/popper.min.js')}}"></script>
<script src="{{asset('dash-board/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('dash-board/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('dash-board/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('dash-board/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('dash-board/js/black-dashboard.min.js?v=1.0.0')}}"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('dash-board/demo/demo.js')}}"></script>
@yield('script')
