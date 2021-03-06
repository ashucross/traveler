@extends('front.layout')
@section('content')
    <!-- page-header-start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title">Contact Us</h1>
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
                        <li>Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
    <!-- contact start -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <!-- contact info start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-block">
                        <h1>Contact info</h1>
                        <div class="contact-info">
                            <div class=" mb30">
                                <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                                <div class="mt30">
                                    <h5 class="contact-title">Address</h5>
                                    <span>Sarog Gali ,NH-22, Near Theog -171209</span></div>
                            </div>
                            <div class=" mb30">
                                <div class="contact-icon"><i class="fa fa-phone"></i></div>
                                <div class="mt30">
                                    <h5 class="contact-title">Phone Numbers</h5>
                                    <span> 9750900003</span> </div>
                            </div>
                            <div class="mb30">
                                <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                                <div class="mt30">
                                    <h5 class="contact-title">Email Address</h5>
                                    <span>info@himachaltours.com</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact info close -->
                <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Get In Touch With Us</h1>
                    <p>Get in touch with us through the contact info below the given.</p>
                    <!-- contact form start -->
                    <div class="row">
                        <form class="contactform">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="phone">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="subject">Subject</label>
                                    <input id="subject" name="subject" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Message</label>
                                    <textarea class="form-control" id="textarea" name="textarea" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- contact form close -->
            </div>
        </div>
    </div>
 
  

  @endsection