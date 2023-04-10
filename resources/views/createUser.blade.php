@extends('layouts.navbarDashboard')
@section('content')

<div class="container-lg">
    {{-- judul halaman --}}
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">FORM CREATE USER</h2>
        </div>
    </div>

    {{-- alert (jika ada) --}}
    @if (session()->has('status'))
    <div class="alert alert-danger" role="alert">
        {{session('status')}}
    </div>
    @endif

    {{-- form --}}
    <div class="row">
        <div class="col-sm-12 bg-dark text-light w-50 mx-auto p-5 my-5">
            <form action="create/process" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="userID" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="userID" name="id-user" value="{{old('id-user')}}" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile" name="foto" required>
                </div>
                <div class="mb-5">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option value="admin" {{old('role') == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="member" {{old('role') == 'member' ? 'selected' : ''}}>Member</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success w-100">Create</button>
              </form>
        </div>
    </div>
    </div>
</div>

@endsection
