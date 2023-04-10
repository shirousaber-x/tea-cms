@extends('layouts/navbarDashboard')
@section('content')

<div class="container-lg px-4" style="min-height: 100vh">
    {{-- judul halaman --}}
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">DAFTAR USER</h2>
        </div>
    </div>

    {{-- alert (jika ada) --}}
    @if (session()->has('statusBerhasil'))
    <div class="alert alert-success" role="alert">
        {{session('statusBerhasil')}}
    </div>
    @elseif (session()->has('statusGagal'))
    <div class="alert alert-danger" role="alert">
        {{session('statusGagal')}}
    </div>
    @endif

    {{-- search bar --}}
    <div class="row mb-3 justify-content-end">
        <div class="col-sm-4 px-0 ">
            <form action="manage_user">
                <div class="input-group mb-3 bg-light rounded">
                    <input type="text" class="form-control" placeholder="Search User ID / Username / Role" name="search" value={{old('search')}}>
                    <button class="btn btn-success" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div> 
    </div>

    {{-- create user --}}
    <div class="row mb-3">
        <div class="col-sm-3 px-0">
            <a href="/manage_user/create"><button type="button" class="btn btn-success">Create User</button></a>
        </div>
    </div>

    {{-- daftar user --}}
    <div class="row">
        <table class="table table-light table-striped table-hover table-responsive align-middle text-center">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataUser as $i)
                <tr>
                    <td><img class="img-fluid rounded-circle" src='{{url("/foto user/$i->foto")}}' alt="" height="100px" width="100px"></td>
                    <td>{{ $i->id_user }}</td>
                    <td>{{ $i->username }}</td>
                    <td>{{ $i->role }}</td>
                    <td>
                        <a href="/manage_user/{{ $i->id_user }}/update"><button class="btn btn-primary w-50 mb-2">Edit</button></a>
                        <br>
                        <a href="/manage_user/{{ $i->id_user }}/delete"><button class="btn btn-danger w-50">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
