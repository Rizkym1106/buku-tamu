<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Bootstrap core CSS -->
	<link href="{{ URL::asset('home/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{ URL::asset('home/assets/css/all.css') }}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{ URL::asset('home/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="{{ URL::asset('home/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ URL::asset('home/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper-main">
	@include('home.partials.topbar')
	
	@include('home.partials.navbar')

    
    @yield('content')
	
	@include('home.partials.footer')
</div>  
<!-- Bootstrap core JavaScript -->
<script src="{{ URL::asset('user/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/filter.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/jquery.appear.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ URL::asset('user/assets/js/script.js') }}"></script>
</body>
</html>