@extends('front.layout')
@section('content')


<div class="container-fluid" style="background: beige;display:flow-root;">
    <h1 class="text-center mt-5 mb-5">Hotels And Resorts</h1>
    <div class="row">

        <div class="col-md-6 my-4">
            <div class="texi_wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img class="tex_img mx-2 my-2" src="{{asset('template/images/hotel1.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h5 class="texi_model mt-4"><strong>Name</strong>Honda Crv</h5>
                        <h5 class="texi_model"><strong>Discription</strong>Akash</h5>
                        <h5 class="texi_model"><strong>Location</strong> 9750900003</h5>
                        <h5 class="texi_model"><strong>Price</strong> hp 01 s 5252</h5>
                        <p class="texi_model"><strong>Contact</strong> 1000/Hour</p>
                        <button class="btn-primary mr-5 py-1 mb-2 px-2 rounded btn_texi ">Book Now</button>
                        <p class="rating_texi">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-6 my-4">
            <div class="texi_wrap">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img class="tex_img mx-2 my-2" src="{{asset('template/images/hotel2.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h5 class="texi_model mt-4"><strong>Name</strong>Honda Crv</h5>
                        <h5 class="texi_model"><strong>Discription</strong>Akash</h5>
                        <h5 class="texi_model"><strong>Location</strong> 9750900003</h5>
                        <h5 class="texi_model"><strong>Price</strong> hp 01 s 5252</h5>
                        <p class="texi_model"><strong>Contact</strong> 1000/Hour</p>
                        <button class="btn-primary mr-5 py-1 mb-2 px-2 rounded btn_texi ">Book Now</button>
                        <p class="rating_texi">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection