@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Edit Petugas</h3>
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
            <label class="form-label">Id Petugas</label>
            <input type="text" class="form-control" name="id_petugas" value="{{ $petugas->id_petugas }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" value="{{ $petugas->nama_petugas }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="{{ $petugas->username }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $petugas->password }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Id Level</label>
            <input type="text" class="form-control" name="id_level" value="{{ $petugas->id_level }}">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
