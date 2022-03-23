
@extends('front.layout')


@section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">Testimonials</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Testimonials</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
    <!-- Testimonials-section start -->
    <div class="bg-default space-medium">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="row">
                    <!-- Testimonials-one-start -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="testimonial-block">
                            <div class="testimonial-img"><img src="{{asset('template/images/multi1.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                            <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                            <div class="testimonial-content">
                                <h4>Aryan Negi</h4>
                                <span class="location">Rampur</span>
                                <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                                <div>
                                    <p class="testimonial-text">“I love this tour. We have enough time to fully experience the Rampur. I have the opportunity to show my region, thank you" </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials-one-close -->
                    <!-- Testimonials-two-start -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="testimonial-block">
                            <div class="testimonial-img"><img src="{{asset('template/images/multi3.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                            <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                            <div class="testimonial-content">
                                <h4>Ajit Verma</h4>
                                <span class="location">Kullu-manali</span>
                                <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                                <div>
                                    <p class="testimonial-text">“You were an excellent Travel Agency for us! It was invaluable trip to kullu-manali & You considered our unique needs, thank you ”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials-two-start -->
                    <!-- Testimonials-three-start -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="testimonial-block">
                            <div class="testimonial-img"><img src="{{asset('template/images/multi8.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                            <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                            <div class="testimonial-content">
                                <h4>Samrat Chauhan</h4>
                                <span class="location">Rohru</span>
                                <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                                <div>
                                    <p class="testimonial-text">"It was a mindblowing tour full of fun and exitement.The arrangements are perfect. Definately recomend Himachal Tours"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials-three-close -->
                </div>
            </div>
            <!--  -->
            
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>

    @endsection
 