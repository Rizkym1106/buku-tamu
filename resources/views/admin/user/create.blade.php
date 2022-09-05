@extends('admin.layout')

@section('content')
    
    <section>
        <div class="container mt-5">
            <h1>Data Admin</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Admin </label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Username </label>
                            <input type="text" name="username" class="form-control" placeholder="Dilan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Password </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Role </label>
                            <select name="role_id" class="form-control">
                                <option value="">--Pilih role--</option>
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary my-4">Tambah Data</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}">
                                << kembali ke halaman utama</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection