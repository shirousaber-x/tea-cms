@extends('layouts.navbar')
@section('content')
<!--CONTENT START-->
<div class="container-lg" id="content">

<div class="row">
    <div class="col-md-12 d-flex justify-content-center py-4">
        <h2 class="another" style="color: white; text-decoration: underline;">HOME</h2>
    </div>
</div>

<div class="container content">

    <!--Video Start-->
    <div class="container bcontent py-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" width="560" height="315"
                        src="{{ url('https://www.youtube.com/embed/pVwKuATd4U4') }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Video End-->

    <!--THE AHMAD TEA STORY-->
    <div class="container bcontent py-4">
        <div class="card text-justify" style="border-radius: 2em; height: 330;">
            <div class="row">
                <div class="col-sm-5">
                    <a target="_blank" href="{{ url('img/tea artistry.jpg') }}">
                        <div class="image">
                            <img class="card-img-top" src="{{ url('img/tea artistry.jpg') }}"
                                alt="Mr. Rahim Afsar - Ahmad Tead Chairman" width="500px" height="328px"
                                style="border-radius: 2em;">
                        </div>
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h6>THE AHMAD TEA STORY</h6>
                        <h4 class="card-title">A FAMILY COMPANY BUILT ON VALUESY</h4>
                        <p align="justify">We are a family company founded and run on family values. 
                            That means consistently working together year after year, never compromising 
                            on our beliefs and always being guided by our shared goals. We only work with 
                            the finest tea gardens around the world and we view our tea growers as a 
                            natural extension of the Ahmad Tea family. Every blend is sampled seven times 
                            during the journey from being plucked to your cup – a process overseen by our 
                            Chairman, Mr Rahim Afshar, and his team of world-leading Tea Masters. Nothing 
                            leaves our tasting room until we are sure it is an extraordinary cup of tea, 
                            destined to inspire tea lovers everywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--THE AHMAD TEA STORY-->

    <!-- OUR FACILITES -->
    <div class="container bcontent py-4">
        <div class="card text-justify" style="border-radius: 2em; height: 330;">
            <div class="row">
                <div class="col-sm-5">
                    <a target="_blank" href="{{ url('img/factory.jpg') }}">
                        <div class="image">
                            <img class="card-img-top" src="{{ url('img/factory.jpg') }}"
                                alt="Mr. Rahim Afsar - Ahmad Tead Chairman" width="500px" height="328px"
                                style="border-radius: 2em;">
                        </div>
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h6>OUR FACILITES</h6>
                        <h4 class="card-title">PRODUCING PERFECT TEA BLENDS AROUND THE WORLD</h4>
                        <p align="justify">Our flagship site in Ras Al Khaimah, United Arab Emirates, is Ahmad Tea’s 
                            global production facility, and our pinnacle of best in class production principles and 
                            practices. Opened in 2012, the facility supplies bulk blended teas to other Ahmad Tea factories 
                            around the world and annual production exceeds 14 million kg of tea. Bulk packing production is 
                            fully automated, and with high speed dispatch we are able to produce a peak output of 180 
                            containers per month, which is a blending capacity of 100,000kg. There is on-site accommodation 
                            for over 250 people to support our valued workforce.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR FACILITES -->

    <!-- GREAT TASTE AWARD WINNERS -->
    <div class="container bcontent py-4">
        <div class="card text-justify" style="border-radius: 2em; height: 330;">
            <div class="row">
                <div class="col-sm-5">
                    <a target="_blank" href="{{ url('img/story_award_winning.png') }}">
                        <div class="image">
                            <img class="card-img-top" src="{{ url('img/story_award_winning.png') }}"
                                alt="Mr. Rahim Afsar - Ahmad Tead Chairman" width="500px" height="328px"
                                style="border-radius: 2em;">
                        </div>
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h6>GREAT TASTE AWARD WINNERS</h6>
                        <h4 class="card-title">AWARD-WINNING TEA</h4>
                        <p align="justify">Our intent is to create blends that deliver a magical 
                            cup of tea. When that blend wins a much-revered Great Taste Award, 
                            there is no one more proud than us. Founded in 1994 and run by the 
                            Guild of Fine Food, the awards are the gold standard for the finest 
                            food and drink around the world. Since 2015, a number of our tea blends 
                            have been selected for awards and in 2018, we were given the distinguished 
                            honour of being named a Great Taste Producer. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GREAT TASTE AWARD WINNERS -->

    <!-- MR. RAHIM AFSHAR -->
    <div class="container bcontent py-4">
        <div class="card text-justify" style="border-radius: 2em; height: 500px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="quote">
                        <div class="line"></div>
                        <div class="zoom-in">
                            <a href="{{ url('img/rahim-afshar.jpg') }}"><img src="{{ url('img/rahim-afshar.jpg') }}" alt="Rahim Afshar" /></a>
                        </div>
                        <div class="text-quote">
                            “I will not sell anything that I would not drink at home.”
                            <br />
                            - M.R Rahim Afshar
                        </div>
                    </div>

                    <p style="padding: 0 70px 0 70px; text-align: center; position: relative; bottom: 30px">
                        This refusal to accept anything but the finest teas – primarily in terms of their flavour, aroma, 
                        strength and consistency continues to guide our tasters and inspire our entire company.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- MR. RAHIM AFSHAR -->
</div>

<!--BUTTON TO TOP-->
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
    data-abc="true"></a>

</div>
<!--CONTENT END-->
@endsection