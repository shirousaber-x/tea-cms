@extends('layouts.navbar')
@section('content')
<!--CONTENT START-->

<div class="container-lg" id="content">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">Contact Us</h2>
        </div>
    </div>
    
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>{{ $message }}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif($message = Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <b>{{ $message }}</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container content">
        <div class="row">
            <div class="col-sm-12 w-50 mx-auto">
                <div class="background">
                    <form name="Form" action="/contactform/process" method="post" onsubmit="return validateForm()">
                    @csrf
                        <label for="nama_contact" class="text-white">Nama</label>
                        <input type="text" name="nama_contact" id="nama_contact" class="form-control" value="{{old('nama_contact')}}" required>

                        <label for="email_contact" class="text-white">Email</label>
                        <input type="email" name="email_contact" id="email_contact" class="form-control" value="{{old('email_contact')}}" required>

                        <label for="telephone_contact" class="text-white">Telephone</label>
                        <input type="number" name="telephone_contact" id="telephone_contact" class="form-control" value="{{old('telephone_contact')}}" required>

                        <label for="address_contact" class="text-white">Address</label>
                        <textarea name="address_contact" id="address_contact" rows="2" class="form-control" value="{{old('address_contact')}}" required></textarea>

                        <label for="country_contact" class="text-white">Country</label>
                        <input type="text" name="country_contact" id="country_contact" class="form-control" value="{{old('country_contact')}}" required>
                        
                        <label for="city_contact" class="text-white">City</label>
                        <input type="text" name="city_contact" id="city_contact" class="form-control" value="{{old('city_contact')}}" required>

                        <label for="message_contact" class="text-white">Message</label>
                        <textarea id="message_contact" name="message_contact" class="form-control" value="{{old('message_contact')}}" required></textarea>
                        <br>
                        <br>

                        <input type="submit" class="btn btn-success">
                        <button onclick="alert('Form Has Been Reset')" type="reset" class="btn btn-secondary" value="Reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--BUTTON TO TOP-->
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

</div>
<!--CONTENT END-->
@endsection
