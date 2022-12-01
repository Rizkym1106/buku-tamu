<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home</title>
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
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Welcome to Zonebiz</h3>
						<p>A Great Theme For Business Consulting</p>
					</div>
				</div>
				<!-- Slide Two - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Best Consulting Services.</h3>
						<p>A Great Theme For Business Consulting</p>
					</div>
				</div>
				<!-- Slide Three - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
					<div class="carousel-caption d-none d-md-block">
						<h3>Welcome to Zonebiz</h3>
						<p>A Great Theme For Business Consulting</p>
					</div>
				</div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
	
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
				<div class="col-lg-6">
					<h2>Selamat datang di Gakkum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
					<h5>Our smart approach</h5>
					<ul>
						<li>Sed at tellus eu quam posuere mattis.</li>
						<li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>                     
					</ul>
				</div>
				<div class="col-lg-6">
					<img class="{{ URL::asset('home/assets/img-fluid rounded') }}" src="{{ URL::asset('home/assets/images/about-img.jpg') }}" alt="" />
				</div>
            </div>
            <!-- /.row -->
        </div>
	</div>	
	<!-- Contact Us -->
<div class="touch-line">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#"> Contact Us </a>
            </div>
        </div>
    </div>
</div>
	
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