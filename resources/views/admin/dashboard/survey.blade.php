<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Data Tamu</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
        <link href='#' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <style>
            ::-webkit-scrollbar {
                width: 8px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1; 
            }
                    
                /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #888; 
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #555; 
            } body {
                font-family: 'Lato', sans-serif;
            } h1 {
                margin-bottom: 40px;
            } label {
                color: #333;
            } .btn-send {
                font-weight: 300;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                width: 80%;
                margin-left: 3px;
            } .help-block.with-errors {
                color: #ff5050;
                margin-top: 5px;
            } .card{
                margin-left: 10px;
                margin-right: 10px;
            }
            #results { padding:20px; border:1px solid; background:#ccc; }
        </style>
    </head>
    <body className='snippet-body'>
        <div class="container">
            <div class=" text-center mt-5 ">
                <h1 >Data Tamu</h1>    
            </div>
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class = "container">
                                <form action="{{ route('survey.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama </label>
                                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Alamat </label>
                                        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" placeholder="Alamat Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Instansi </label>  
                                        <input type="text" name="instansi" class="form-control"  value="{{ old('instansi') }}" placeholder="Instasi Kamu">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Email </label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Alamat Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Telfon </label>
                                        <input type="numeric" name="telfon" class="form-control" value="{{ old('telfon') }}" placeholder="Nomor Telepon">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="my_camera"></div>
                                            <br/>
                                            <input type=button value="Take Snapshot" onClick="take_snapshot()">
                                            <input type="hidden" name="image" class="image-tag" id="img-tag">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="results">Gambar akan muncul disini</div>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success my-4">Kirim Data</button>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.8 -->
        </div>
        <!-- /.row-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript'>#</script>
        <script type='text/javascript'>
            var myLink = document.querySelector('a[href="#"]');
            myLink.addEventListener('click', function(e) {
            e.preventDefault();
            });
        </script>
        <script language="JavaScript">
            Webcam.set({
                width: 490,
                height: 350,
                image_format: 'jpeg',
                jpeg_quality: 90
            });
            
            Webcam.attach( '#my_camera' );
            
            function take_snapshot() {
                Webcam.snap( function(data_uri) {
                    $("#img-tag").val(data_uri);
                    console.log(data_uri)
                    document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                } );
            }
        </script>

    </body>
</html>