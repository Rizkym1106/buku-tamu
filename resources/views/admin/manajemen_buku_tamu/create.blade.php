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
                    <form action="{{ route('manajemen_buku_tamu.store') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="avatar">Foto </label>
                            <input type="file" accept="image/png, image/gif, image/jpeg" name="foto" class="form-control">
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