@extends('layouts.navbarDashboard')
@section('content')
<!--CONTENT START-->
<div class="container-lg px-4" id="" style="min-height: 100vh">
    <!--CONTENT TITLE 1 START-->
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">DAFTAR PRODUCT</h2>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12  p-4">
            <div class="row">
                <div class="col-md-8">
                    <a href="/product/create/"><button class="btn btn-success">Create Product</button></a>
                </div>
                <div class="col-md-4">
                    <form action="/cari">
                        <div class="input-group mb-3 bg-light rounded">
                            <input type="text" class="form-control" placeholder="Cari Kode/Nama Produk" name="search"
                                value={{old('search')}}>
                            <button class="btn btn-success" type="submit" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <b>{{ $message }}</b>
    </div>
    @elseif($message = Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <b>{{ $message }}</b>
    </div>
    @endif
    <!--CONTENT TITLE 1 END-->
    <!--FIRST PRODUCT START-->
    <div class="row">
        <table class="table table-light table-striped table-hover table-responsive align-middle text-center">
            <thead class="table-warning">
                <tr>
                    <th class="align-middle" width="3%">No</th>
                    <th class="align-middle" width="10%">Foto</th>
                    <th class="align-middle" width="10%">Kode Product</th>
                    <th class="align-middle" width="15%">Nama Product</th>
                    <th class="align-middle" width="47%">Deskripsi</th>
                    <th class="align-middle" width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dtahmad as $i => $m)
                <tr>
                    <td class="align-middle">{{ ++$i }}</td>
                    <td><img class="img-fluid" src="{{ url('/foto product/'.$m->foto )}}" alt="" height="100px" width="100px"></td>
                    <td class="align-middle">{{ $m->kode_product }}</td>
                    <td class="align-middle">{{ $m->nama_product }}</td>
                    <td class="align-middle" align="justify">{{ $m->deskripsi }}</td>
                    <td class="align-middle">
                        <a href="/product/update/{{ $m->kode_product }}/"><button
                                class="btn btn-success w-50">Update</button></a>
                        <br><br>
                        <a href="/manage_product/delete/{{$m->kode_product}}/"><button
                                class="btn btn-danger w-50">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--FIRST PRODUCT END-->
</div>
<!--CONTENT END-->
@endsection
