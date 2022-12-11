@extends('layouts.main')

@section('title', 'Tambah Kasus')
    
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Kasus</h1>
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
    <div class="container mb-5 mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/insertkasus">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                      <select class="form-select" name="siswa_id" aria-label="Default select example">
                        <option selected>Pilih Nama Siswa</option>
                        @foreach($siswa as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jenis Pelanggaran</label>
                      <select class="form-select" name="pelanggaran_id" aria-label="Default select example">
                        <option selected>Pilih Jenis Pelanggaran</option>
                        @foreach($pelanggaran as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_pelanggaran }}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    {{-- Container End --}}

</div>

@endsection