@extends('layouts.navbar')
@section('content')
<!--CONTENT START-->
<div class="container-lg" id="content" style="min-height: 100vh">

    <!--CONTENT TITLE 1 START-->
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">ALL PRODUCT</h2>
        </div>
    </div>
    <!--CONTENT TITLE 1 END-->
    <!--FIRST PRODUCT START-->
    @foreach($dtahmad as $i => $m)
    <div class="row g-0">
        <div class="col-md-4">
            <a target="_blank" href='{{url("/foto product/$m->foto")}}'>
                <div class="zoom">
                    <img src='{{url("/foto product/$m->foto")}}' alt="{{ $m->nama_product }}" width="600"
                        height="400" />
                </div>
            </a>
        </div>
        <div class="col-md-8 bg-light pr-1">
            <br /><br /><br />
            <h2 class="title1">{{ $m->nama_product }}</h2>
            <br />
            <p align="justify" style="padding-left: 15px; padding-right: 15px;">{{ $m->deskripsi }}</p>
        </div>
        <div class="col-md-1 bg-light pr-1">
        </div>
    </div><br /><br />
    @endforeach
    <!--FIRST PRODUCT END-->
    <!--BUTTON TO TOP-->
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"></a>

</div>
<!--CONTENT END-->
@endsection
