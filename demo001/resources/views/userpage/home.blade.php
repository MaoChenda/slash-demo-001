@extends('userpage.main')
@section('title', 'Landing Page')
@section('content')

{{--Animation--}}
    <div class="animation">

        {{--Slide animation--}}
        <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="slideCarousel" >
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="{{asset('web-comp/new-slide-3.jpg')}}" style="width: 100%;">

                        <div class="page-description">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally
                                such as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>
                        </div>

                    </div>

                    <div class="item">
                        <img src="{{asset('web-comp/new-slide-1.jpg')}}" style="width: 100%;">

                        <div class="page-description">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such
                                as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('web-comp/y-about-2.jpg')}}" style="width: 100%;">

                        <div class="page-description" style="width: 100%">
                            <p class="text-center">
                                By Ocean or Air, FCL or LCL, we believe that we are the one for you. We focus to offer the fast
                                and premium service, from Door to Door / Port to Port / Door to Port / Port to Door.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('web-comp/y-slide-3.jpg')}}" style="width: 100%;">

                        <div class="page-description" style="width: 100%">
                            <p class="text-center">
                                Storage is crucially important for your cargos asit is the starting point before bringing your cargos to the world or to your retails shop.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{asset('web-comp/y-slide-2.jpg')}}" style="width: 100%;">

                        <div class="page-description">
                            <p class="text-center">
                                YELLOW SEA LOGISTICS offers the supports for the goods transportation both locally and globally such
                                as Rail Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing/Distribution.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        {{--Button Quote Request--}}
        <div class="btnQuoteRequest" id="about">
            <div class="btn btn-warning hidden-sm hidden-xs">Quote Request</div>
        </div>
    </div> <!--end class animation-->

{{--About Section--}}
    <div class="jumbotron">
        <div class="aboutDescription">
            {{--<div class="aboutlink" id="about"></div>--}}
            {{--<div class="container">--}}
            <h3>About <span style="color: yellow"> Yellowsea Logistic</span></h3> <br>

            <p>Yellow Sea Logistics offers the supports for the goods transportation both locally and
            globally such as Real Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing Distribution.
            </p>

            <p>Based on our strong assets and facilities, we have been motivated to start our first service providing in 2016,
                and then with many more services from the start to the end. We would like our customers to rest assured and let
                us take care of the rest for you. We are new in term of a company, but we have a talented and experienced team
                here to ensure a high quality service being delivered and satisfied to our customers.
            </p>

            <p>We are doing our best as a responsible business partner and a customer focused service provider
                to bring value and solution to your business development as well as ours.﻿
            </p>
            {{--</div>--}}
        </div>

        <div class="aboutImage">
            <img src="{{asset('web-comp/truck-logistic.jpg')}}">
        </div>

    </div> <!--end class jumbotron in about section-->

{{--Homepage Feature--}}
    <div class="container">

        <div id="product-section" style="height: 50px"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="product-service">
                    <h3>PRODUCT & SERVICE</h3>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <br><h3 style="color: #02add8;margin-top: -10px">Intermodal Service</h3> <br>

                <p>
                    Our core product is to provide you the stable but qualified delivery service.
                    We have a station where you can easily drop your cargo and leave everything to us.
                    On top of that, we have the intermodal service to support you an all-in delivery
                    to/from your warehouse directly.
                </p> <br>

                <p>
                    We have a strong product designed as we have a warehouse combined with local intermodal service.
                    It will save you time, cost and security. Your cargos will delivered at the destination all at the same time.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img src="{{asset('image/intermodal-service-image.PNG')}}" style="width: 100%; height: 250px">
            </div>
        </div>

        <hr style="width: 100px; border: 1px solid #ffcc00; text-align: center; margin-bottom: 50px">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 frieght-forwarding">
               <br> <h3 style="color: #02add8;margin-top: -20px">Frieght Forwarding</h3> <br>

                <p>
                    By Ocean or Air, FCL or LCL, we believe that we are the one for you.
                    We focus to offer the fast and premium service, from Door to Door / Port to Port
                    / Door to Port / Port to Door.
                </p> <br>

                <p>
                    We design our service as per your individual requirements - from/to almost
                    anywhere you wish to ship your cargo in the globe. We handle them with Care and Responsibility.
                    Given your available time range, we will support you to present your cargos to any place of your
                    request with the cost effectiveness.
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 image-frieght-forwarding">
                <img src="{{asset('image/freight-forwarding-image.PNG')}}" style="width: 100%; height: 250px">
            </div>


        </div>

        <hr style="width: 100px; border: 1px solid #ffcc00; text-align: center; margin-bottom: 50px">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <br> <h3 style="color: #02add8;margin-top: -20px">Custom House Brokerage</h3> <br>

                <p>
                    For ease of doing your trading business,we urge to provide you -
                    Customs House Brokerage service supporting your exports and imports businesses.
                </p> <br>

                <p>
                    We will cover all the preparations of required documents, taxes/duties calculation
                    and payment, ensuring customs formality completion in the fast manner, so your cargo will be available as planned.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img src="{{asset('image/custom-house-brokerage-image.PNG')}}" style="width: 100%; height: 250px">
            </div>
        </div>

        <hr style="width: 100px; border: 1px solid #ffcc00; text-align: center; margin-bottom: 50px">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 wiredhousing">
                <h3 style="color: #02add8;margin-top: -20px">Wiredhousing and Distribution</h3> <br>

                <p>
                    Storage is crucially important for your cargos as it
                    is the starting point before bringing your cargos to the world or to your retails shop.
                </p> <br>

                <p>
                    We keep it a priority when it comes to this. That is why we have our own warehouse
                    which is standardize, highly maintained, and ideally safe. There is also our value added
                    service to distribute your wish-list cargo to you whether it is in a small or big volume. Add Comment
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 image-wiredhousing">
                <img src="{{asset('image/distribution-image.PNG')}}" style="width: 100%; height: 250px">
            </div>

        </div>

    </div> <!--end class container-->

{{--Footer image with background fix--}}
    <div class="footer-image">
        <div class="backgroundImage-footer"></div>
            <div class="page-description">
                <p class="text-center">
                    YELLOW SEA LOGISTICS offers the supports forthe goods transportation both
                    locally and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight,
                    Custom Broker, and Warehousing/Distribution.
                </p>
            </div>

            <div class="btnFooter">
                <div class="btn btn-warning">Quote Request</div>
            </div>
    </div>

@endsection