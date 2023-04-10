@extends('layouts.navbarDashboard')
@section('content')

<div class="container-lg px-4" style="min-height: 100vh">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">DAFTAR CONTACT</h2>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <b>{{ $message }}</b>
        </div>
    @elseif($message = Session::get('failed'))
        <div class="alert alert-danger" role="alert">
            <b>{{ $message }}</b>
        </div>
    @endif

    <div class="row">
        <table class="table table-light table-striped table-hover table-responsive align-middle text-center">
            <thead class="table-warning">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Time</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactlist as $i => $m)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $m->time }}</td>
                    <td>{{ $m->nama_contact }}</td>
                    <td>{{ $m->email_contact }}</td>
                    <td>{{ $m->telephone_contact }}</td>
                    <td>{{ $m->address_contact }}</td>
                    <td>{{ $m->country_contact }}</td>
                    <td>{{ $m->city_contact }}</td>
                    <td>{{ $m->message_contact }}</td>
                    <td>
                        <a href="/contactform/delete/{{ $m->time }}/"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection