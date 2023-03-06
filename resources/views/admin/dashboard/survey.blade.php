<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Survey Kepuasan Tamu</title>
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
                                <form action="{{ route('survey_kepuasan_tamu.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama </label>
                                        <input type="text" name="nama" class="form-control" placeholder="Milea Adnan Husain">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Alamat </label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Jln buah batu">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Waktu Kedatangan </label>  
                                        <input type="date" name="waktu kedatangan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Telfon </label>
                                        <input type="numeric" name="telfon" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="avatar">Foto </label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <center>
                                        <div class="form-group">
                                            <input type="submit" value="Selanjutnya" class="btn btn-success my-4">
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

        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript' src='#'></script>
        <script type='text/javascript'>#</script>
        <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
        e.preventDefault();
        });</script>

    </body>
</html>