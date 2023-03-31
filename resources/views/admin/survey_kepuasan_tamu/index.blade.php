@extends('admin.layout')

@section('content')
    <div class="container mt-5"> 
        <div class="row">
            <div class="col-lg-8">
                <h1>Buku Survey Tamu</h1>
                <a href="{{ route('pertanyaan.index') }}" class="btn btn-primary">+ Pertanyaan</a>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-11 mt-5">
                    <table class="table table-bordered table-hover">
                    <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telfon</th>
                    <th>Instansi</th>
                    <th>Pertanyaan</th>
                    <th>Respon</th>
                </tr>
                </thead> 
                <tbody>
                </tbody>
                    @foreach ($hasil as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->buku_tamu->nama }}</td>
                        <td>{{ $item->buku_tamu->email }}</td>
                        <td>{{ $item->buku_tamu->telfon }}</td>
                        <td>{{ $item->buku_tamu->instansi }}</td>
                        <td>{{ $item->pertanyaan->pertanyaan }}</td>
                        <td>{{ str_replace('normal', '', $item->respon->jawaban) }} {{ $item->pertanyaan->keterangan }}</td>
                    </tr>
                    @endforeach
                </table>   
            </div>
        </div>
    </div>
@endsection