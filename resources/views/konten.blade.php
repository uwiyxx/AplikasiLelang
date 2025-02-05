@extends('dashboard')

@section('konten-utama')

<div class="d-flex ">
<div class="card text-bg-primary mb-3 ms-3 text-white" style="width: 268px; height: 130px; background-color: #7BD3EA;">
    <div class="card-body">
      <h5 class="card-text">Buku</h5>
    </div>
    <a href="/master-data" class="card-header" >More Info</a>
  </div>
  <div class="card text-bg-primary mb-3 ms-3 text-white" style="width: 268px; height: 130px; background-color: #FCDC94;">
    <div class="card-body">
      <h5 class="card-text">Transaksi</h5>
    </div>
    <div class="card-header" >More Info</div>
  </div>
    <div class="card text-bg-primary mb-3 ms-3 text-white" style="width: 268px; height: 130px; background-color: #95D2B3;">
    <div class="card-body">
      <h5 class="card-text">Laporan</h5>
    </div>
    <div class="card-header" >More Info</div>
  </div>
</div>

@endsection