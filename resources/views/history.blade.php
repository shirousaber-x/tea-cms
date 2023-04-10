@extends('layouts.navbar')
@section('content')
<!--CONTENT START-->
<div class="container-lg" id="content">

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">HISTORY</h2>
        </div>
    </div>

    <div class="container content">

        <!--Video Start-->
        <div class="container bcontent py-4">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" width="560" height="315"
                            src="https://www.youtube.com/embed/pVwKuATd4U4" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--Video End-->

        <!--HISTORY START-->
        <div class="container bcontent py-4">
            <div class="card text-justify" style="border-radius: 2em; height: 310;">
                <div class="row">
                    <div class="col-sm-5">
                        <a target="_blank" href="{{ url('img/Mr Rahim Afshar.jpg') }}">
                            <div class="image">
                                <img class="card-img-top" src="{{ url('img/Mr Rahim Afshar.jpg') }}"
                                    alt="Mr. Rahim Afsar - Ahmad Tead Chairman" width="500px" height="308px"
                                    style="border-radius: 2em;">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h6>The Ahmad Tea Story</h6>
                            <h4 class="card-title">COMPANY STORY</h4>
                            <p align="justify">In 1979, company founder, Mr Rahim Afshar decides to enter the tea
                                trade, building
                                upon his family's history
                                and knowledge in packing and blending tea. He is inspired by a dream experienced by
                                family friend and
                                mentor, Professor A.H.
                                Ganjavian.</p>
                            <p align="justify">21 Years later, in 2000 by the turn of the Millennium Ahmad Tea is
                                one of the top 5
                                leading tea brands across Russia,
                                Ukraine and the Middle East. This is driven by first rate quality control from the
                                Tea Tasting
                                Department, headed by William
                                Manning.</p>
                            <p align="justify">After that in 2019, Ahmad Tea picks up more Great Taste Awards,
                                taking the company’s
                                awards tally to a
                                total of 22 since first entering in 2015.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--HISTORY END-->

        <!--VISI START-->
        <div class="container bcontent py-4">
            <div class="card" style="border-radius: 2em; margin-right: auto;">
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <a target="_blank" href="{{ url('img/Tea Drinkers.jpg') }}">
                            <div class="image">
                                <img class="card-img-top" src="{{ url('img/Tea Drinkers.jpg') }}" alt="Tea Drinkers" width="550px"
                                    height="310px" style="border-radius: 2em;">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h6>Our Purpose</h6>
                            <h4 class="card-title">COMPANY VISION</h4>
                            <p align="justify">We inspire tea drinkers with our passion and commitment to quality.
                                We honour the
                                role played by a cup of
                                Ahmad Tea, from everyday moments of quiet reflection to times of joyous celebration
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--VISI END-->

        <!--MISI START-->
        <div class="container bcontent py-4">
            <div class="card" style="border-radius: 2em;">
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <a target="_blank" href="{{ url('img/Ahmad Tea Factory.jpg') }}">
                            <div class="image">
                                <img class="card-img-top" src="{{ url('img/Ahmad Tea Factory.jpg') }}" alt="Ahmad Tea Factory"
                                    width="500px" height="320px" style="border-radius: 2em;">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h6>Our Action</h6>
                            <h4 class="card-title">COMPANY MISSION</h4>
                            <p align="justify">At Ahmad Tea we are guided by a fervent belief in our responsibility
                                to give
                                unconditionally, with
                                kindnessand respect. To fulfil that responsibility, we offer this kindness to people
                                and communities
                                all over the world. It
                                is our mission to act in such a way that we inspire kindness in others, too.</p>
                            <p align="justify">Our task can never be truly complete, so we are constantly seeking
                                new ways for
                                compassion and ethical
                                values to be applied in our business practices so we can give back to those who need
                                it most. Our CSR
                                report for 2020 shows
                                the highlights of our community, sustainability and responsible sourcing work in
                                2020.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MISI END-->
    </div>

    <!--BUTTON TO TOP-->
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
        data-abc="true"></a>

</div>
<!--CONTENT END-->

@endsection