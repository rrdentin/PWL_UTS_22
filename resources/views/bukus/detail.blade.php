@extends('bukus.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Data Buku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>kode_buku: </b>{{$Buku->kode_buku}}</li>
                    <li class="list-group-item"><b>judul: </b>{{$Buku->judul}}</li>
                    <li class="list-group-item"><b>pengarang: </b>{{$Buku->pehgarang}}</li>
                    <li class="list-group-item"><b>jenis_buku: </b>{{$Buku->jenis_buku}}</li>
                    <li class="list-group-item"><b>harga: </b>{{$Buku->harga}}</li>
                    <li class="list-group-item"><b>qty: </b>{{$Buku->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('bukus.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
