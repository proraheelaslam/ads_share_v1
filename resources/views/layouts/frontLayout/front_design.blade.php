<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
  <!--Core CSS -->
  <link href="{{asset('bs3/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Scripts -->
 
</head>
<body>
<section id="container">

<!--header start-->
@include('layouts.frontLayout.front_header')
<!--header end-->


<!--left sidebar start-->
@include('layouts.frontLayout.front_leftsidebar')
<!--left sidebar end-->

<!--main content start-->
<section id="main-content">
<section class="wrapper">
@yield('content')
</section>
</section>
<!--main content end-->

</section>

<!--left sidebar start-->
@include('layouts.frontLayout.front_footer')
<!--left sidebar end-->


<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->

@if(\Request::is('admin/home')) 
<script src="{{asset('js/frontend_js/dashboard.js')}}"></script>
@endif

<!--common script init for all pages-->
<script src="{{asset('js/frontend_js/scripts.js')}}"></script>


</body>
</html>