<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ URL::asset('home/assets/index.html') }}">
				<img src="https://www.menlhk.go.id/assets/front/images/logo.png" width="65%" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<a class="nav-link {{ Request::routeIs('dashboard.homepage') ? 'active' : '' }}" href="{{ route('dashboard.homepage') }}">Home</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link {{ Request::routeIs('dashboard.survey') ? 'active' : '' }}" href="{{ route('dashboard.survey') }}">Buku Tamu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ Request::routeIs('dashboard.profil') ? 'active' : '' }}" href="{{ route('dashboard.profil') }}">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('dashboard.contact') }}">Kontak</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>