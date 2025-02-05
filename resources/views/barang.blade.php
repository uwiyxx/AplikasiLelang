@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Data Barang</h3>
    <ul class="nav nav-pills flex mb-auto text-center text-white">

        <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
            <li class="">
                <div class="container">
                    <a href="/tambah-barang" class="tambah-data-btn mt-2" style="background-color:#F0A8D0;"
                        onclick="window.location.href='add_data.php'">+ Tambah Data</a>
                </div>
            </li>
        </ul>
        <div class="d-flex container">
            <table class="table table-bordered border-primary border-dark mt-2 text-center">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Tgl</th>
                        <th scope="col">Harga Awal</th>
                        <th scope="col">Deskripsi Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data_barang as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->id_barang}}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->tgl }}</td>
                            <td>{{ $item->harga_awal }}</td>
                            <td>{{ $item->deskripsi_barang }}</td>
                            <td>
                                <a href="/edit/Barang/{{ $item->id_barang }}" class="btn text-white"
                                    style="background-color: #059C41">Edit</a>
                                <a href="/delete/Barang/{{ $item->id_barang }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

    @section('css')
        <style>
            body {
                background-color: rgb(230, 230, 230);
            }
        </style>
    @endsection
