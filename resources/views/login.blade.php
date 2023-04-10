@extends('layouts.navbar')
@section('content')
<div class="container-sm" style="min-height: 100vh">
    <div class="row">
        @if (session()->has('status')) {{--Cek jika ada status error dari controller--}}
        <div class="alert alert-danger" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="col-sm-12 bg-dark text-light w-50 mx-auto p-5 my-5">
            <form action="login/process" method="POST">
                @csrf
                <div class="text-center mb-3">
                    <img class="img-fluid" src="{{url('img/Ahmad Tea Logo.png')}}" alt="" width="300px" height="200px">
                </div>
                <div class="mb-3">
                  <label for="userID" class="form-label">User ID</label>
                  <input type="text" class="form-control" id="userID" name="id-user" value="{{empty(old('id-user')) ? Request::cookie('id-user') : old('id-user')}}">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="{{empty(old('password')) ? Request::cookie('password') : old('password')}}">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="rememberMe" name="remember-me" value="remember-me" {{empty(old('remember-me')) ? (empty(Request::cookie('id-user')) ? '' : 'checked') : 'checked'}}>
                  <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection