@extends('layouts.main')

@section('title', 'Data Kasus')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Kasus</h1>
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
        <a class="btn btn-success mb-3" href="/tambahkasus">Tambah Data Kasus +</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Pelanggaran</th>
                        <th scope="col">Tindak Lanjut</th>
                        <th scope="col">Poin</th>
                      </tr>
                    </thead>
                    @foreach($data as $pel)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td scope="row">{{ $pel->siswa->nama }}</td>
                        <td scope="row">{{ $pel->siswa->kelas->kelas }}</td>
                        <td scope="row">{{ $pel->siswa->jurusan->jurusan }}</td>
                        <td scope="row">{{ $pel->pelanggaran->nama_pelanggaran }}</td>
                        <td scope="row">{{ $pel->pelanggaran->tindak_lanjut }}</td>
                        <td scope="row">{{ $pel->pelanggaran->category->poin }}</td>
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