@extends('layouts.main')

@section('title', 'Data Guru')

@section('search')
<li class="nav-item">
  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
    <i class="fas fa-search"></i>
  </a>
  <div class="navbar-search-block">
    <form class="form-inline">
      <div class="input-group input-group-sm">
        <form action="/siswa" method="get"></form>
        <input class="form-control form-control-navbar" autocomplete="off" type="search" name="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</li>
@endsection


@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Guru</h1>
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
        <a class="btn btn-success mb-3" href="/tambahguru">Tambah Data Guru +</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    @foreach ( $guru as $data )
                    <tbody>
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->notelp }}</td>
                        <td>
                            <a class="btn btn-info" href="/infoguru/{{ $data->id }}">Info</a>
                            <a class="btn btn-warning" href="/editguru/{{ $data->id }}">Edit</a>
                            <a class="btn btn-danger" href="/deleteguru/{{ $data->id }}">Delete</a>
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
    