@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Edit Barang</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label class="form-label">Id Barang</label>
            <input type="text" class="form-control" name="id_barang" value="{{ $barang->id_barang }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Tgl</label>
            <input type="text" class="form-control" name="tgl" value="{{ $barang->tgl }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Awal</label>
            <input type="text" class="form-control" name="harga_awal" value="{{ $barang->harga_awal }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi Barang</label>
            <input type="text" class="form-control" name="deskripsi_barang" value="{{ $barang->deskripsi_barang }}">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
