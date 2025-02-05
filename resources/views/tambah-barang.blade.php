@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Tambah Barang</h3>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post">
        @csrf
        <div class="mb-3">
            <label class="id_barang">Id Barang</label>
            <input type="text" class="form-control" id="id_barang" name="id_barang">
        </div>
        <div class="mb-3">
            <label class="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="mb-3">
            <label class="tgl">Tgl</label>
            <input type="date" class="form-control" id="tgl" name="tgl">
        </div>
        <div class="mb-3">
            <label class="harga_awal">Harga Awal</label>
            <input type="text" class="form-control" id="harga_awal" name="harga_awal">
        </div>
        <div class="mb-3">
            <label class="deskripsi_barang">Deskripsi Barang</label>
            <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
