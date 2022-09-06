@extends('admin.layout')

@section('content')
        <div class="container mt-5"> 
            <div class="row">
            <div class="col-lg-8">
                <h1>Data Admin GAKKUM</h1>
                <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Data Tamu</a>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-11 mt-5">
                <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>action</th>
                </tr>
                </thead> 
                <tbody>
                    @foreach($user as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->role->nama}}</td>
                                <td>
                                    <a class="badge badge-info m-1" href="{{ route('user.edit', $data->id) }}">
                                        <span class="fa fa-edit"></span> Edit
                                    </a>
                                    <a class="badge badge-danger m-1" href="{{ route('user.destroy', $data->id) }}" onclick=" return confirm('Apakah anda ingin menghapus data ini?')">
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