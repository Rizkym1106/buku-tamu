@extends('home.layout')

@Section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
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
                        <h3>Selamat datang di Kementerian Lingkungan Hidup dan Kehutanan</h3>
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
                <div class="col-lg-10">
                    <h4>Selamat datang di Kementerian Lingkungan Hidup dan Kehutanan</h4>
                    <p><strong>Sejarah</strong> <br/>masa Pemerintahan Presiden Joko Widodo, Kementerian Kehutanan digabungkan dengan Kementerian Lingkungan Hidup menjadi Kementerian Lingkungan Hidup dan Kehutanan. Berikut nama Kementerian Lingkungan Hidup dan Kehutanan sebelum di gabung:</p>
                    <p><strong>Kementerian Lingkungan Hidup: </strong><br/>Direktorat Jenderal Kehutanan, Departemen Pertanian (sampai dengan tahun 1983)<br/>Departemen Kehutanan (1983-1998)<br/>Departemen Kehutanan dan Perkebunan (1998)<br/>Departemen Kehutanan (1998-2005)<br/>Kementerian Kehutanan (2005-2014)</p>
                </div>
                <div class="col-lg-6">
                    <img class="{{ URL::asset('home/assets/img-fluid rounded') }}" src="#" alt="" />
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>	
    <!-- Contact Us -->
    <div class="touch-line" style="background-color:#228B22">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#"> Hubungi Kami </a>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
@endsection
