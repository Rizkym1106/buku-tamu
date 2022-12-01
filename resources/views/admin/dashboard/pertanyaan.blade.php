<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Survey Kepuasan Tamu</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
        <link href='#' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <style>::-webkit-scrollbar {
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
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
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
                <form action="{{ route('survey.pertanyaan.hasil', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="buku_tamu_id" value="{{ $id }}">
                    @foreach ($pertanyaans as $item)
                        <div class="form-group">
                            <label for="nama">{{ $item->pertanyaan }} </label>
                            <input type="hidden" name="pertanyaan[]" value="{{ $item->id }}">
                            <select class="form-control" name="respon[]" aria-label="Default select example">
                                <option>-- Pilih --</option>
                                @foreach ($respons as $respon)
                                <option value="{{ $respon->skor }}">{{ str_replace('normal', '', $respon->jawaban)}} {{ $item->keterangan }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary my-4">Tambah Survey</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
        <!-- /.8 -->

</div>
    <!-- /.row-->

</div>
</div>

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