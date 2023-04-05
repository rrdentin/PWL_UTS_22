@extends('layouts.main')


@section('judul')
TABEL DATA BUKU PERPUSTAKAAN
@endsection


    @section('isi')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
            <form class="form-left my-2" method="get" action="{{ route('search') }}">
                    <div class="form-group w-80 mb-3">
                        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Judul Buku">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        <a class="btn btn-success right" href="{{ route('bukus.create') }}" style="margin-left:9.2cm"> Tambah Data Buku</a>
                    </div>
            </form>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>kode_buku</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>jenis_buku</th>
            <th>harga</th>
            <th>qty</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bukus as $Buku)
        <tr>

            <td>{{ $Buku->kode_buku }}</td>
            <td>{{ $Buku->judul }}</td>
            <td>{{ $Buku->pengarang }}</td>
            <td>{{ $Buku->jenis_buku }}</td>
            <td>{{ $Buku->harga }}</td>
            <td>{{ $Buku->qty }}</td>
            <td>
            <form action="{{ route('bukus.destroy',$Buku->kode_buku) }}" method="POST">

                <a class="btn btn-info" href="{{ route('bukus.show',$Buku->kode_buku) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('bukus.edit',$Buku->kode_buku) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
{!! $bukus->withQueryString()->links('pagination::bootstrap-5') !!}
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    @endsection