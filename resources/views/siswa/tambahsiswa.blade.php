@extends('layouts.main')

@section('title', 'Tambah Siswa')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Siswa</h1>
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
                <form action="/insertsiswa" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                      <input type="text" name="nama" class="form-control" autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                      <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Kelas</label>
                      <select class="form-select" name="id_kelas" aria-label="Default select example">
                        <option selected>Pilih Kelas</option>
                        @foreach ($kelas as $data)
                        <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                      <select class="form-select" name="id_jurusan" aria-label="Default select example">
                        <option selected>Pilih Jurusan</option>
                        @foreach ($jurusan as $data)
                        <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
                        <select class="form-select" name="id_guru" aria-label="Default select example">
                          <option selected>Pilih Wali Kelas</option>
                          @foreach ($guru as $data)
                          <option value="{{ $data->id }}">{{ $data->nama }}</option>
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