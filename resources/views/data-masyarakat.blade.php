@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Data Masyarakat </h3>
    <ul class="nav nav-pills flex mb-auto text-center text-white">

        <ul class="nav nav-pills d-flex mb-auto nav text-center text-white">
            <li class="">
                <div class="container">
                    <a href="/tambah-masyarakat" class="tambah-data-btn mt-2" style="background-color:#F0A8D0;"
                        onclick="window.location.href='add_data.php'">+ Tambah Data</a>
                </div>
            </li>
        </ul>
        <div class="d-flex container">
            <table class="table table-bordered border-primary border-dark mt-2 text-center">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Id User</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Username</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data_masyarakat as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->id_user}}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->telp }}</td>
                            <td>
                                <a href="/edit/Masyarakat/{{ $item->id_user }}" class="btn text-white"
                                    style="background-color: #059C41">Edit</a>
                                <a href="/delete/Masyarakat/{{ $item->id_user }}" class="btn btn-danger">Delete</a>
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
