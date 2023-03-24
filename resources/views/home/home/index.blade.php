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
        <div>
            <div role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('{{ asset('home/assets/images/foto-pemandangan.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="margin-top:-500px;font-size: 60px;
                        font-weight: 700;">Selamat datang di Kementerian Lingkungan Hidup dan Kehutanan</h3>
                        {{-- <p>A Great Theme For Business Consulting</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-10">
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
    </div>
</body>
</html>
@endsection
