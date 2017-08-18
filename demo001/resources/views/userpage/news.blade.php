@extends('userpage.main')
@section('title', 'News')
@section('content')

    <div class="newsPicture">
        <img src="{{asset('web-comp/y-news.JPG')}}" style="width: 100%">
        <div class="newsDescription">
            <h4>NEWS & EVENTS</h4>
        </div>
    </div>
    <div class="jumbotron">
        <div class="newAndEvent">
            <h3>NEWS & EVENTS</h3>
            <hr>
        </div>

        <div class="headline">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="headlineImg">
                            <img src="{{asset('web-comp/frieght_forward.jpg')}}" alt="frieght_forward">
                            <p>Docker Basic - With AWS EC2 Container </p>
                            <span class="glyphicon glyphicon-time"> 2 months ago</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="headlineImg">
                            <img src="{{asset('web-comp/air-logistic.jpg')}}" alt="air-logistic">
                            <p>Introducing The All New Trello Business</p>
                            <span class="glyphicon glyphicon-time"> 1 month ago</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="headlineImg">
                            <img src="{{asset('web-comp/sea-port.jpg')}}" alt="sea-port">
                            <p>Basic Docker Setup with Openshift</p>
                            <span class="glyphicon glyphicon-time"> 4 months ago</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="headlineImg">
                            <img src="{{asset('web-comp/export_brokerage.jpg')}}" alt="export_brokerage">
                            <p>Getting prepared for learning Angular 2</p>
                            <span class="glyphicon glyphicon-time"> 2 months ago</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="headlineImg">
                            <img src="{{asset('web-comp/intermodal_main.jpg')}}" alt="intermodal_main">
                            <p>PHP 7 is coming - It will gonna fly high</p>
                            <span class="glyphicon glyphicon-time"> 1 years ago</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="headlineImg">
                            <img src="{{asset('web-comp/port-logistic.jpg')}}" alt="port-logistic">
                            <p>Introduction to MEAN Stack</p>
                            <span class="glyphicon glyphicon-time"> 2 years ago</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection