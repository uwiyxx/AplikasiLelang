@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Tambah Petugas</h3>
    
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
            <label class="id_petugas">Id Petugas</label>
            <input type="text" class="form-control" id="id_petugas" name="id_petugas">
        </div>
        <div class="mb-3">
            <label class="nama_petugas">Nama Petugas</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
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
            <label class="id_level">Id Level</label>
            <input type="text" class="form-control" id="id_level" name="id_level">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
