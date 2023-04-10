<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('bootstrap-utilities.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Roboto dan Poppin 500 weight font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto:wght@500&display=swap"
        rel="stylesheet">

    <script src="{{ url('/js/jquery.js') }}"></script>
    <script src="{{ url('/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('https://kit.fontawesome.com/b4d146c312.js') }}" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url("/img/back1.jpg");
            font-family: 'Bookman Old Style';
            border: 0px solid black;
        }

        /* navbar */
        nav.navbar {
            font-family: 'Poppins', sans-serif;
            font-size: 130%;
            margin: 0;
            box-shadow: 0 4px 2px -2px gray;
        }

        nav.navbar button.navbar-toggler:active {
            background-color: #648b19;
        }

        nav.navbar a {
            color: #648b19;
        }

        nav.navbar {
            background: white;
            padding: 15px;
        }

        nav.navbar li {
            margin: 10px 30px 10px 30px;
        }

        nav.navbar ul li a.dropdown-item:hover,
        nav.navbar ul li a.dropdown-item:focus {
            border-radius: 10px;
        }

        nav.navbar ul li a.dropdown-item:active {
            background-color: rgba(132, 197, 35, 0.686);
            border-radius: 10px;
        }

        nav.navbar .nav-link.active,
        nav.navbar .nav-link:hover {
            border-bottom: 4px solid #648b19;
        }

        /* konten */
        .container-lg, #content {
            background-color: rgb(3, 51, 20, 0.5);
        }

        h6 {
            color: green;
            font-family: "Bookman Old Style";
        }

        .card {
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        h4.card-title {
            color: black;
            font-family: "Bookman Old Style";
            text-align: left;
        }

        .scroll {
            color: #fff;
            margin-top: 100px
        }

        h2.another {
            color: black;
            font-family: "Bookman Old Style";
            text-align: center;
        }

        h2.title1 {
            color: black;
            font-family: "Bookman Old Style";
            text-align: center;
        }

        .zoom {
            overflow: hidden;
            margin: 0 auto;
        }

        .zoom img {
            width: 100%;
            transition: 0.5s all ease-in-out;
        }

        .zoom:hover img {
            transform: scale(1.5);
        }

        .zoom2 {
            overflow: hidden;
            margin: 0 auto;
        }

        .zoom2 img {
            transition: 0.5s all ease-in-out;
        }

        .zoom2:hover img {
            transform: scale(1.5);
        }

        .scroll {
            color: #fff;
            margin-top: 100px
        }

        #toTopBtn {
            position: fixed;
            bottom: 26px;
            right: 39px;
            z-index: 98;
            padding: 21px;
            background-color: black;
        }

        .js .cd-top--fade-out {
            opacity: .5
        }

        .js .cd-top--is-visible {
            visibility: visible;
            opacity: 1
        }

        .js .cd-top {
            visibility: hidden;
            opacity: 0;
            transition: opacity .3s, visibility .3s, background-color .3s
        }

        .cd-top {
            position: fixed;
            bottom: 20px;
            bottom: var(--cd-back-to-top-margin);
            right: 20px;
            right: var(--cd-back-to-top-margin);
            display: inline-block;
            height: 40px;
            height: var(--cd-back-to-top-size);
            width: 40px;
            width: var(--cd-back-to-top-size);
            box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
            background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
            background-color: black;
            background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
        }

        .height {
            height: 3000px
        }

        #footer {
            height: 70px;
            text-align: center;
            box-shadow: 4px 0px 2px -2px gray;
            background-color: white;
            /* padding: 0px 0 0px 0; */
        }

        #content div.quote {
            clear: both;
            text-align: center;
            margin-top: 10px;
        }

        #content div.text-quote {
            width: 635px;
            height: 70px;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            text-align: center;
            margin: 0 auto;
            background-image: linear-gradient(to top, #000, rgb(0,0,0,0.5));
            position: relative;
            bottom: 70px;
            font-size: 16px;
            color: rgb(226, 200, 200);
            font-weight: bold;
        }

    </style>
    <script>
        $("document").ready(function () {
            $("#content a:not(#toTopBtn)").fancybox();
        });

    </script>
    <title>Ahmad Tea | {{ $title }}</title>
</head>

<body>
    <!-- NAVBAR START -->
    <!-- Source code navbar diambil dari dokumentasi resmi bootstrap dengan modifikasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ url("img/Ahmad_Tea_logo.png") }}" style="width: 100px"></a>
            <!--Logo picture-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "History") ? 'active' : '' }}" href="/history">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Product") ? 'active' : '' }} {{ ($title === "Create Product" ) ? 'active' : '' }}" href="/product">Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ ($title === "Contact Info" ) ? 'active' : '' }} {{ ($title === "Contact Form" ) ? 'active' : '' }} dropdown-toggle" href="/contact" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{ ($title === "Contact Info") ? 'active' : '' }}" href="/contactinfo">Contact Info</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item {{ ($title === "Contact Form") ? 'active' : '' }}" href="/contactform">Contact Form</a></li>
                        </ul>
                    </li>
                </ul>
                
                @if (session()->has('id-user'))  {{-- cek jika user telah login --}}
                <?php 
                    $nama_foto = null;
                    // ambil nama foto dari db
                    if (DB::table('user')->where('id_user', '=', session('id-user'))->first()) {    // cek user ada di db
                        $nama_foto = DB::table('user')->where('id_user', '=', session('id-user'))->first()->foto;
                    } else {    // user tidak ada di db, penyebab: user menghapus diri sendiri
                        $nama_foto = 'default.jpg';
                    } 
                ?>
                <div class="nav-item dropdown pe-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle pe-2" src="/foto user/{{$nama_foto}}" height="50px" alt="">
                        {{ session('username')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/logout">Log out</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/manage_user/{{session('id-user')}}/update">Manage My Profile</a></li>
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    </ul>
                </div>
                @else   {{-- belum login --}}
                <div>
                    <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"><b>Login</b></a>
                </div>
                @endif
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->
    @yield('content')
    <!-- FOOTER START -->
    <footer class="bg-light text-center text-lg-start position:fixed">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Kelompok 2<br />
            <p class="text-dark">© 2022 Copyright</p>
        </div>
    </footer>
    <!--FOOTER END-->
</body>
</html>