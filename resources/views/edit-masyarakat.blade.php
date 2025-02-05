@extends('dashboard')

@section('konten-utama')
    <h3 class="text-center">Edit Masyarakat</h3>
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
            <label class="form-label">Id User</label>
            <input type="text" class="form-control" name="id_user" value="{{ $masyarakat->id_user }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="{{ $masyarakat->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="{{ $masyarakat->username }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $masyarakat->password }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Telp</label>
            <input type="text" class="form-control" name="telp" value="{{ $masyarakat->telp }}">
        </div>
        <th style="border: 1px solid black;">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-danger">Batal</a>
        </th>
    </form>
@endsection
