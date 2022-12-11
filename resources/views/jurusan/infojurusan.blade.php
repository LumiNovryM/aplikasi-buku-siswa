@extends('layouts.main')

@section('title', 'Info Jurusan')
    
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Info Jurusan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol> --}}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    {{-- Container Start --}}
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-header">
                           <h5>Info Jurusan</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kelas : {{ $jurusan->jurusan }}</li>
                          </ul>
                        </div>
                </div>
                <h3 class="mt-4">Data Siswa</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Jenis Kelamin</th>
                          </tr>
                        </thead>
                        @foreach ($siswa as $dt)
                        <tbody>
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->kelas->kelas }}</td>
                            <td>{{ $dt->guru->nama }}</td>
                            <td>{{ $dt->jenis_kelamin }}</td>
                          </tr>
                        </tbody>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
    {{-- Container End --}}

</div>
@endsection