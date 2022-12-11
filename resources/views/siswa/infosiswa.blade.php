@extends('layouts.main')

@section('title', 'Info Siswa')


@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Info Siswa</h1>
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
                           <h5> {{ $siswa->nama }}</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kelas : {{ $siswa->kelas->kelas }}</li>
                            <li class="list-group-item">Jurusan : {{ $siswa->jurusan->jurusan }}</li>
                            <li class="list-group-item">Jenis Kelamin : {{ $siswa->jenis_kelamin }}</li>
                          </ul>
                        </div>
                </div>
                <h3 class="mt-4">Data Kasus</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pelanggaran</th>
                            <th scope="col">Tindak Lanjut</th>
                            <th scope="col">Tingkat</th>
                            <th scope="col">Poin</th>
                          </tr>
                        </thead>
                        @foreach ($data as $dt)
                        <tbody>
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->siswa->nama }}</td>
                            <td>{{ $dt->pelanggaran->nama_pelanggaran }}</td>
                            <td>{{ $dt->pelanggaran->tindak_lanjut }}</td>
                            <td>{{ $dt->pelanggaran->category->tingkat_pelanggaran }}</td>
                            <td>{{ $dt->pelanggaran->category->poin }}</td>
                        </tr>
                        </tbody>
                        @endforeach
                        {{-- <tbody>
                            <tr>
                                <th colspan="5">Total Poin</th>
                                <th colspan="1"></th>
                            </tr>
                        </tbody> --}}
                    </table>
            </div>
        </div>
    </div>
    {{-- Container End --}}

</div>
@endsection