@extends('front.layout')

@section('content')
<!-- hero-section start -->

<div class="count_cover">

    <div class="numberCircle">
        <h5 class="text-center mt-2 resize_count">Visitor's</h5>

        <h5 class="text-center resize_count">{{ $countVisitor ?? 0 }}</h5>
    </div>
</div>
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="hero-section-caption pinside40">
                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <button class="googlebtn_wrap p-2 mt-3 d-block mx-auto"> <a href="{{ url('auth/google') }}" class="googlebtn">
                                    <i class="fa fa-google" aria-hidden="true"></i> Get enquiry by google
                                </a>
                            </button>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <i class="fa fa-phone text-center d-block phoneicon"></i>
                            <p class="text-center phonetext">Call Us</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <i class="fa fa-envelope text-center d-block phoneicon"></i>
                            <p class="text-center phonetext">Mail Us</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            @if(Session::has('msg'))
                            <p class="alert alert-success">{{ Session::get('msg') }}</p>
                            @endif
                        </div>
                    </div>


                </div>
            </div>

            <div class="wrapsign">

            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="booking-form mt-5 mb-5">
                    <div class="form-header">
                        <h4 class='text-white'>Get call from our expert's</h4 class='text-white'>
                    </div>
                    <form>
                        <div class="form-group"> <input class="form-control" type="text" placeholder="Country, ZIP, city..."> <span class="form-label">Destination</span> </div>



                        <div class="form-group"> <input class="form-control" type="email" placeholder="Enter your Email"> <span class="form-label">Email</span> </div>


                        <div class="form-group"> <input class="form-control" type="tel" placeholder="Enter you Phone"> <span class="form-label">Phone</span> </div>

                        <div class="form-btn"> <button class="mb-5 submit-btn" disabled><a href="/package" class="text-white">Get Call</a></button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero-section close -->
<div class="spaceslide">
    <div class="container-fluid">
        <h3 class="whyhead mb-5 text-center">Himachal Tours</h3>
        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating float-left margin_rightarr custom_control" href="#destin" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating float-right margin_leftarr custom_control" href="#destin" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- about-section start -->
        <div class="container">
            <!--Carousel Wrapper-->
            <div id="destin" class="carousel slide carousel-multi-item" data-ride="carousel">





                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#destin" data-slide-to="0" class="active"></li>
                    <li data-target="#destin" data-slide-to="1"></li>
                    <li data-target="#destin" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    @if(!empty($singleArr3))
                    @foreach ($singleArr3 as $key => $package)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <div class="row">
                            @if(!empty($package))
                            @foreach ($package as $pack)
                            <div class="col-md-4">
                                <div class="card-body box_sliding">
                                    <h4 class="card-title text_sizeform">{{$pack->packagename}}</h4>
                                </div>
                                <div class="card mb-2">
                                    <a href="texi_service"><img class="card-img-top slider_main3" src="{{ '/'.$pack->image_id }}" alt="Card image cap"></a>

                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!--/.First slide-->



            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->

    </div>
</div>
</div>
<hr class="my-5">
<div class="spaceslide2 w-100 m-0 bg-info">
    <div class="container-fluid">
        <h3 class="whyhead2 mb-5 text-center">Premium Tours</h3>
        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating float-left margin_rightarr custom_control2" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating float-right margin_leftarr custom_control2" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- about-section start -->
        <div class="container">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">





                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    @if(!empty($singleArr3))
                    @foreach ($singleArr3 as $key => $package)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <div class="row">
                            @if(!empty($package))
                            @foreach ($package as $pack)
                            <div class="col-md-4">
                                <div class="card-body box_sliding">
                                    <h4 class="card-title text_sizeform">{{$pack->packagename}}</h4>
                                </div>
                                <div class="card mb-2">
                                    <a href="texi_service"><img class="card-img-top slider_main3" src="{{ '/'.$pack->image_id }}" alt="Card image cap"></a>

                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!--/.First slide-->

                <!--Second slide-->

                <!--/.Third slide-->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->

    </div>
</div>
</div>



<div class="bg-default space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h3 class="whyhead">Why Choose Our Travel Agency?</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- feature start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="feature-block">
                    <div class="feature-icon"><i class="fa fa-building"></i></div>
                    <div class="feature-content">
                        <h3 class="feature-title">Accommodation</h3>
                        <p>Cheap rooms available with best locationa and services</p>
                    </div>
                </div>
            </div>
            <!-- feature close -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="feature-block">
                    <div class="feature-icon"><i class="fa fa-plane"></i></div>
                    <div class="feature-content">
                        <h3 class="feature-title">Transportation</h3>
                        <p>Varities of vehicles available with supportive staff </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="feature-block">
                    <div class="feature-icon"><i class="fa fa-star"></i></div>
                    <div class="feature-content">
                        <h3 class="feature-title">Easy Trip Planning</h3>
                        <p>Find and get your itinerary to your email an explore your tour</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-section close -->

<!-- texi service start -->

<div class="spaceslide2 w-100 m-0 bg-inf">
    <div class="container-fluid">
        <h3 class="whyhead2 mb-5 text-center">Texi Services</h3>
        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating float-left margin_rightarr custom_control2" href="#Carslider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating float-right margin_leftarr custom_control2" href="#Carslider" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- about-section start -->
        <div class="container">
            <!--Carousel Wrapper-->
            <div id="Carslider" class="carousel slide carousel-multi-item" data-ride="carousel">





                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#Carslider" data-slide-to="0" class="active"></li>
                    <li data-target="#Carslider" data-slide-to="1"></li>
                    <li data-target="#Carslider" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    @if(!empty($singleArr))
                    @foreach ($singleArr as $key => $texi)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <div class="row">
                            @if(!empty($texi))
                            @foreach ($texi as $tex)
                            <div class="col-md-4">
                                <div class="card-body box_sliding">
                                    <h4 class="card-title text_sizeform">{{$tex->model}}</h4>
                                </div>
                                <div class="card mb-2">
                                    <a href="texi_service"><img class="card-img-top slider_main3" src="{{ '/'.$tex->image }}" alt="Card image cap"></a>

                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- texi service ends -->

<!-- hotel reservation -->
<div class="spaceslide2 bg-info">
    <div class="container-fluid">
        <h3 class="whyhead2 mb-5 text-center">Hotels And Resorts</h3>
        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating float-left margin_rightarr custom_control2" href="#hotelslider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating float-right margin_leftarr custom_control2" href="#hotelslider" data-slide="next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- about-section start -->
        <div class="container">
            <!--Carousel Wrapper-->
            <div id="hotelslider" class="carousel slide carousel-multi-item" data-ride="carousel">





                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#hotelslider" data-slide-to="0" class="active"></li>
                    <li data-target="#hotelslider" data-slide-to="1"></li>
                    <li data-target="#hotelslider" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    @if(!empty($singleArr2))
                    @foreach ($singleArr2 as $key => $hotel)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <div class="row">
                            @if(!empty($hotel))
                            @foreach ($hotel as $hot)
                            <div class="col-md-4">
                                <div class="card-body box_sliding">
                                    <h4 class="card-title text_sizeform">{{$hot->hotel}}</h4>
                                </div>
                                <div class="card mb-2">
                                    <a href="texi_service"><img class="card-img-top slider_main3" src="{{ '/'.$hot->image }}" alt="Card image cap"></a>

                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->

        </div>
    </div>
</div>

<!-- hotel ends -->


<!-- Destination-section-start -->

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h1 class="whyhead">Top Destinations</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- destination-one-start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="destination-img">
                    <a href="/package" class="imghover"><img src="{{asset('template/images/destination-1.jpg')}}" alt "Tour and Travel Agency - Responsive Website Template" class="img-responsive"></a>
                </div>
                <div class="destination-content">
                    <h3><a href="/package" class="destination-title">Kutub Minar</a></h3>
                </div>
            </div>
            <!-- destination-one-close -->
            <!-- destination-two-start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="destination-img imghover">
                    <a href="/package" class="imghover"><img src="{{asset('template/images/destination-2.jpg')}}" alt="" class="img-responsive"></a>
                </div>
                <div class="destination-content">
                    <h3><a href="/package" class="destination-title">Manali</a></h3>
                </div>
            </div>
            <!-- destination-two-close -->
            <!-- destination-three-start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="destination-img imghover">
                    <a href="/package"><img src="{{asset('template/images/destination-3.jpg')}}" alt="" class="img-responsive"></a>
                </div>
                <div class="destination-content">
                    <h3><a href="/package" class="destination-title">Rampur</a></h3>
                </div>
            </div>
            <!-- destination-three-close -->
        </div>
    </div>
</div>
<!-- Destination-section-close -->
<!-- Testimonials-section start -->
<div class="bg-default space-medium">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h1 class="whyhead">Our Happy Travelers Reviews</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Testimonials-one-start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="testimonial-block">
                    <div class="testimonial-img"><img src="{{asset('template/images/travel2.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                    <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                    <div class="testimonial-content">
                        <h4 class="text_review">drsheetal4u@gmail.com</h4>
                        <span class="location">Solang Valley</span>
                        <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                        <div>
                            <p class="testimonial-text">“Good team work and knowledge of work and field. They know how to treat a customer. They know how to serve a customer. They treated us as we are their families. So according to me they are best if anyone wants to go on a trip with their friends.... Thanks " </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials-one-close -->
            <!-- Testimonials-two-start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="testimonial-block">
                    <div class="testimonial-img"><img src="{{asset('template/images/travel4.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                    <div class="testimonial-user-img"><img src="template/images/uzer.jpg" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                    <div class="testimonial-content">
                        <h4 class="text_review">rahulsharma@gmail.com</h4>
                        <span class="location">Kullu-manali</span>
                        <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                        <div>
                            <p class="testimonial-text">“Truly a unique experience with The Himachal Tour. Everything about this team and offerings is absolutely wonderful. The facility, food,hotel,guide,driver surrounding, staff, activities all are one of the best. If you want to have a personalized , peacefu ”</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials-two-start -->
            <!-- Testimonials-three-start -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="testimonial-block">
                    <div class="testimonial-img"><img src="{{asset('template/images/travel6.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                    <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                    <div class="testimonial-content">
                        <h4 class="text_review">manisharoy81@gmail.com</h4>
                        <span class="location">Dharamshala</span>
                        <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                        <div>
                            <p class="testimonial-text">“It was an awesome pilgrimage tour. Me and my whole family went there. We enjoyed a lot. Arrangements were did very nicely and everything was well managed. I will recommend this to all my knows. We'll visit again soon.”</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials-three-close -->
        </div>
    </div>
</div>

@endsection