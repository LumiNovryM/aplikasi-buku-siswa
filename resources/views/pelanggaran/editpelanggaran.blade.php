@extends('layouts.main')

@section('title','Data Pelanggaran')
    
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Pelanggaran</h1>
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
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/insertpelanggaran">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Pelangaran</label>
                      <input type="text" autocomplete="off" value="{{ $data->nama_pelanggaran }}" name="nama_pelanggaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Tindak Lanjut</label>
                      <input type="text" autocomplete="off" value="{{ $data->tindak_lanjut }}" name="tindak_lanjut" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Category Pelanggaran</label>
                      <select class="form-select" name="id_category" aria-label="Default select example">
                        <option value="{{ $data->id_category }}" selected>{{ $data->category->tingkat_pelanggaran }}</option>
                        @foreach ($cat as $ct)
                        <option value="{{ $ct->id }}">{{ $ct->tingkat_pelanggaran }}</option>
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