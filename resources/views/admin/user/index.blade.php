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
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>action</th>
                </tr>
                </table>
                </div>
            </div>
        </div>
@endsection