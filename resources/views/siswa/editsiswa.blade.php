@extends('layouts.main')

@section('title', 'Edit Siswa')

{{-- @dd($data->id_jurusan) --}}

@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Siswa</h1>
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

    {{-- Form Start --}}
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <form action="/updatesiswa/{{ $data->id }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                      <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                      <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option value="{{ $data->jenis_kelamin }}" selected>{{ $data->jenis_kelamin }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Kelas</label>
                      <select class="form-select" name="id_kelas" aria-label="Default select example">
                        <option value="{{ $data->id_kelas }}" selected>{{ $data->kelas->kelas }}</option>
                        @foreach ($kelas as $kelas)
                        <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                      <select class="form-select" name="id_jurusan" aria-label="Default select example">
                        <option value="{{ $data->id_jurusan }}" selected>{{ $data->jurusan->jurusan }}</option>
                        @foreach ($jurusan as $jurusan)
                        <option value="{{ $jurusan->id }}">{{ $jurusan->jurusan }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
                        <select class="form-select" name="id_guru" aria-label="Default select example">
                          <option value="{{ $data->id_guru }}" selected>{{ $data->guru->nama }}</option>
                          @foreach ($guru as $guru)
                          <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                          @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    {{-- Form End --}}


</div>
@endsection