@extends('front.layout')

@section('content')
<div class="container-fluid margin_pak">
    <div class="pakwidth">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="row mt-5 ml-0 border_pak">
                    <div class="col-md-5">
                        <img src="{{asset('template/images/travel5.jpg')}}" class="mt-4 ml-2 pak_img" alt="">
                    </div>

                    <div class="col-md-7">
                        <h5 class="mt-5 text-primary pak_head">ENCHANTING KASOL TOUR</h5>
                        <p class="pak_dur">3Night/4Days</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pakul">



                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#day1">Day 1</button>
                                        <div id="day1" class="mx-2 collapse">
                                        DELHI or CHANDIGARH / SHIMLA : On arrival at Delhi our representative will meet you.Head up to the hills to Shimla. In the evening, explore the Shimla city and THE MALL ROAD (Asia's third largest). Overnight at Shimla.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#day2">Day 2</button>
                                        <div id="day2" class="mx-2 collapse">
                                        Kullu / Kasol : After breakfast proceed to Kasol. On arrival at Kasol, Check into the hotel. You will visit the Kheer Ganga and see the beautiful natural forest of the Parvati Valley. Next, you will enjoy the amazing view of Tirthan Valley. Overnight at Kasol.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#day3">Day 3</button>
                                        <div id="day3" class="mx-2 collapse">
                                        Kasol / Manikaran : After breakfast proceed to Manikaran. You will visit the Lord Shiva Temple. Next, you will enjoy the swimming in Hot Springs. In the evening, back to the Kasol. Overnight at hotel.
                                        </div>
                                    </li>


                                </ul>
                            </div>

                        </div>

                        <hr class="my-4">

                        <h5 class="highl">Highlights
                        </h5>
                        <ul class="highul">
                            <li class="highli">Visit The Mall Shimla, Bhima Kali Temple, Sangla, Chitkul, Nako, Kee,
                                Losar, Chandratal and Rohtang Pass.</li>
                            <li class="highli">Enjoy cold nights and star gazing.</li>
                        </ul>
                        <hr class="my-4">
                        <!--    <ul class="uliconpakage" style="list-style: none;">
                            <li class="mx-4 icon_li"><i class="fa fa-plane"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-binoculars"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-hotel"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-car"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-coffee"></i></li>

                        </ul> -->

                        <h3 class="text-danger">5,999 Onwards
                        </h3>

                        <a href="/" class="text-success detailx">View Details</a><button class="btn-info float-right mr-3 mb-5 w-50" style="border-radius: 10px;height: 35px;">SEND
                            QUIRY</button>
                    </div>
                </div>
            </div>
            

            <!-- form packages--->
            <div class="col-md-4 col-sm-12" id="bigform">
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
            </div>

            <div class="col-md-8 col-sm-12">
                <div class="row mt-5 ml-0 border_pak">
                    <div class="col-md-5">
                        <img src="{{asset('template/images/travel3.jpg')}}" class="mt-4 ml-2 pak_img" alt="">
                    </div>

                    <div class="col-md-7">
                        <h5 class="mt-5 text-primary pak_head">SPECIAL HONEYMOON TRAVEL</h5>
                        <p class="pak_dur">3Night/4Days</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pakul">



                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pak1">Day 1</button>
                                        <div id="pak1" class="mx-2 collapse">
                                        Shimla - Kufri - Shimla : After breakfast proceed to visit Kufri. India’s one of the best holiday paradise ’Kufri’ is a tourist hotspot for its awesome and scenic sport activities.Kufri also has a Himalayan Wildlife Zoo and Kufri Fun Park which will make your trip even more exciting (Entry & activities on your own cost). After sightseeing take the roads back to Shimla.Overnight stay at hotel
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pak2">Day 2</button>
                                        <div id="pak2" class="mx-2 collapse">
                                        Shimla -Kullu - Manali : Today morning after breakfast check out from the hotel and proceed towards Manali. Places to cover enroute will be Vaishno Devi Temple, Hanogi Mata Temple, Pandoh Dam & Sundar Nagar Lake. Near Kullu, we will take a stroll in Pashmina Shawl Showrooms and will try out our hands on white water River Rafting too. Reach Manali followed by check-in into the hotel. Overnight stay will be in hotel.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pak3">Day 3</button>
                                        <div id="pak3" class="mx-2 collapse">
                                        Shimla - Kufri - Shimla : After breakfast proceed to visit Kufri. India’s one of the best holiday paradise ’Kufri’ is a tourist hotspot for its awesome and scenic sport activities.Kufri also has a Himalayan Wildlife Zoo and Kufri Fun Park which will make your trip even more exciting (Entry & activities on your own cost). After sightseeing take the roads back to Shimla.Overnight stay at hotel
                                        </div>
                                    </li>


                                </ul>
                            </div>

                        </div>

                        <hr class="my-4">

                        <h5 class="highl">Highlights
                        </h5>
                        <ul class="highul">
                            <li class="highli">Visit The Mall Shimla, Bhima Kali Temple, Sangla, Chitkul, Nako, Kee,
                                Losar, Chandratal and Rohtang Pass.</li>
                            <li class="highli">Enjoy cold nights and star gazing.</li>
                        </ul>
                        <hr class="my-4">
                        <!--    <ul class="uliconpakage" style="list-style: none;">
                            <li class="mx-4 icon_li"><i class="fa fa-plane"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-binoculars"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-hotel"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-car"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-coffee"></i></li>

                        </ul> -->

                        <h3 class="text-danger">5,999 Onwards
                        </h3>

                        <a href="/" class="text-success detailx">View Details</a><button class="btn-info float-right mr-3 mb-5 w-50" style="border-radius: 10px;height: 35px;">SEND
                            QUIRY</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12">
                <div class="row mt-5 ml-0 border_pak">
                    <div class="col-md-5">
                        <img src="{{asset('template/images/slider1.jpg')}}" class="mt-4 ml-2 pak_img" alt="">
                    </div>

                    <div class="col-md-7">
                        <h5 class="mt-5 text-primary pak_head">WORLD'S MOST EXTREME</h5>
                        <p class="pak_dur">3Night/4Days</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pakul">



                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pack1">Day 1</button>
                                        <div id="pack1" class="mx-2 collapse">
                                        Arrival Delhi : Upon Arrival at the Delhi Airport or Delhi Railway Station, you will be transferred on a picturesque drive to the charming hill station of Shimla. On arrival, check into your hotel. The rest of the evening is at leisure. Overnight in Shimla.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pack2">Day 2</button>
                                        <div id="pack" class="mx-2 collapse">
                                        Shimla to Sarahan 190 km : After breakfast, drive via Kufri, Narkandha and descend to the Rampur, erstwhile Himalayan kingdom of Rampur Bushehar. Continue to Sarahan the summer capital of the Rampur Bushehar. Pay a visit to a 1500 years old temple and get a magnificent view of the Shir Khand peaks. Stay overnight in camp.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pack3">Day 3</button>
                                        <div id="pack3" class="mx-2 collapse">
                                        Sarahan to Recongpeo - Kalpa : Today we will move to Recongpeo the district headquarters of Kinnaur. A monastery is built on the top of the town the majesty of the Kinner Kailash Mountain is in direct vision from Kalpa this is regarded as one of the mythical abodes of Lord Shiva.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#pack4">Day 4</button>
                                        <div id="pack4" class="mx-2 collapse">
                                        Recongpeo to Lamber : We will drive to Thangi followed by a gradual trek along the stream till a beautiful campsite of Lamber. Overnight stay is in Lamber.
                                        </div>
                                    </li>


                                </ul>
                            </div>

                        </div>

                        <hr class="my-4">

                        <h5 class="highl">Highlights
                        </h5>
                        <ul class="highul">
                            <li class="highli">Visit The Mall Shimla, Bhima Kali Temple, Sangla, Chitkul, Nako, Kee,
                                Losar, Chandratal and Rohtang Pass.</li>
                            <li class="highli">Enjoy cold nights and star gazing.</li>
                        </ul>
                        <hr class="my-4">
                        <!--    <ul class="uliconpakage" style="list-style: none;">
                            <li class="mx-4 icon_li"><i class="fa fa-plane"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-binoculars"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-hotel"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-car"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-coffee"></i></li>

                        </ul> -->

                        <h3 class="text-danger">5,999 Onwards
                        </h3>

                        <a href="/" class="text-success detailx">View Details</a><button class="btn-info float-right mr-3 mb-5 w-50" style="border-radius: 10px;height: 35px;">SEND
                            QUIRY</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12">
                <div class="row mt-5 ml-0 border_pak">
                    <div class="col-md-5">
                        <img src="{{asset('template/images/slider3.jpg')}}" class="mt-4 ml-2 pak_img" alt="">
                    </div>

                    <div class="col-md-7">
                        <h5 class="mt-5 text-primary pak_head">THE UNEXPLORED SHIMLA</h5>
                        <p class="pak_dur">3Night/4Days</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pakul">



                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#tax1">Day 1</button>
                                        <div id="tax1" class="mx-2 collapse">
                                        Delhi/Chandigarh - Shimla : You will meet our representative from where the tour begins.Head up to the hills en routing Chail.Visit places like Palace of Patiala Raja for lunch.World's highest ground is also situated in Chail.Overnight stay at Rohalthi -a small tranquil village located at a hill top.Camp still will be offered.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#tax2">Day 2</button>
                                        <div id="tax2" class="mx-2 collapse">
                                        Local Exploration + Trek : After breakfast our tour guide will take you to surrounding route trek including picnic spot and a holy place named as Kwaliya - lush green open valley.Cycling and other recreational activities options will be offered depending upon guest's preference.In the evening enjoy the traditional food accompanied with born fire.Camp Stay.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#tax3">Day 3</button>
                                        <div id="tax3" class="mx-2 collapse">
                                        Kufri - Shimla Local : Next morning after breakfast we will proceed to your next location Kufri - all season place – winters are packed with snow adventures while the summers are brimmed with colourful meadows. Kufri also has a Himalayan Wildlife Zoo and Kufri Fun Park which will make your trip even more exciting (Entry & activities on your own cost). After sightseeing take the roads to Shimla. In the city we will visit Advance Study, The Mall, Johnnie’s wax museum, Scandal Point, Ridge, Gaiety Theatre, Heritage Museum, Lakkar Bazaar, Rani Jhansi Park and Christ Church. Overnight stay in Hotel.
                                        </div>
                                    </li>


                                </ul>
                            </div>

                        </div>

                        <hr class="my-4">

                        <h5 class="highl">Highlights
                        </h5>
                        <ul class="highul">
                            <li class="highli">Visit The Mall Shimla, Bhima Kali Temple, Sangla, Chitkul, Nako, Kee,
                                Losar, Chandratal and Rohtang Pass.</li>
                            <li class="highli">Enjoy cold nights and star gazing.</li>
                        </ul>
                        <hr class="my-4">
                        <!--    <ul class="uliconpakage" style="list-style: none;">
                            <li class="mx-4 icon_li"><i class="fa fa-plane"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-binoculars"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-hotel"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-car"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-coffee"></i></li>

                        </ul> -->

                        <h3 class="text-danger">5,999 Onwards
                        </h3>

                        <a href="/" class="text-success detailx">View Details</a><button class="btn-info float-right mr-3 mb-5 w-50" style="border-radius: 10px;height: 35px;">SEND
                            QUIRY</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-12 mb-5">
                <div class="row mt-5 ml-0 border_pak">
                    <div class="col-md-5">
                        <img src="{{asset('template/images/travel7.jpg')}}" class="mt-4 ml-2 pak_img" alt="">
                    </div>

                    <div class="col-md-7">
                        <h5 class="mt-5 text-primary pak_head">THE ADVENTURE TOWN</h5>
                        <p class="pak_dur">3Night/4Days</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pakul">



                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#tj1">Day 1</button>
                                        <div id="tj1" class="mx-2 collapse">
                                        DELHI – MANALI (530 KMS/ 12-14 HRS) (OVERNIGHT JOURNEY) : Start your wonderful journey to Manali by boarding the Volvo from Delhi Volvo pick up point (Guests are requested to report at scheduled time). Overnight Journey will be by Volvo.As soon as you will enter into the terrains of Manali, you will feel cool breeze already taking all your stress away and surprising you from its jaw- dropping landscapes.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#tj2">Day 2</button>
                                        <div id="tj2" class="mx-2 collapse">
                                        ARRIVAL IN MANALI + FREE FOR ACTIVITIES : Upon reaching Manali our team will greet you and transfer you to the camping site for check inn (Check In time will be as per Hotel Policy and early check-in will be subject to availability and extra cost). After fresh up have some rest and then you are free for cam activities which you can enjoy for a day. You can enjoy any 5 activities in a day and in evening have enjoy of light music and bone fire and Overnight stay at camp.
                                        </div>
                                    </li>
                                    <li class="packli"><button class="btn" data-toggle="collapse" data-target="#tj3">Day 3</button>
                                        <div id="tj3" class="mx-2 collapse">
                                        MANALI LOCAL - DELHI : Today morning check out from camp and proceed to enjoy Manali local sightseeing tour. Start your trip by covering Hadimba Devi Temple and Ghatotkacha Temple. The temples are dedicated to Mata Hadimba (the most worshipped deity in Himahcal) and her son Ghatotkacha. Clubhouse will be next place to visit. Here, enjoy recreational activities such as Skating, disco, zipline, TT and much more Later you will be dropped at Manali Volvo point and catch your Volvo and start your journey back to Delhi.
                                        </div>
                                    </li>


                                </ul>
                            </div>

                        </div>

                        <hr class="my-4">

                        <h5 class="highl">Highlights
                        </h5>
                        <ul class="highul">
                            <li class="highli">Visit The Mall Shimla, Bhima Kali Temple, Sangla, Chitkul, Nako, Kee,
                                Losar, Chandratal and Rohtang Pass.</li>
                            <li class="highli">Enjoy cold nights and star gazing.</li>
                        </ul>
                        <hr class="my-4">
                        <!--    <ul class="uliconpakage" style="list-style: none;">
                            <li class="mx-4 icon_li"><i class="fa fa-plane"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-binoculars"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-hotel"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-car"></i></li>
                            <li class="mx-4 icon_li"><i class="fa fa-coffee"></i></li>

                        </ul> -->

                        <h3 class="text-danger">5,999 Onwards
                        </h3>

                        <a href="/" class="text-success detailx">View Details</a><button class="btn-info float-right mr-3 mb-5 w-50" style="border-radius: 10px;height: 35px;">SEND
                            QUIRY</button>
                    </div>
                </div>
            </div>



        </div>


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