@extends('bukus.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Data Buku
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('bukus.store') }}" id="myForm">
                    @csrf
                        <div class="form-group">
                            <label for="kode_buku">kode_buku</label>
                            <input type="kode_buku" name="kode_buku" class="form-control" id="kode_buku" aria-describedby="kode_buku" >
                        </div>
                        <div class="form-group">
                            <label for="judul">judul</label>
                            <input type="judul" name="judul" class="form-control" id="judul" aria-describedby="judul" >
                        </div>
                        <div class="form-group">
                            <label for="pengarang">pengarang</label>
                            <input type="pengarang" name="pengarang" class="form-control" id="pengarang" aria-describedby="pengarang" >
                        </div>
                        <div class="form-group">
                            <label for="jenis_buku">jenis_buku</label>
                            <input type="jenis_buku" name="jenis_buku" class="form-control" id="jenis_buku" aria-describedby="jenis_buku" >
                        </div>
                        <div class="form-group">
                            <label for="harga">harga</label>
                            <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga" >
                        </div>
                        <div class="form-group">
                            <label for="qty">qty</label>
                            <input type="qty" name="qty" class="form-control" id="qty" aria-describedby="aty" >
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection