   <!-- header-section start -->
   <div class="top-bar">
       <div class="container">
           <div class="row">
               <div class="col-md-4 hidden-sm col-sm-12" id="smallnav1">
                   <div class="call-info">
                       <p class="call-text">Any Question? Call Us:<strong>9750900003</strong></p>
                   </div>
               </div>
               <div class="col-md-8 hidden-sm hidden-xs col-sm-12" id="smallnav2">
                   <div class="social">
                       <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="header-wrapper">
       <div class="header">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12">
                       <a href="/"><img class="imaglogo" src="{{asset('template/images/logo.png')}}" alt="Tour and Travel Agency - Responsive Website Template"></a>
                   </div>
                   <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                       <div class="navigation">
                           <div id="navigation">
                               <ul>
                                   @if ( Auth::user())


                                   <li><a href="{{url('/home')}}" title="Contact Us">Dashboard</a> </li>
                                   <li class="active"><a href="{{url('/')}}" title="Home">Home</a></li>
                                   <li class=""><a href="{{url('/package')}}" title="Tours">Tours</a>
                                   <li class=""><a href="{{url('/texi_service')}}" title="Texi">Texi Services</a>
                                   <li class=""><a href="{{url('/hotel_resorts')}}" title="Hotel">Hotels</a>
                                       @else
                                   <li class="active"><a href="{{url('/')}}" title="Home">Home</a></li>
                                   <li><a href="{{url('/about')}}" title="About us">About us</a> </li>
                                   <li class=""><a href="{{url('/package')}}" title="Tours">Tours</a>

                                   </li>
                                   <li class=""><a href="{{url('/texi_service')}}" title="Texi">Texi Services</a>
                                   <li class=""><a href="{{url('/hotel_resorts')}}" title="Hotel">Hotels</a>
                                   <li class=""><a href="{{url('/blog')}}" title="Blog ">Blog</a>

                                   </li>
                                   <li><a href="{{url('/testimonial')}}" title="Testimonials">Testimonials</a>
                                   <li><a href="{{url('/contact')}}" title="Contact Us">Contact Us</a> </li>
                                   @endif


                                   <!--  <li> <button class="googlebtn_wrap p-2 mt-3"> <a href="{{ url('auth/google') }}" class="googlebtn">
                  <i class="fa fa-google" aria-hidden="true"></i> Login
                </a> </button></li> -->
                                   <!--  <li><a href="styleguide.php" title="Styleguide">styleguide</a> </li> -->
                               </ul>
                           </div>
                       </div>
                   </div>

                   <div class="col-sm-1">
                       <div class="ham">
                           <button class="btn float-right mr-3" id="ham1"><i class="fa fa-bars"></i></button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="container-fluid">
       <div id="ham2">
           <ul class="hamli">
               <li class="my-3"><a href="/" class="hamlink">Home</a></li>
               <li class="my-3"><a href="/about" class="hamlink">About Us</a></li>
               <li class="my-3"><a href="/package" class="hamlink">Package</a></li>
               <li class="my-3"><a href="/texi_service"  class="hamlink" >Texi Services</a>
               <li class="my-3"><a href="/hotel_resorts"  class="hamlink">Hotels</a>
               <li class="my-3"><a href="/blog" class="hamlink">Blog</a></li>
               <li class="my-3"><a href="/testimonial" class="hamlink">Testimonial</a></li>
               <li class="my-3"><a href="/contact" class="hamlink">Contact Us</a></li>
           </ul>
       </div>
   </div>
   <!-- header-section close -->