@extends('front.layout')

@section('content')


    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">About Us</h1>
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
                        <li><a href="/" class="linkabout">Home</a></li>
                        <li><a href="/aboutus" class="linkabout"></a>About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
    <!-- about-section start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1 class="about-title">We are Travel Agency</h1>
                        <p>We, as a Leading Travel management Organisation are committed to display through our behaviour and actions the following conduct, which applies to all aspects of our business.</p>
                        <h4 class="mb20">We want to plan your holiday as if it were our own.</h4>
                        <div class="about-list">
                            <ul class="arrow arrow-chevron-circle-right offer-list">
                                <li>Conduct which is of the highest ethical standards-intellectual, financial and moral and reflects the highest levels of courtesy and consideration to others. </li>
                                <li>Conduct which exemplifies care for the customer through anticipation of need, attention to detail, excellence, aesthetics and style and respect for privacy along with warmth and concern.</li>
                                <li>Travel Insurance options avaliable</li>
                                <li>Corporate Travel and managments</li>
                                <li>Accomadtion in five start Luxury Hotel</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-img"><img src="{{asset('template/images/multi7.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-section close -->
    <!-- features-section start -->
    <div class="bg-default space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h1 class="whyhead">Why Choose Our Travel Agency?</h1>
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
                            <p>We provide best in class clean hyginic and safe accomodation at all your favorite destinations and dream locations</p>
                        </div>
                    </div>
                </div>
                <!-- feature close -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-plane"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Transportation</h3>
                            <p>Best transportation facilities for every budget and location so you can travel hastlefree and can focus on nature not on travel </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-block">
                        <div class="feature-icon"><i class="fa fa-star"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Easy Trip Planning</h3>
                            <p>With our assisted personalize travel specialist team you can plan the trip of your dream with unbelieveable budget and comfort </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-section close -->
    <div class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cta-content">
                        <div class="cta-text">GO EXPLORE</div>
                        <h1 class="cta-title whyhead">It’a Big World Out of There</h1>
                        <a href="contact-us.html" class="btn btn-primary btn-lg">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <div class="testimonial-img"><img src="{{asset('template/images/travel1.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                        <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                        <div class="testimonial-content">
                            <h4>rahulsharma@gmail.com</h4>
                            <span class="location">Shimla</span>
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
                        <div class="testimonial-img"><img src="{{asset('template/images/travel4.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                        <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                        <div class="testimonial-content">
                            <h4>Ashishver23@gmail.com</h4>
                            <span class="location">Rampur</span>
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
                        <div class="testimonial-img"><img src="{{asset('template/images/travel6.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template"></div>
                        <div class="testimonial-user-img"><img src="{{asset('template/images/uzer.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle width_test"></div>
                        <div class="testimonial-content">
                            <h4>Aryan522@gmail.com</h4>
                            <span class="location">Kullu Manali</span>
                            <div class="rating"> <span> <i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> <span><i class="fa fa-star"></i> </span> </div>
                            <div>
                                <p class="testimonial-text">“Good team work and knowledge of work and field. They know how to treat a customer. They know how to serve a customer. They treated us as we are their families. So according to me they are best if anyone wants to go on a trip with their friends.... Thanks”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonials-three-close -->
            </div>
        </div>
    </div>
  


@endsection