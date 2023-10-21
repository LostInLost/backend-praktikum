@extends('layouts.app')

@section('title', $data['nama_lengkap'] ?? 'Tidak Ditemukan')


@section('content')

<div class="card mt-3">
  <div class="card-header">
    <h3 class="card-title">Profile</h3>
    <div class="card-tools">
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if(!$data)
    <h3>Data Tidak Ditemukan</h3>
    @else
    <h3>Nama Lengkap : {{ $data['nama_lengkap'] }}</h3>
    <h3>NIM : {{ $data['nim'] }}</h3>
    <h3>Kelas : {{ $data['kelas'] }}</h3>
    @endif
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Profile
  </div>
  <!-- /.card-footer -->
</div>

@endsection
