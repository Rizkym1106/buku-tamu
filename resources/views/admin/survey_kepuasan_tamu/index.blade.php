@extends('admin.layout')

@section('content')
    <div class="container mt-5"> 
        <div class="row">
            <div class="col-lg-8">
                <h1>Buku Survey</h1>
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
                    <th>Waktu Datang</th>
                    <th>Pertanyaan</th>
                    <th>Respon</th>
                    <th>Bukti</th>
                </tr>
                </thead> 
                <tbody>
                </tbody>
                    @foreach ($hasil as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->buku_tamu->nama }}</td>
                        <td>{{ Carbon\Carbon::parse($item->buku_tamu->waktu_kedatangan)->isoFormat('D MMMM Y') }}</td>
                        <td>{{ $item->pertanyaan->pertanyaan }}</td>
                        <td>{{ str_replace('normal', '', $item->respon->jawaban) }} {{ $item->pertanyaan->keterangan }}</td>
                        <td>
                            @if($item->buku_tamu->foto != NULL)
                            <img src="{{ asset('storage/buku_tamu/'. $item->buku_tamu->foto) }}" width="100px" alt="">
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>   
            </div>
        </div>
    </div>
@endsection