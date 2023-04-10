@extends('layouts.navbarDashboard')
@section('content')
<div class="container-lg px-4 h-100" id="">
        <br>
        <form method="post" action="process" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="font-weight-bold text-light">Kode Product</label>
                <input type="text" class="form-control" name="kd_pro" placeholder="Masukkan Kode Barang"
                    value="{{old('kd_pro')}}" required>
            </div>
            <br>
            <div class="form-group">
                <label class="font-weight-bold text-light">Nama Product</label>
                <input type="text" class="form-control" name="nama_pro" placeholder="Masukkan Nama Barang"
                    value="{{old('nama_pro')}}" required>
            </div>
            <br>
            <div class="form-group">
                <label class="font-weight-bold text-light">Foto Product</label>
                <input type="file" class="form-control" name="fotopro" accept=".jpg, .jpeg, .png" required>
            </div>
            <br>
            <div class="form-group">
                <label class="font-weight-bold text-light">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Barang"
                    value="{{old('deskripsi')}}" required>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="Add">
            </div>
            <br>
            <div class="form-group">
                <a href="/manage_product"><input type="button" class="form-control btn btn-danger" value="Cancel"></a>
            </div>
        </form><br><br><br>
    </div>
@endsection
