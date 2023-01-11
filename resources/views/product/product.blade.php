@extends('fontend.layout')
@section('content')

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
       <div class="login_section modal-content">
          <button type="button" class="loginpopup close close-btn" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <!-- Nav tabs -->
          <!-- Tab panes -->
          <div class="tab-content">
             <div class="row justify-content-md-center">
                <div class="col-md-12">
                   <div class="" id="cardLogin">
                      <div class="card mx-auto">
                         <div class="card-body loginsec modal-body">
                            <h4 class="card-title mb-4">Sign in</h4>
                            <form method="POST" action="https://ecartmultivendorweb.thewrteam.in/login">
                               <input type="hidden" name="last_url" value="">
                               <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                              <div class="form-group">
                                  <input class="form-control" placeholder="Mobile No." name="mobile" type="number" required>
                               </div>
                               <div class="form-group">
                                  <input name="password" class="form-control" placeholder="Password" type="password">
                               </div>
                               <div class="form-group">
                                  <a href="#" class="float-right" id='btnForgot'>Forgot password?</a>
                               </div>
                               <div class="form-group">
                                  <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                               </div>
                            </form>
                            <p class="text-center mt-4">Don't have account? <a href="#" id="btnRegister" class="btn btn-primary btn-block">Sign up</a></p>
                         </div>
                      </div>
                   </div>
                   <div class="error-hide" id="cardRegister">
                      <div class="card mx-auto">
                         <div class="card-body modal-body">
                            <h4 class="card-title mb-4">Register </h4>
                            <form id="formRegister" method="POST">
                               <input type="hidden" name="country_code" value="+1">
                               <input type="hidden" name='action' value='1'>
                               <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                              <div class="form-group">
                                  <div class="alert alert-danger error-hide" id="registerError"></div>
                               </div>
                               <div class="input-group">
                                  <input type="tel" id="phone" class="form-control" required>
                               </div>
                               <br/>
                               <div class="form-group">
                                  <button type="submit" class="btn btn-primary btn-block"> Next </button>
                               </div>
                               <div id="recaptcha-container"></div>
                            </form>
                            <p class="text-center mt-4 alreadyLogin">Already have account?<a href="#" class="btn btn-primary btnLogin">Login </a></p>
                            <p class="text-center mt-4 backToLogin error-hide" id="backToLogin">Back to <a href="#" class="btn btn-primary btnLogin">Login </a></p>
                         </div>
                      </div>
                   </div>
                   <div class="card-hide" id="cardOtp">
                      <div class="card mx-auto">
                         <div class="card-body modal-body">
                            <h4 class="card-title mb-4">Verify Your Mobile Number</h4>
                            <form action="https://ecartmultivendorweb.thewrteam.in/register" id="formOtpVerification" method="POST">
                               <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                              <input type="hidden" name="auth_uid" required>
                               <input type="hidden" name="country_code" required>
                               <input type="hidden" name='friends_code' value=''>
                               <div class="form-group" id="otpSuccess">
                                  <div class="alert alert-success">OTP Sent To Mobile Number</div>
                               </div>
                               <div class="form-group">
                                  <div class="alert alert-danger error-hide" id="otpError"></div>
                               </div>
                               <div class="form-group">
                                  <input type="text" name="mobile" class="form-control" readonly>
                               </div>
                               <div class="form-group">
                                  <input type="number" name="otp" class="form-control">
                                  <span id="otp-error"><small class="text-danger error-hide">Please Enter Valid 6 Digit OTP.</small></span>
                               </div>
                               <div class="form-group">
                                  <button id="verifyOtp" class="btn btn-primary btn-block"> Verify OTP </button>
                               </div>
                            </form>
                            <p class="text-center mt-4 alreadyLogin">Already have account? <a href="#" class="btn btn-primary btnLogin">Login</a></p>
                            <p class="text-center mt-4 backToLogin error-hide" id="backToLogin">Back to <a href="#" class="btn btn-primary btnLogin">Login</a></p>
                         </div>
                      </div>
                   </div>
                   <div class="card-hide" id="cardResetPassword">
                      <div class="card mx-auto">
                         <div class="card-body modal-body">
                            <h4 class="card-title mb-4">Reset Password</h4>
                            <form action="https://ecartmultivendorweb.thewrteam.in/reset-password" id="formResetPassword" method="POST">
                               <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                              <input type="hidden" name="auth_uid" required>
                               <input type="hidden" name="mobile" required>
                               <div class="form-group">
                                  <div class="alert alert-danger error-hide" id="errorResetPassword"></div>
                                  <div class="alert alert-success error-hide" id="successResetPassword"></div>
                               </div>
                               <div class="form-group">
                                  <label>Mobile Number</label>
                                  <input type="text" id="mobileResetPassword" class="form-control" readonly>
                               </div>
                               <div class="form-group">
                                  <label>New Password</label>
                                  <input type="password" name="password" class="form-control">
                               </div>
                               <div class="form-group">
                                  <label>Confirm New Password</label>
                                  <input type="password" name="password_confirmation" class="form-control">
                               </div>
                               <div class="form-group">
                                  <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block"> Reset  </button>
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 <script src="../public/js/login.js"></script>
 <meta property="og:image" content="https://ecartvendor.wrteam.co.in/upload/images/0524-2022-04-07.jpg"/>
 <section class="page_title corner-title overflow-visible">
     <div class="container">
         <div class="row">
             <div class="col-md-12 text-center">
                 <h1> Continental Coffee Xtra Instant Coffee  </h1>
                    
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="../index.html">Home</a>
                     </li>
                     <li class="breadcrumb-item active">
                          Continental Coffee Xtra Instant Coffee                     </li>
                 </ol>
                 <div class="divider-15 d-none d-xl-block"></div>
             </div>
         </div>
     </div>
 </section>
 <!-- eof breadcumb -->
 
 
 <div class="main-content my-lg-5  my-md-2">
 
     
     <section class="product-detail-sec my-2 my-md-3">
         <div class="container">
             <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded">
                 <div class="row">
                     <div class="col-xl-5 col-lg-6 col-md-6 col-12">
                         <div class="product-details-tab">
                                                                                     <div id="img-1" class="zoomWrapper single-zoom">
                                 <a href="#">
                                     <img id="zoom1" src="{{ asset('fontend/image/upload/images/0524-2022-04-07.jpg') }}"  alt="Continental Coffee Xtra Instant Coffee" data-zoom-image="{{ asset('fontend/image/upload/images/0524-2022-04-07.jpg') }}" alt="big-1">
                                 </a>
                             </div>
                             <div class="single-zoom-thumb">
                                 <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                                                         <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/images/0524-2022-04-07.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/images/0524-2022-04-07.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/images/0524-2022-04-07.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                         <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8196-769.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8196-769.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8196-769.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                             <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8199-955.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8199-955.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8199-955.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                             <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8202-945.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8202-945.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8202-945.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                             <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8204-422.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8204-422.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8204-422.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                             <li>{{ asset('fontend/image/upload/other_images/1649333116.8206-585.jpg') }}
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8206-585.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8206-585.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8206-585.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                             <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8208-186.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8208-186.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8208-186.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                             <li>
                                         <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('fontend/image/upload/other_images/1649333116.8209-537.jpg') }}" data-zoom-image="{{ asset('fontend/image/upload/other_images/1649333116.8209-537.jpg') }}" >
                                             <img src="{{ asset('fontend/image/upload/other_images/1649333116.8209-537.jpg') }}" alt="Continental Coffee Xtra Instant Coffee" />
                                         </a>
                                     </li>
                                                                                                         </ul>
                             </div>
                         </div>
                     </div>
                     <div class=" col-xl-7 col-lg-6 col-md-6 col-12">
                         <div class="product_details_right productdetails2">
                             <h1>Continental Coffee Xtra Instant Coffee</h1>
                                                         <div class="price_box">
                                 <span class="current_price" id="price_offer_566">$<span class='value '></span></span>
                                 <span class="old_price" id="price_mrp_566">$
                                     <span class='value single_p'></span></span>
                                 <span class="current_price" id="price_regular_566">$  <span class='value'></span></span>
                                 <small class="pro_savings" id="price_savings_566">You Save: $ <span class='value'></span></small>
                             </div>
                             <div class="product_desc">
                                 <p> About this item
 
 
     Instant 70% Coffee - 30% Chicory Mixture
     Carefully chosen Coffee Beans blended with roasted Chicory to provide a strong cup of rich tasting
     Its chunky gra...                                                                 <a class="more-content" href="#info" id="description">Read More</a></p>
                                                                                             </div>
                             <div class="form">
                                 <form action="https://ecartmultivendorweb.thewrteam.in/cart/add" class="addToCart" method="POST">
                                     <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                                    <input type="hidden" class="name" name="name" value="Continental Coffee Xtra Instant Coffee" data-name="Continental Coffee Xtra Instant Coffee">
                                     <input type="hidden" class="image" name="image" value="https://ecartvendor.wrteam.co.in/upload/images/0524-2022-04-07.jpg" data-image="https://ecartvendor.wrteam.co.in/upload/images/0524-2022-04-07.jpg">
                                     <input type="hidden" class="price" name="price" value="" data-price="">
                                     <input type="hidden" name='id' value='566'>
                                     <input type="hidden" name="type" value='add'>
                                     <input type="hidden" name="child_id" value='0' id="child_566">
 
                                     <div class="product-variant1">
                                         <div class="product-variant__label">Available In:</div>
                                         <div class="product-variant__list variant btn-group-toggle" data-toggle="buttons">
                                                                                                                                     <button class="product-variant__btn pdp-btn product-variant__btn--active trim btn 1"  data-id="566" >
                                                 1 pack
                                                 <input hidden type="radio" name="options" id="option964" value="964" data-id='964' data-price='271.41 '
                                                 data-tax='9.00'
                                                 data-mrp='501.40'
                                                 data-mrp_number='501'
                                                 data-savings='211 (46 % Off)' data-stock='11' data-max-allowed-stock='10'
                                                 data-cart_count='1'
                                                 data-main-image='https://ecartvendor.wrteam.co.in/upload/images/0524-2022-04-07.jpg'
                                                 data-gallery-images=''
                                                 data-qty='1' autocomplete="off" >
                                             </button>
                                                                                         
                                                                                                                                 </div>
                                     </div>
                                     <div class="product_variant quantity">
                                         <label>Quantity :</label>
                                         <button class="cart-qty-minus button-minus button-minus-single-page" type="button" id="button-minus" value="-">-</button>
                                         <input class="qtyPicker qtyPicker-single-page" type="number" id="qtyPicker_566" name="qty" data-min="1" min="1" max="1" data-max="1" data-max-allowed="1" value="1" readonly>
                                         <button class="cart-qty-plus button-plus button-plus-single-page" type="button" id="button-plus" value="+">+</button>
                                         <button class="btn btn-primary  outline-inward" type="submit"><em class="fas fa-shopping-cart pr-2"></em>&nbsp;&nbsp;Add to cart</button>
                                         <li class="btn btn-primary pro_fav  save" data-id='566'></li>
                                     </div>
                                     
                                 </form>
                                 
                             </div>
                             
                             <div class="col-lg-12 col-md-12 product__details">
                                 <ul class="top_bar_left mb-3">
                                     <li class="price-marquee">
                                                                                                                         <p>
                                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#_pincodeModalsingle">
                                                 <em class="fas fa-map-marker-alt">&nbsp;<span class='pincode_msg'>Select a location to see product availability</span></em>
                                             </button>
                                         </p>
                                                                                 <span class="delivery_charges"></span>
                                                                             </li>
                                 </ul>
                             </div>
                             <div class='row' id="info">
                                 <div class='col-lg-6 col-12'>
                                     <h6>Check Pincode</h6>
                                     <form  method='POST' class='pincode_form'>
                                         <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                                        <input type="text" name="product_variant_id" class="form-control" value="964" hidden>
                                         <input type="text" name="slug" class="form-control" value="continental-coffee-xtra-instant-coffee" hidden>
                                         <div class="quick_deliver"><input type="text" name="pincode" class="form-control mr-70" id="pincode_no" placeholder="Enter a Pincode">
                                             <button class="btn btn-primary" type="submit" name="submit">Apply</button>
                                         </div>
                                     </form>
                                     <br/>
                                 </div>
                             </div>
                                                         <div class="priduct_social">
                                 <ul>
                                     <li>
                                         <a class="facebook" href="https://facebook.com/sharer.php?u=https://ecartmultivendorweb.thewrteam.in/product/continental-coffee-xtra-instant-coffee" target="_blank" title="facebook"><em class="fab fa-facebook-f"></em>Facebook</a>
                                     </li>
                                     <li>
                                         <a class="twitter" href="http://twitter.com/share?url=https://ecartmultivendorweb.thewrteam.in/product/continental-coffee-xtra-instant-coffee" target="_blank" title="twitter"><em class="fab fa-twitter"></em>Twitter</a>
                                     </li>
                                     <li>
                                         <a class="pinterest" href="../../pinterest.com/pin/create/button/index294f.html?url=http://www.google.com&amp;media=https://ecartvendor.wrteam.co.in/upload/images/0524-2022-04-07.jpg" target="_blank" title="pinterest"><em class="fab fa-pinterest"></em>Pinterest</a>
                                     </li>
                                     <li>
                                         <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://ecartmultivendorweb.thewrteam.in/product/continental-coffee-xtra-instant-coffee" target="_blank" title="linkedin"><em class="fab fa-linkedin"></em>Linkedin</a>
                                     </li>
 
                                 </ul>
                             </div>
 
                             <!-- policy content -->
                             <div class="card-content text-center policycontent">
                                                                 <div class="col-md-3">
                                     <div class="card productcard returnpolicy">
                                                                                 <div class="card-img pb-2">
                                             <span class="creativity">
                                                 <img class="lazy" data-original="https://ecartmultivendorweb.thewrteam.in/public/images/not-returnable.svg" alt="notReturnable">
                                             </span>
                                         </div>
                                         <div class="card-box">
                                             <h6 class="card-title text-center">Not Returnable</h6>
                                         </div>
                                                                             </div>
                                 </div>
                                 
                                                                 <div class="col-md-3">
                                     <div class="card productcard returnpolicy">
                                                                                 <div class="card-img pb-2">
                                             <span class="creativity">
                                                 <img class="lazy" data-original="https://ecartmultivendorweb.thewrteam.in/public/images/not-cancellable.svg" alt="notCancellable">
                                             </span>
                                         </div>
                                         <div class="card-box">
                                             <h6 class="card-title text-center"> Not Cancellable</h6>
                                         </div>
                                                                             </div>
                                 </div>
                                                             </div>
                             <div class="seller_name">
                                 <p>
                                     <strong>Seller :</strong>
                                     <a href="../seller/cappuccino-store-pvt-ltd-1.html">Cappuccino Store Pvt. Ltd. </a>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 
     <!--product info start-->
     <section class="product_d_info my-2 my-md-3" >
         <div class="container">
             <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded">
                 <div class="row">
                     <div class="col-12">
                         <div class="product_d_inner">
                             <div class="product_info_button">
                                 <ul class="nav" role="tablist">
                                     <li>
                                         <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="tab-content">
                                 <div class="tab-pane fade show active" id="" role="tabpanel">
                                     <div class="product_info_content">
                                                                                                                         <p> <h1>About this item</h1>
 
 <ul>
     <li>Instant 70% Coffee - 30% Chicory Mixture</li>
     <li>Carefully chosen Coffee Beans blended with roasted Chicory to provide a strong cup of rich tasting</li>
     <li>Its chunky granules lock the aroma and ﬂavour giving a strong & divine taste to the coﬀee </li>
     <li>This is the strongest cup of instant coﬀee you’ll ever taste </li>
     <li>Directions: Add Continental Xtra Instant Coﬀee Granules & sugar to taste in a cup of hot water/ milk, stir well and enjoy </li>
 </ul> </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     
         <section class="similar-product-sec my-2 my-md-3">
         <div class="container">
             <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow rounded">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="product_right_bar">
                             <div class="product_container">
                                 <div class="section_title d-flex mb-3 align-items-baseline border-bottom">
                                     <h2>
                                         <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Similar Products</span>
                                     </h2>
                                     <div class="desc_title">
                                         
                                     </div>
                                 </div>
                                 <div class="product_carousel_content similar-pro-carousel owl-carousel">
                                                                         <div class="product_items">
                                         <article class="single_product">
                                             <figure>
                                                                                                 <div class="product_thumb">
                                                     <a class="primary_img" href="sunbean-beaten-caffe-instant-coffee-paste-250g-jar-rich-creamy-and-frothy-beaten-coffee-make-hot-coffee-cappuccino-or-co.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/1499-2022-04-07.jpg" alt="Sunbean Beaten Caffe, Instant Coffee Paste 250g Jar | Rich, Creamy and Frothy Beaten Coffee | Make Hot Coffee, Cappuccino or Cold Coffee"></a>
 
                                                     <div class="action_links">
                                                         <span class="inner product_data">
                                                             <ul>
                                                                                                                                 <input type="hidden" class="id" name="id" value="564" data-id="564">
                                                                                                                                 <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" type="number" id="qty-962" name="qty" data-min="1" min="1" max="1000000001" data-max="1000000001" data-max-allowed="11" value="1" readonly data-qty="1">
                                                                 <input type="hidden" class="varient" data-varient="962" name="varient" value="962" data-price='$ 225' data-mrp='$ 250' data-savings='10 % Off' checked>
                                                                                                                                 <input type="hidden" class="slug" value="sunbean-beaten-caffe-instant-coffee-paste-250g-jar-rich-creamy-and-frothy-beaten-coffee-make-hot-coffee-cappuccino-or-co" data-slug="sunbean-beaten-caffe-instant-coffee-paste-250g-jar-rich-creamy-and-frothy-beaten-coffee-make-hot-coffee-cappuccino-or-co">
                                                                                                                                 <li class="add_to_cart addtocart_single" data-id="564" data-varient="962" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a>
                                                                 </li>
                                                                 
                                                                                                                                 <li class="quick_button productmodal">
                                                                     <a title="quick view"><span class="fas fa-search"></span></a>
                                                                 </li>
                                                                 <li class="wishlist">
                                                                     <a title="Add to Wishlist" class="save" data-id='564'>
                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </span>
                                                     </div>
                                                 </div>
                                                 <figcaption class="product_content">
                                                     <h4 class="product_name">
                                                         <a href="sunbean-beaten-caffe-instant-coffee-paste-250g-jar-rich-creamy-and-frothy-beaten-coffee-make-hot-coffee-cappuccino-or-co.html"> Sunbean Beaten Caffe, Instant ... </a>
                                                     </h4>
                                                     <div class="price_box">
                                                         <span class="current_price"><!--Offer Price--> $ 225</span>
                                                         <span class="old_price"><s><!--M.R.P.:--> $ 250</s></span>
                                                                                                                 <span class="discount-percentage discount-product">10 % Off</span>
                                                                                                             </div>
                                                 </figcaption>
                                             </figure>
                                         </article>
                                     </div>
                                                                         <div class="product_items">
                                         <article class="single_product">
                                             <figure>
                                                                                                 <div class="product_thumb">
                                                     <a class="primary_img" href="tata-coffee-grand-filter-coffee-with-70-coffee-30-chicory.html"><img class="lazy" data-original="{{ asset('fontend/image/upload/images/2685-2022-04-07.jpg') }}" alt="Tata Coffee Grand Filter Coffee with 70% Coffee &amp; 30% Chicory"></a>
 
                                                     <div class="action_links">
                                                         <span class="inner product_data">
                                                             <ul>
                                                                                                                                 <input type="hidden" class="id" name="id" value="558" data-id="558">
                                                                                                                                 <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" type="number" id="qty-956" name="qty" data-min="1" min="1" max="100000001" data-max="100000001" data-max-allowed="11" value="1" readonly data-qty="1">
                                                                 <input type="hidden" class="varient" data-varient="956" name="varient" value="956" data-price='$ 155' data-mrp='Free' data-savings='' checked>
                                                                                                                                 <input type="hidden" class="slug" value="tata-coffee-grand-filter-coffee-with-70-coffee-30-chicory" data-slug="tata-coffee-grand-filter-coffee-with-70-coffee-30-chicory">
                                                                                                                                 <li class="add_to_cart addtocart_single" data-id="558" data-varient="956" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a>
                                                                 </li>
                                                                 
                                                                                                                                 <li class="quick_button productmodal">
                                                                     <a title="quick view"><span class="fas fa-search"></span></a>
                                                                 </li>
                                                                 <li class="wishlist">
                                                                     <a title="Add to Wishlist" class="save" data-id='558'>
                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </span>
                                                     </div>
                                                 </div>
                                                 <figcaption class="product_content">
                                                     <h4 class="product_name">
                                                         <a href="tata-coffee-grand-filter-coffee-with-70-coffee-30-chicory.html"> Tata Coffee Grand Filter Coffe... </a>
                                                     </h4>
                                                     <div class="price_box">
                                                         <span class="current_price"><!--Price--> $ 155</span>
                                                         <span class="old_price"></span>
                                                                                                             </div>
                                                 </figcaption>
                                             </figure>
                                         </article>
                                     </div>
                                                                         <div class="product_items">
                                         <article class="single_product">
                                             <figure>
                                                                                                 <div class="product_thumb">
                                                     <a class="primary_img" href="trelish-americano-black-coffee-liquid-brew-single-serve-sachet-100-coffee-brewed-coffee-in-liquid-form-just-add-water-1.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/7961-2022-04-07.jpg" alt="Trelish Americano Black Coffee Liquid Brew| Single serve sachet | 100% coffee | Brewed coffee in liquid form | Just add water |"></a>
 
                                                     <div class="action_links">
                                                         <span class="inner product_data">
                                                             <ul>
                                                                                                                                 <input type="hidden" class="id" name="id" value="569" data-id="569">
                                                                                                                                 <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" type="number" id="qty-968" name="qty" data-min="1" min="1" max="100000000000001" data-max="100000000000001" data-max-allowed="11" value="1" readonly data-qty="1">
                                                                 <input type="hidden" class="varient" data-varient="968" name="varient" value="968" data-price='$ 25' data-mrp='Free' data-savings='' checked>
                                                                                                                                 <input type="hidden" class="slug" value="trelish-americano-black-coffee-liquid-brew-single-serve-sachet-100-coffee-brewed-coffee-in-liquid-form-just-add-water-1" data-slug="trelish-americano-black-coffee-liquid-brew-single-serve-sachet-100-coffee-brewed-coffee-in-liquid-form-just-add-water-1">
                                                                                                                                 <li class="add_to_cart addtocart_single" data-id="569" data-varient="968" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a>
                                                                 </li>
                                                                 
                                                                                                                                 <li class="quick_button productmodal">
                                                                     <a title="quick view"><span class="fas fa-search"></span></a>
                                                                 </li>
                                                                 <li class="wishlist">
                                                                     <a title="Add to Wishlist" class="save" data-id='569'>
                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </span>
                                                     </div>
                                                 </div>
                                                 <figcaption class="product_content">
                                                     <h4 class="product_name">
                                                         <a href="trelish-americano-black-coffee-liquid-brew-single-serve-sachet-100-coffee-brewed-coffee-in-liquid-form-just-add-water-1.html"> Trelish Americano Black Coffee... </a>
                                                     </h4>
                                                     <div class="price_box">
                                                         <span class="current_price"><!--Price--> $ 25</span>
                                                         <span class="old_price"></span>
                                                                                                             </div>
                                                 </figcaption>
                                             </figure>
                                         </article>
                                     </div>
                                                                         <div class="product_items">
                                         <article class="single_product">
                                             <figure>
                                                                                                 <div class="product_thumb">
                                                     <a class="primary_img" href="nescafe-sunrise-rich-aroma-instant-ground-coffee-pouch-chicory-mix-200g-stabilo-made-with-slow-roasted-coffee-beans.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/9767-2022-04-07.jpg" alt="NESCAFE Sunrise Rich Aroma, Instant Ground Coffee Pouch-Chicory Mix, 200g Stabilo | Made With Slow Roasted Coffee Beans"></a>
 
                                                     <div class="action_links">
                                                         <span class="inner product_data">
                                                             <ul>
                                                                                                                                 <input type="hidden" class="id" name="id" value="563" data-id="563">
                                                                                                                                 <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" type="number" id="qty-961" name="qty" data-min="1" min="1" max="100000001" data-max="100000001" data-max-allowed="11" value="1" readonly data-qty="1">
                                                                 <input type="hidden" class="varient" data-varient="961" name="varient" value="961" data-price='$ 365' data-mrp='Free' data-savings='' checked>
                                                                                                                                 <input type="hidden" class="slug" value="nescafe-sunrise-rich-aroma-instant-ground-coffee-pouch-chicory-mix-200g-stabilo-made-with-slow-roasted-coffee-beans" data-slug="nescafe-sunrise-rich-aroma-instant-ground-coffee-pouch-chicory-mix-200g-stabilo-made-with-slow-roasted-coffee-beans">
                                                                                                                                 <li class="add_to_cart addtocart_single" data-id="563" data-varient="961" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a>
                                                                 </li>
                                                                 
                                                                                                                                 <li class="quick_button productmodal">
                                                                     <a title="quick view"><span class="fas fa-search"></span></a>
                                                                 </li>
                                                                 <li class="wishlist">
                                                                     <a title="Add to Wishlist" class="save" data-id='563'>
                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </span>
                                                     </div>
                                                 </div>
                                                 <figcaption class="product_content">
                                                     <h4 class="product_name">
                                                         <a href="nescafe-sunrise-rich-aroma-instant-ground-coffee-pouch-chicory-mix-200g-stabilo-made-with-slow-roasted-coffee-beans.html"> NESCAFE Sunrise Rich Aroma, In... </a>
                                                     </h4>
                                                     <div class="price_box">
                                                         <span class="current_price"><!--Price--> $ 365</span>
                                                         <span class="old_price"></span>
                                                                                                             </div>
                                                 </figcaption>
                                             </figure>
                                         </article>
                                     </div>
                                                                         <div class="product_items">
                                         <article class="single_product">
                                             <figure>
                                                                                                 <div class="product_thumb">
                                                     <a class="primary_img" href="nescaf%c3%83-classic-instant-ground-coffee.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/5018-2022-04-07.jpg" alt="NESCAFÃ Classic Instant Ground Coffee"></a>
 
                                                     <div class="action_links">
                                                         <span class="inner product_data">
                                                             <ul>
                                                                                                                                 <input type="hidden" class="id" name="id" value="568" data-id="568">
                                                                                                                                 <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" type="number" id="qty-967" name="qty" data-min="1" min="1" max="10000000001" data-max="10000000001" data-max-allowed="11" value="1" readonly data-qty="1">
                                                                 <input type="hidden" class="varient" data-varient="967" name="varient" value="967" data-price='$ 600' data-mrp='Free' data-savings='' checked>
                                                                                                                                 <input type="hidden" class="slug" value="nescafÃ-classic-instant-ground-coffee" data-slug="nescafÃ-classic-instant-ground-coffee">
                                                                                                                                 <li class="add_to_cart addtocart_single" data-id="568" data-varient="967" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a>
                                                                 </li>
                                                                 
                                                                                                                                 <li class="quick_button productmodal">
                                                                     <a title="quick view"><span class="fas fa-search"></span></a>
                                                                 </li>
                                                                 <li class="wishlist">
                                                                     <a title="Add to Wishlist" class="save" data-id='568'>
                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </span>
                                                     </div>
                                                 </div>
                                                 <figcaption class="product_content">
                                                     <h4 class="product_name">
                                                         <a href="nescaf%c3%83-classic-instant-ground-coffee.html"> NESCAFÃ Classic Instant Groun... </a>
                                                     </h4>
                                                     <div class="price_box">
                                                         <span class="current_price"><!--Tax Including Price--> $ 654</span>
                                                         <span class="old_price"></span>
                                                                                                             </div>
                                                 </figcaption>
                                             </figure>
                                         </article>
                                     </div>
                                                                         <div class="product_items">
                                         <article class="single_product">
                                             <figure>
                                                                                                 <div class="product_thumb">
                                                     <a class="primary_img" href="fix-coffee-fruity-berry-flavoured-instant-coffee-powder.html"><img class="lazy" data-original="https://ecartvendor.wrteam.co.in/upload/images/4868-2022-04-07.jpg" alt="FIX Coffee - Fruity Berry | Flavoured Instant Coffee Powder"></a>
 
                                                     <div class="action_links">
                                                         <span class="inner product_data">
                                                             <ul>
                                                                                                                                 <input type="hidden" class="id" name="id" value="560" data-id="560">
                                                                                                                                 <input type="hidden" class="qtyPicker qtyPicker-single-page qty" name="qty" type="number" id="qty-958" name="qty" data-min="1" min="1" max="100000001" data-max="100000001" data-max-allowed="11" value="1" readonly data-qty="1">
                                                                 <input type="hidden" class="varient" data-varient="958" name="varient" value="958" data-price='$ 249' data-mrp='$ 299' data-savings='17 % Off' checked>
                                                                                                                                 <input type="hidden" class="slug" value="fix-coffee-fruity-berry-flavoured-instant-coffee-powder" data-slug="fix-coffee-fruity-berry-flavoured-instant-coffee-powder">
                                                                                                                                 <li class="add_to_cart addtocart_single" data-id="560" data-varient="958" data-qty="1"><a title="Add to cart"><span class="fas fa-shopping-cart"></span></a>
                                                                 </li>
                                                                 
                                                                                                                                 <li class="quick_button productmodal">
                                                                     <a title="quick view"><span class="fas fa-search"></span></a>
                                                                 </li>
                                                                 <li class="wishlist">
                                                                     <a title="Add to Wishlist" class="save" data-id='560'>
                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </span>
                                                     </div>
                                                 </div>
                                                 <figcaption class="product_content">
                                                     <h4 class="product_name">
                                                         <a href="fix-coffee-fruity-berry-flavoured-instant-coffee-powder.html"> FIX Coffee - Fruity Berry | Fl... </a>
                                                     </h4>
                                                     <div class="price_box">
                                                         <span class="current_price"><!--Offer Price--> $ 249</span>
                                                         <span class="old_price"><s><!--M.R.P.:--> $ 299</s></span>
                                                                                                                 <span class="discount-percentage discount-product">17 % Off</span>
                                                                                                             </div>
                                                 </figcaption>
                                             </figure>
                                         </article>
                                     </div>
                                                                     </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
             </section>
 </div>
 
 <div class="modal fade" id="pincodeModalsingle" tabindex="-1" aria-labelledby="pincodeModalLabelsingle" aria-hidden="true">
     <div class="pincode modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="defaulthead modal-header">
                 <h5 class="modal-title" id="pincodeModalLabelsingle">Check Pincode</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-header">
                 <h6 class="warning-title">Enter Pincode</h6>
             </div>
             <div class="modal-body">
                 <div class="productwrapper">
                     <form action="https://ecartmultivendorweb.thewrteam.in/product/continental-coffee-xtra-instant-coffee" method="POST">
                         <input type="text" name="product_id" class="form-control" value="566" hidden>
                         <input type="text" name="slug" class="form-control" value="continental-coffee-xtra-instant-coffee" hidden>
                         <input type="text" name="pincode" class="form-control">
                         <button class="btn btn-primary">Apply</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 <section class="subscribe-news">
    <div class="newsletter">
       <div class="container-fluid">
          <div class="newsletter-inner center-sm">
             <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                   <div class="newsletter-bg">
                      <div class="row  align-items-center">
                         <div class="col-xl-6 col-lg-6">
                            <div class="d-lg-flex align-items-center">
                               <div class="newsletter-icon">
                                  <em class="far fa-envelope-open fa-3x"></em>
                               </div>
                               <div class="newsletter-title">
                                  <h2 class="main_title">Subscribe To Our Newsletter</h2>
                                  <div class="sub-title">Sign up for newsletter and Get upto 50% off
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-xl-6 col-lg-6">
                            <form action="https://ecartmultivendorweb.thewrteam.in/newsletter" method="POST" class="ajax-form">
                               <input type="hidden" name="_token" value="6qU3v4alT8YfBphfAIahMKpvvbuL0SfLcx8YeQIK">                              <div class="formResponse"></div>
                               <div class="newsletter-box">
                                  <input type="email"  id="email" name="email" placeholder="Email Here..." required>
                                  <button title="Subscribe" name="submit" type="submit" class="btn-color">subscribe</button>
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 
 
 
<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:142.60000610351562px;top:216.49996948242188px;height:500px;width:505.75px;"><div class="zoomWindowContainer" style="width: 200px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 505.75px; height: 500px; float: left; display: none; cursor: crosshair; background-repeat: no-repeat; position: absolute; background-image: url(&quot;https://ecartvendor.wrteam.co.in/upload/images/3644-2022-04-08.jpg&quot;);" class="zoomWindow">&nbsp;</div></div></div><div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:142.60000610351562px;top:216.49996948242188px;height:500px;width:505.75px;"><div class="zoomWindowContainer" style="width: 200px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 505.75px; height: 500px; float: left; display: none; cursor: default; background-repeat: no-repeat; position: absolute; background-image: url(&quot;https://ecartvendor.wrteam.co.in/upload/images/3644-2022-04-08.jpg&quot;);" class="zoomWindow">&nbsp;</div></div></div></body></html>
@endsection