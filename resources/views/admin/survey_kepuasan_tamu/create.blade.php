@extends('admin.layout')

@section('content')
    
    <section>
        <div class="container mt-5">
            <h1>Buku Tamu</h1>
            <div class="row">
                <div class="col-lg-8">
                    {{-- menampilkan error validasi --}}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- form validasi -->
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary my-4">Tambah Data</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ route('dashboard.index') }}">
                                << kembali ke halaman utama</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection