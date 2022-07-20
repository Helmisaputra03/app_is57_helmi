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
    {{-- <h1>Data transaksi</h1> --}}
    
    <div class="card">
        <div class="card-header">
            Form Tambah Data transaksi
        </div>
        <div class="card-body">
            <form method="post" action="/transaksi/store" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NO TRANSAKSI</label>
                    <input type="text" name="no" class="form-control">
                </div>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">PELANGGAN</label>
                    <select name="pelanggan" class="form-control">
                        <option value="">-Pilih pelanggan-</option>
                        @foreach ($pel as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>  
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TGL</label>
                    <input type="date" name="tgl" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">TARIF</label>
                    <input type="text" name="tarif" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/transaksi" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
</div>
@endsection