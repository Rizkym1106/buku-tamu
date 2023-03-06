@extends('admin.layout')

@section('content')
    
    <section>
        <div class="container mt-5">
            <h1>Data Admin</h1>
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
                    <form action="{{ route('user.update', $dataAdmin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Admin </label>
                            <input type="text" name="nama" value="{{ $dataAdmin->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Username </label>
                            <input type="text" name="username" value="{{ $dataAdmin->username }}" class="form-control" placeholder="Dilan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Password </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role">Role </label>
                            <select name="role_id" value="{{ $dataAdmin->role_id }}" class="form-control">
                                <option value="">--Pilih role--</option>
                                @foreach ($role as $item) 
                                    <option value="{{ $item->id }}" @if($dataAdmin->role_id == $item->id) selected @endif>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success my-4">Ubah Data</button>
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