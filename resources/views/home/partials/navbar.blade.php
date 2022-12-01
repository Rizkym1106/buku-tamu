<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ URL::asset('home/assets/index.html') }}">
				<img src="{{ URL::asset('home/assets/images/logogakkum.png') }}" width="65%" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="">Home</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="{{ route('dashboard.survey') }}">Survey Kepuasan Tamu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="">Contact</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>