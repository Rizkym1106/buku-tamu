@extends('admin.layout')

@section('content')
    <div class="container mt-5"> 
        <div class="row">
            <div class="col-lg-8">
                <h1>Buku Tamu GAKKUM</h1>
                <a href="{{ route('manajemen_buku_tamu.create') }}" class="btn btn-primary">+ Tambah Tamu</a>
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
                    <th>Waktu Kedatangan</th>
                    <th>Telfon</th>
                    <th>Aksi</th>
                </tr>
                </thead> 
                <tbody>
                    @foreach ($bukuTamu as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img width="100px" height="100px" src="{{asset('storage/foto/'.$item->foto)}}" alt=""></td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ Carbon\Carbon::parse($item->waktu_kedatangan)->isoFormat('DD MMMM Y') }}</td>
                            <td>{{ $item->telfon }}</td>
                            <td>
                                <a class="badge badge-danger m-1" href="{{ route('manajemen_buku_tamu.destroy', $item->id) }}" onclick=" return confirm('Apakah anda ingin menghapus data ini?')">
                                    <span class="fa fa-trash"></span> Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>   
            </div>
        </div>
    </div>
@endsection