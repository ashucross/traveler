@extends('front.layout')
@section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">Blog-Single</h1>
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
                        <li>Blog</li>
                        <li>Blog-single</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
    <!-- blog-section start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <!-- post-one-start -->
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block">
                        <div class="post-img"><img src="{{asset('template/images/slider1.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-responsive" style="background-size: cover;"></div>
                        <div class="post-sticky"> <i class="fa fa-thumb-tack"></i> </div>
                        <div class="post-content">
                            <div>
                                <h1 class="post-title">Best Budget Destination for Couple</h1>
                            </div>
                            <div class="meta"> <span class="meta-date">Posted on March 5, 2017 </span> <span class="meta-author">by <a href="#">Timothy Cooper</a></span> </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>No other state in India evokes the same passion and unified adulation as does Himachal "Land of the Gods", Himachal Pradesh is a beautiful hill state in India, nestles in north-west region of western Himalayas. The state is landlocked with the Tibetan plateau to the east, Jammu and Kashmir to the north, and the Punjab to the west.</p>
                    <p> Known for its spectacular and panoramic landscapes, this traveler's paradise is blessed with lofty snow peaks, deep gorges, verdant valleys, thundering rivers, enchanting mountain lakes, flower carpeted meadows, ancient temples, and magnificent monasteries steeped in time. Remember, you don't visit Himachal Pradesh, you romance it. And EverGreenHimachal.com is here just to make sure you experience holidays in Himachal Pradesh like never before. </p>
                    <p>To arrange what you want to do in your Holidays we at ROUTE BREAKERS make some special unique sequence of events which makes us different. This includes special themes tour packages for different destinations opted by our guests, taking them closer and deeper to the nature and the Earth.We do believe in conserving and taking care of the nature side by side and encouraging other about our vision to make earth a better place to roam as we all are travelers creating a beautiful place in perspective of healthy tourism.</p>
                    <p class="blockquote">"We specialize in organizing Leisure Cultural Tours, Hotel Reservations, Car Rentals, Rafting, Trekking, Jeep Safari and other adventure activities in Himachal Pradesh Ladakh viz Kullu, Manali, Dharamsala, Shimla, Lahaul – Spiti, Kinnaur, Zanskar, Rupshu, Nubra Ladakh in other parts of India."</p>
                    <img src="{{asset('template/images/multi6.jpg')}}" alt="" class="align-left">
                    <p>Big surprises come in small packages and it is totally true when it comes to Fagu – the most serene of all hill stations close to Shimla. A quaint little town located in the heart of Himachal Pradesh and not so far from Shimla, the refreshing green fields with Himalayas in the background, will offer perfect peace and quiet that you need on a relaxing vacation.</p>
                    <p>Encircled by the beauty of pine, deodar, and oak trees, Kiarighat is one of the best hill stations near Shimla to spend some quality time with family, and friends. Attracting thousands of visitors every year, the beauty and charm of Kiarighat also makes it one of the best places to visit near Delhi for the nature lovers.</p>
                    <div class="post-navigation mb30 mt80">
                        <div class="row">
                            <div class="nav-links">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" class=" prev-link mb30">Prev Post</a>
                                    <h4 class="previous-next-title"><a href="#">Amazing place to visit</a></h4>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class=" nav-next text-right"><a href="#" class="next-link mb30">Next Post</a>
                                        <h4 class="previous-next-title"><a href="#">Travel Photography Tips</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Author post start-->
                    <div class="author-block">
                        <div class="row">
                            <div class="author-post">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="author-img">
                                        <a href="#"><img src="{{asset('template/images/priya.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle"></a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                                    <div class="author-post-content">
                                        <h4 class="author-title mt-5"><a href="#" class="title">Sakshi Chauhan</a></h4>
                                        <span class="author-meta">Author</span>
                                        <p class="author-text">Are you one of those people who often feel like attending to the mountain’s call? Then these famous as well as yet-to-be-explored hill stations near Shimla will not fail to impress you at all. Take a look at these amazing getaways, and include a one or two in your next plan to Himachal. Happy Tripping!</p>
                                        <div class="author-post-btn"><a href="#" class="btn btn-primary btn-lg">view all post</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Author post close-->
                    <!-- <div class="related-block">
                        <div class="row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2>Related Post</h2>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related-post">
                                            <div class="related-img">
                                                <a href="blog-single.html" class="imghover"><img src="{{asset('template/images/testimonial-img-3.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-responsive"></a>
                                            </div>
                                            <div class="related-post-content">
                                                <h2><a href="#" class="title">The Ultimate singapore to do list</a></h2>
                                                <span class="meta-categories">In<a href="#" class="title">"Travel"</a></span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related-post">
                                            <div class="related-img">
                                                <a href="blog-single.html" class="imghover"><img src="{{asset('template/images/testimonial-img-2.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-responsive"></a>
                                            </div>
                                            <div class="related-post-content">
                                                <h2 class="related-title"><a href="#" class="title">Survival Tips While Exploring
                        the World!</a></h2>
                                                <span class="meta-categories">In<a href="#">"Travel"</a></span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related-post">
                                            <div class="related-img">
                                                <a href="blog-single.html" class="imghover"> <img src="{{asset('template/images/testimonial-img-1.jpg')}}" alt="Tour and Travel Agency - Responsive Website Template" class="img-responsive"> </a>
                                            </div>
                                            <div class="related-post-content">
                                                <h2><a href="#" class="title">The Ultimate singapore to do list</a></h2>
                                                <span class="meta-categories">In<a href="#" class="title">"Travel"</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--comments start-->
                    <div class="comment-area">
                        <div class="row">
                            <div class=" col-lg-12 col-md-12">
                                <div class="comment-title">
                                    <h2>(4)Comments</h2>
                                    <ul class="comment-list">
                                        <li>
                                            <div class="comment-author"><img src="{{asset('template/images/comet1.jpg')}}"  style="height:60px; width:60px;" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle"></div>
                                            <div class="comment-info">
                                                <h4 class="user-title">Sapna Verma</h4>
                                                <div class="meta">
                                                    <div class="comment-meta-date">31 March, 2017</div>
                                                </div>
                                                <div class="comment-content">
                                                    <p>If you are looking for peaceful, natural beauty and pure air then shimla is not for you..

Chail is much more beautiful than Shimla</p>
                                                </div>
                                                <a href="#" class="reply-link">Reply</a> </div>
                                        </li>
                                    </ul>
                                     <ul class="comment-list">
                                        <li>
                                            <div class="comment-author"><img src="{{asset('template/images/comit2.jpg')}}"  style="height:60px; width:60px;" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle"></div>
                                            <div class="comment-info">
                                                <h4 class="user-title">Sneha Bhardwaj</h4>
                                                <div class="meta"> <span class="comment-meta-date">28 March, 2017</span></div>
                                                <div class="comment-content">
                                                    <p>Shimla is my favorite place. I went in March. I'm really crazy. Great place.The behavior of the people here is very beautiful . It is a very convenient place to go here Here’s my favorite of Bayath’s time during the market I really liked Ami to bollbo akta hollo indiar sorgo</p>
                                                </div>
                                                <a href="#" class="reply-link">Reply</a> </div>
                                            <ul class="comment-list childern">
                                                <li>
                                                    <div class="comment-author"><img src="{{asset('template/images/priya.jpg')}}"  style="height:60px; width:60px;" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle"></div>
                                                    <div class="comment-info">
                                                        <h4 class="user-title">Sakshi Chauhan</h4>
                                                        <div class="meta"> <span class="comment-meta-date">10 March, 2017</span></div>
                                                        <div class="comment-content">
                                                            <p>Thank you so much for your valuable feedbacks...</p>
                                                        </div>
                                                        <a href="#" class="reply-link">Reply</a> </div>
                                            </ul>
                                            </li>
                                    </ul>
                                  <!--   <ul class="comment-list">
                                        <li>
                                            <div class="comment-author"><img src="{{asset('template/images/testimonial-img-3.jpg')}}"  style="height:60px; width:60px;" alt="Tour and Travel Agency - Responsive Website Template" class="img-circle"></div>
                                            <div class="comment-info">
                                                <h4 class="user-title">Vicki Bouknight</h4>
                                                <div class="meta"> <span class="comment-meta-date">18 March, 2017</span></div>
                                                <div class="comment-content">
                                                    <p>Praesent ultrices massa ligula. Duis mollis ultrices lectus a placerat. Fusce pretium dui sed diam faucibus scelerisque. Orci varius natoquscetur rius mauris odio, dictum eu elementum ac, pretium eu dui.</p>
                                                </div>
                                                <a href="#" class="reply-link">Reply</a></div>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--comments close-->
                    <div class="leave-comments">
                        <h2 class="comment-title">Leave A Reply</h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Comments</label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="website">Website</label>
                                        <input id="website" name="website" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
