<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

        <!-- Styles -->
        <script src="{{asset('userpage')}}"></script>
        <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>
        <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/home.css')}}">

        {{--Social Media button--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

    {{--NavigationBar--}}
    <nav class="navbar navbar-fixed-top">
        <div class="navbar-header " >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                <span class="icon-bar" style="background-color: silver"></span>
                <span class="icon-bar" style="background-color: silver"></span>
                <span class="icon-bar" style="background-color: silver"></span>
            </button>

            <div class="logo">
                <img src="{{asset('web-comp/yellow-sea-logo-white-no-text.png')}}" alt="logo">
                <p>Yellow Sea Logistics Co.,Ltd</p>
            </div>
        </div>



        <div class=" collapse navbar-collapse navbar-right " id="myNavbar" style="background-color:  #ffcc00;" >
            <ul class="nav navbar-nav">
                <li id="myList" class="hidden-xs ">
                    <a href="#"></a>
                </li>
                <li class="nav-item" >
                    <a class="navbar-link active" href="{{asset('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link" href="#">ABOUT US</a>
                </li>

                <li class="nav-item">
                    <a class="navbar-link" href="#">PRODUCT & SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link" href="{{asset('/news')}}">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link" href="{{asset('/quote request')}}">QUOTE REQUEST</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-link" href="{{asset('/contact us')}}">CONTACT US</a>
                </li>
            </ul>
        </div>

    </nav>

    @yield('content')

    {{--Follow us social button--}}
    <div class="jumbotron">

        <div class="follow-us">
            <h3>Follow Us</h3>
            <hr style="width: 150px; border: 1px solid #ffd11a; text-align: center;">
            <div class="socialButton">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>

    </div>

    {{--Footer--}}
    <div class="footer">

        <div class="menu-footer">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Product & Service</a>
            <a href="#">News</a>
            <a href="#">Quote Request</a>
            <a href="#">Contact Us</a>
        </div>
        <hr style="text-align: center; width: 40%; border: none; background-image: linear-gradient( to right, transparent, #e8e8e8, transparent); height: 1px">
        <div class="copyRight">
            <p>&#169; 2017 Yellow Sea Logistics. All rights reserved Designed by <span style="color: white"> Flexitech.</span></p>
        </div>

    </div> <!--end class resturantFooter-->

    </body>