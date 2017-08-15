@extends('userpage.main')
@section('content')

    <div class="contactusPicture">
        <div class="jumbotron"></div>
    </div>
    <div class="contactusHeader">
        <h2 class="customHeaderStyle">CONTACT US</h2>
        <hr>
        <div class="container">
            <p>
                YELLOW SEA LOGISTICS offers the supports for the goods transportation
                both locally and globally such as Rail Freight, Intermodal, Air Freight,
                Ocean Freight, Custom Broker, and Warehousing/Distribution.
            </p>
        </div>
    </div>
    <div class="googleButton">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="glyphicon glyphicon-earphone" style="margin-left: 150px; color: #ffcc00; font-size: 50px"></div>
                    <h4><b>Any Question?</b></h4>
                    <p>+855 61 333 117 <br>
                        +855 61 333 500
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="glyphicon glyphicon-envelope" style="margin-left: 150px; color: #ffcc00; font-size: 50px"></div>
                    <h4><b>Write Us A Message</b></h4>
                    <a href="#">
                        <p>csmng@yellowsea.asia</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="glyphicon glyphicon-map-marker" style="margin-left: 150px; color: #ffcc00; font-size: 50px"></div>
                    <h4><b>Find Us On Map</b></h4>
                    <p>#G26, Street Gold, Sangkat Tumnub Terk, Khan Chamkarmon, Phnom Penh</p>
                </div>
            </div>
        </div>
    </div>
    <div class="completeInformation">
        <div class="jumbotron">
            <div class="contactusHeader">
                <h2 class="customHeaderStyle">HOW CAN WE HELP YOU?</h2>
                <hr>
                <p style="width: 50%; margin: 0 auto">
                    We love to hear from you! So leave us your inquiry and we will get back to you as soon as we got your message.
                </p>
            </div>
            <div class="userInfo">
                <div class="container">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="name*">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email*">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone number*">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 50px">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="description*"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="quoteSubmit text-center">
                            <button class="btn btn-warning btn-lg " style="width: 150px">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection