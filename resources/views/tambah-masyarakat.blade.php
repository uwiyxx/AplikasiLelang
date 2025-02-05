@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Tambah Masyarakat</h3>
    
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
            <label class="id_user">Id User</label>
            <input type="text" class="form-control" id="id_user" name="id_user">
        </div>
        <div class="mb-3">
            <label class="nama_lengkap">Nama lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
        </div>
        <div class="mb-3">
            <label class="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label class="password">Password</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label class="telp">Telp</label>
            <input type="text" class="form-control" id="telp" name="telp">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
