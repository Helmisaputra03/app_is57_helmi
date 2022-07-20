@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Jurusan</h1> --}}
    
    <div class="card">
        <div class="card-header">
            Form Edit Data pelanggan
        </div>
        <div class="card-body">
            <form method="post" action="/pelanggan/{{$pel->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">pelanggan</label>
                    <input type="text" value="{{$pel->nama}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Hp</label>
                    <input type="text" value="{{$pel->hp}}" name="hp" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/pelanggan" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection