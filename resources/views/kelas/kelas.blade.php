@extends('layouts.main')

@section('title', 'Data Kelas')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Kelas</h1>
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
        <a class="btn btn-success mb-3" href="/tambahkelas">Tambah Data Kelas +</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    @foreach ( $kelas as $data )
                    <tbody>
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->kelas }}</td>
                        <td>
                            <a class="btn btn-info" href="/infokelas/{{ $data->id }}">Info</a>
                            <a class="btn btn-warning" href="/editkelas/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" href="/deletekelas/{{ $data->id }}">Delete</a>
                        </td>
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