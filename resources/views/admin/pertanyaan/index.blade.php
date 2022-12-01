@extends('admin.layout')

@section('content')
    <div class="container mt-5"> 
        <div class="row">
            <div class="col-lg-8">
                <h1>Buku Tamu GAKKUM</h1>
                <a href="{{ route('pertanyaan.create') }}" class="btn btn-primary">+ Tambah Pertanyaan</a>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-11 mt-5">
                    <table class="table table-bordered table-hover">
                    <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>keterangan</th>
                    <th>Aksi</th>
                </tr>
                </thead> 
                <tbody>
                @foreach ($pertanyaan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pertanyaan }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <a class="badge badge-danger m-1" href="{{ route('pertanyaan.destroy', $item->id) }}" onclick=" return confirm('Apakah anda ingin menghapus data ini?')">
                                    <span class="fa fa-trash"></span> Hapus
                                </a>
                                <a class="badge badge-warning m-1" href="{{ route('pertanyaan.edit', $item->id) }}">
                                    <span class="fa fa-edit"> Edit</span>
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