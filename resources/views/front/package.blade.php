@extends('front.layout')

@section('content')
<div class="container-fluid margin_pak">
    <div class="pakwidth">
        <div class="row">
            @foreach ($packages as $key=>$package)


            <div class="col-md-6 col-sm-12">
                <div class="row my-5 ml-0 border_pak">
                    <div class="col-md-5">
                        <img src="{{ asset('storage/'.$package->image_id) }}" class="mt-4 ml-2 pak_img" alt="">
                    </div>

                    <div class="col-md-7">
                        <h5 class="mt-5 text-primary pak_head">{{$package->packagename}}</h5>
                        <p class="pak_dur">{{$package->duration}}</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pakul">



                                    <li class="packli"><button class="btn btn-warning text-dark text-bold" data-toggle="collapse" data-target="#day1{{$key}}"><strong>View Itenary</strong></button>
                                        <div id="day1{{$key}}" class="mx-2 collapse">
                                            {{$package->itenary}}
                                        </div>
                                    </li>
                                   


                                </ul>
                            </div>

                        </div>

                        <hr class="my-4">
                        <ul class="uliconpakage" style="list-style: none;">
                            <li class="mx-4 icon_li"><i class="fa fa-plane"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-binoculars"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-hotel"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-car"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-coffee"></i></li>

                        </ul>

                        <h3 class="text-danger">{{$package->rates}}/person
                        </h3>

                        
                         <button type="button"  name="package" data-id='{{$package->id}}' data-type='package' class="book_now btn-primary mr-5 py-1 mb-2 px-2 rounded btn_texi mb-4" data-toggle="modal" data-target="#enquiryForm">
                            Enquiry Now
                        </button>
                    </div>
                </div>
            </div>

            @endforeach


            <!-- form packages--->
            <!--    <div class="col-md-4 col-sm-12" id="bigform">
                <div class="container mt-5 bg_pakform">
                    <div class="form_head">
                        <h5 class="text-white text-center mt-2">Talk to our Holiday Expert
                        </h5>
                        <h3 class="text-center text-white expert"><i class="fa fa-phone-square" style="color:red"></i>+91 8894292008</h3>
                    </div>
                    <h5 class="text-center mt-4 mb-2 text-primary">CUSTOMIZE AND BOOK NOW</h5>
                    <p class="text-center mt-2 mb-3 p_cust">Enter your contact details and we will plan the best holiday
                        suiting all your requirements.
                    </p>
                    <form action="" method="post" class="w-75 mx-auto">

                        <input class="form-control mt-3 mb-3" type="text" name="name" id="name" placeholder="Enter Your Name" required>

                        <input class="form-control mt-3 mb-3" type="email" name="mail" id="mail" placeholder="Entre Your Email" required>

                        <input class="form-control mt-3 mb-3" type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" required>

                        <input class="form-control mt-3 mb-3" type="text" name="city" id="city" placeholder="Enter Your City" required>

                        <input class="form-control mt-3 mb-3" type="text" name="destination" id="destination" placeholder="Enter Your Destination">

                        <button class="btn-info w-50 mb-5 mt-3 mx-auto d-block btn_pak">Submit</button>

                    </form>
                </div>
            </div> -->




            <!-- second package -->

            <!-- for small screen -->
            <!--      <div class="col-sm-12" id="smallform">
                <div class="container mt-5 bg_pakform">
                    <div class="form_head">
                        <h5 class="text-white text-center mt-2">Talk to our Holiday Expert
                        </h5>
                        <h3 class="text-center text-white expert"><i class="fa fa-phone-square" style="color:red"></i>+91 8894292008</h3>
                    </div>
                    <h5 class="text-center mt-4 mb-2 text-primary">CUSTOMIZE AND BOOK NOW</h5>
                    <p class="text-center mt-2 mb-3 p_cust">Enter your contact details and we will plan the best holiday
                        suiting all your requirements.
                    </p>
                    <form action="" method="post" class="w-75 mx-auto">

                        <input class="form-control mt-3 mb-3" type="text" name="name" id="name" placeholder="Enter Your Name" required>

                        <input class="form-control mt-3 mb-3" type="email" name="mail" id="mail" placeholder="Entre Your Email" required>

                        <input class="form-control mt-3 mb-3" type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" required>

                        <input class="form-control mt-3 mb-3" type="text" name="city" id="city" placeholder="Enter Your City" required>

                        <input class="form-control mt-3 mb-3" type="text" name="destination" id="destination" placeholder="Enter Your Destination">

                        <button class="btn-info w-50 mb-5 mt-3 mx-auto d-block btn_pak">Submit</button>

                    </form>
                </div>
            </div> -->


        </div>
        @endsection