@extends('home.layout')

@Section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak</title>
</head>
<body>
    <div class="jumbotron">
        <section id="contact" class="contact">
            <div class="container mt-4">
        
            <div class="section-title" data-aos="fade-up">
                <h2>Kontak</h2>
            </div>
        
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
                <div class="address mt-3">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Lokasi:</h4>
                    <p>Jl. Perintis Kemerdekaan Km.14</p>
                </div>
                    <div class="address mt-3">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>pusdatin@menlhk.go.id</p>
    
                <div class="address mt-3">
                    <i class="bi bi-clock"></i>
                    <h4>Jam Operasional:</h4>
                    <p>08:00 - 16:00</p>
                </div>
                <div class="address mt-3">
                    <i class="bi bi-calendar"></i>
                    <h4>Hari Kerja:</h4>
                    <p>Senin - Jum'at</p>
                </div>
                    </div>
            </div>
            </div>
        </div>
        </section>
    </div>
</body>
</html>
@endsection

