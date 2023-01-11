@extends('fontend.layout')
@section('content')
<section class="page_title corner-title overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Contact Us </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"> Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Contact Us 
                    </li>
                </ol>
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
 </section>
<div class="main-content">
   
    <!-- icon section -->
 
    <div class="iconsec my-2 my-md-3">
        <div class="container-fluid">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded">
                <h2 class="text-center pt-4 text-uppercase contact-us">Contact Us </h2>
                <span class="animate-border mx-auto"></span>
                <div class="row inner-iconsec">
                    <div class="col-md-3 pb-3">
                        <div class="icondiv justify-content-center d-flex tossing pb-3">
                            <em class="fas fa-headphones-alt fa-5x"></em>
                        </div>
                        <h6 class="text-center">Call Us</h6>
                        <p class="text-center text-capitalize"><strong>Phone:</strong> +91 9876543210</p>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="icondiv justify-content-center d-flex floating pb-3">
                            <em class="fas fa-map-marker-alt fa-5x"></em>
                        </div>
                        <h6 class="text-center">Visit Us</h6>
                        <p class="text-center text-capitalize"><strong>Address:</strong> #262-263, Time Square Empire SH 42, highway, Goa, 643987</p>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="icondiv justify-content-center d-flex pulse pb-3">
                            <em class="fas fa-pencil-ruler fa-5x"></em>
                        </div>
                        <h6 class="text-center">Write Us</h6>
                        <p class="text-center text-capitalize"><strong>Email:</strong> support@ekart.com</p>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="icondiv justify-content-center d-flex pulse pb-3">
                            <em class="fas fa-tv fa-5x"></em>
                        </div>
                        <h6 class="text-center">Open</h6>
                        <p class="text-center text-capitalize"><strong>Mon – Sat:</strong> 9:00 – 18:00<br></p>
                    </div>
                </div>
 
                <!-- eof icon sec -->
                <!-- contact form -->
                <div class="contactsec1 mb-10">
                    <div class="wrap">
                        <form class="main-contactform" action="https://ecartmultivendorweb.thewrteam.in/contact" method="POST">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name">
                                        <label for="name">Name</label>
                                        <span class="input-highlight"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email">
                                        <label for="email">Email</label>
                                        <span class="input-highlight"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone">
                                        <label for="subject">Phone Number</label>
                                        <span class="input-highlight"></span>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control"></textarea>
                                        <label for="message">Message</label>
                                        <span class="input-highlight"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 buttons-type">
                                <button type="submit" name="submit" class="btn shadow">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <!-- eof contact form -->
    <!-- map -->
    <section class="mapsec mb-50">
        <div class="container-fluid">
            <div class="outer_box px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded">
                <div class="col-md-12">
                    <div class="mapcontent">
                        <iframe aria-hidden="false" tabindex="0" title="map" src="https://maps.google.com/maps?q=+23.23305215147397+,+69.64400665873588+&amp;hl=en&amp;z=18&amp;output=embed"> </iframe>
                    </div>
                </div>
            </div>
            <div class="divider-bottom-md"></div>
        </div>
    </section>
    <!-- eof map -->
 </div>
@endsection