<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pragati+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <script src="{{asset('js/homepage.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/home.css')}}">

    {{--Social Media button--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
        <div class="cover-img">
            <img src="{{asset('image/cover-image.jpg')}}">
        </div>

        <nav class="navbar ">
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" style="background-color: inherit">About Us</a>
                    </li>
                    <li>
                        <a href="#">Product & Service</a>
                    </li>
                    <li>
                        <a href="#">Quote Request</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="logo">
            <span style="background-color: yellow">Y</span>
            <span style="background-color: dodgerblue">S</span>
            <span style="background-color: blue">L</span>
            <p>Yellow Sea Logistics</p>
        </div>

        <div class="page-description">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>

        <div class="btnQuoteRequest">
            <div class="btn btn-warning">Quote Request</div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="about">
                <h2>About <span style="color: yellow"> Yellowsea Logistic</span></h2>

                <p>Yellow Sea Logistics offers the supports for the goods transportation both locally and
                globally such as Real Freight, Intermodal, Air Freight, Ocean Freight, Custom Broker, and Warehousing Distribution.
                </p>

                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                    literature from 45 BC, making it over 2000 years old.
                </p>
            </div>

            <div class="aboutImage">
                <img src="{{asset('image/about-imge.png')}}">

                <div class="logo">
                    <span style="background-color: yellow">Y</span>
                    <span style="background-color: dodgerblue">S</span>
                    <span style="background-color: blue">L</span>
                    <p style="font-size: 13px;">Yellow Sea Logistics</p>
                </div>
            </div>

        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-service">
                        <h2>Product & Service</h2>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <h3 style="color: blue">Intermodal Service</h3>

                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                    </p>

                    <p>
                        Richard McClintock, a Latin professor at Hampden-Sydney College in
                        Virginia, looked up one of the more obscure Latin words, consectetur,
                        from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('image/about-imge.png')}}" style="width: 100%; height: 250px">
                </div>
            </div>

            <hr style="width: 100px; border: 1px solid #ffffb3; text-align: center; margin-bottom: 50px">

            <div class="row">

                <div class="col-md-4">
                    <img src="{{asset('image/about-imge.png')}}" style="width: 100%; height: 250px">
                </div>

                <div class="col-md-8">
                    <h3 style="color: blue">Frieght Forwarding</h3>

                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                    </p>

                    <p>
                        Richard McClintock, a Latin professor at Hampden-Sydney College in
                        Virginia, looked up one of the more obscure Latin words, consectetur,
                        from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source.
                    </p>
                </div>

            </div>

            <hr style="width: 100px; border: 1px solid #ffffb3; text-align: center; margin-bottom: 50px">

            <div class="row">
                <div class="col-md-8">
                    <h3 style="color: blue">Intermodal Service</h3>

                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                    </p>

                    <p>
                        Richard McClintock, a Latin professor at Hampden-Sydney College in
                        Virginia, looked up one of the more obscure Latin words, consectetur,
                        from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('image/about-imge.png')}}" style="width: 100%; height: 250px">
                </div>
            </div>

            <hr style="width: 100px; border: 1px solid #ffffb3; text-align: center; margin-bottom: 50px">

            <div class="row">

                <div class="col-md-4">
                    <img src="{{asset('image/about-imge.png')}}" style="width: 100%; height: 250px">
                </div>

                <div class="col-md-8">
                    <h3 style="color: blue">Frieght Forwarding</h3>

                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC.
                    </p>

                    <p>
                        Richard McClintock, a Latin professor at Hampden-Sydney College in
                        Virginia, looked up one of the more obscure Latin words, consectetur,
                        from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source.
                    </p>
                </div>

            </div>

            <div class="footer-image">
                <div class="image-footer">
                    <img src="{{asset('image/image-footer.png')}}">
                </div>
                <div class="footer-description">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="bntFooter">
                    <div class="btn btn-warning">Quote Request</div>
                </div>
            </div>

            <div class="follow-us">
                <h3>Follow Us</h3>
                <div class="socialButton">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>

        </div>
    </div>

    <div class="footer">

        <div class="menu-footer">
            <a href="#">About Us</a>
            <a href="#">Quote Request</a>
            <a href="#">Product & Service</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="copyRight">
            <p>&#169; 2017 Yellow Sea Logistics. All rights reserved Designed by Flexitech.</p>
        </div>

    </div> <!--end class resturantFooter-->


</body>