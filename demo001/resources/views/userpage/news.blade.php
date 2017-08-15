@extends('userpage.main')
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
                    <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
                        <h3>Headlines</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection