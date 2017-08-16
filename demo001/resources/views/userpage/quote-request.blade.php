@extends('userpage.main')
@section('title', 'Request Quote Form')
@section('content')

    <div class="quotePicture">
        <img src="{{asset('web-comp/y-quotation.JPG')}}" style="width: 100%">
        <div class="quoteDescription">
            <h3>QUOTE REQUEST</h3>
        </div>
    </div>
    <div class="quoteRequestForm">
        <h3 class="customHeaderStyle">QUOTES REQUEST FORM</h3>
        <hr>
    </div>
    <div class="container">
        <div class="jumbotron" style=" margin-bottom: 50px;">

            <div class="formContactUs">
                <form >
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <label for="receipt">
                                Place of Receipt
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="receipt" id="receipt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="delivery">
                                Place of Delivery
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="delivery" id="delivery">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="volumeDetails">
                                Cargo Volume Details
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 ">
                            <div class="flc" style="margin-bottom: 15px">
                                FLC:
                                <input type="text" style="width: 70px; margin-bottom: 10px;border: 1px solid gainsboro; border-radius: 5px">
                                x20' &nbsp;&nbsp;
                                <input type="text" style="width: 70px;border: 1px solid gainsboro; border-radius: 5px">
                                x40' &nbsp; &nbsp;
                                <input type="text" style="width: 70px;border: 1px solid gainsboro; border-radius: 5px">
                                x50' &nbsp;&nbsp;
                            </div>
                            <div class="lcl">
                                LCL:
                                <input type="text" style="width: 70px;margin-bottom: 15px;border: 1px solid gainsboro; border-radius: 5px">
                                Length(mm) &nbsp;&nbsp;
                                <input type="text" style="width: 70px;;border: 1px solid gainsboro; border-radius: 5px">
                                Width(mm) &nbsp; &nbsp;
                                <input type="text" style="width: 70px;border: 1px solid gainsboro; border-radius: 5px">
                                Height(mm) &nbsp;&nbsp;
                                <input type="text" style="width: 70px;border: 1px solid gainsboro; border-radius: 5px">
                                Weight(kgs)
                            </div>

                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="commoity">
                                Commodity
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="commoity" id="commoity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="cargoWeight">
                                Cargo Weight
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <input class="form-control" type="text" name="cargoWeight" id="cargoWeight">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="margin-left: -20px">
                            KGs per container
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="remark">
                                Remark
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <textarea class="form-control" name="remark" id="remark" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="company">
                                Your Company
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="company" id="company">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="country">
                                Country
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="country" id="country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="contact">
                                Contact Person
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="contact" id="contact">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="email">
                                Email Address
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
                            <label for="phoneNumber">
                                Phone Number
                                <span style="color: #ffcc00">*</span>
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <input class="form-control" type="text" name="phoneNumber" id="phoneNumber">
                        </div>
                    </div>
                    <div class="quoteSubmit text-center">
                        <button class="btn btn-warning btn-lg ">Submit Your Quote</button>
                    </div>

                </form>

            </div>

        </div>
    </div>

@endsection