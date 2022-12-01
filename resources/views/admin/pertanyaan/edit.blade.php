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
                    <form action="{{ route('pertanyaan.update', $datas->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Pertanyaan </label>
                            <input type="text" name="pertanyaan" value="{{ $datas->pertanyaan }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">keterangan </label>
                            <input type="text" name="keterangan" value="{{ $datas->keterangan }}" class="form-control">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary my-4">Ubah Pertanyaan</button>
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