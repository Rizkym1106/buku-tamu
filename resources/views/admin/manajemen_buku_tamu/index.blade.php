@extends('admin.layout')

@section('content')
    <div class="container mt-5"> 
        <div class="row">
            <div class="col-lg-10">
                <h1>Buku Tamu GAKKUM</h1>
                <a href="{{ route('manajemen_buku_tamu.create') }}" class="btn btn-primary">+ Tambah Tamu</a>
            </div>
            <div class="" style="margin-top: 60px;">
                <a href="{{ route('buku_tamu.export') }}" class="btn btn-success"> Export</a>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-11 mt-5">
                    <table class="table table-bordered table-hover">
                    <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Instansi</th>
                    <th>Email</th>
                    <th>Telfon</th>
                    <th>Aksi</th>
                </tr>
                </thead> 
                <tbody>
                    @foreach ($bukuTamu as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($item->foto)
                                <img width="140px" height="120px" src="{{asset('storage/buku_tamu/'.$item->foto)}}" alt="">
                                @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->instansi }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->telfon }}</td>
                            <td>
                                <a href="{{ route('kirim.email', $item->id) }}" class="btn btn-primary">Pulangkan</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>   
            </div>
        </div>
    </div>
@endsection