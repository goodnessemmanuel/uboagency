<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Amazing Grace Agents</title>
    <!-- bootstrap systems -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- for special icons like certicates, spacecrafts et al-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- awesome icon fonts by davegandy-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--linear icons similar to font icons-->
    <link rel="stylesheet" href="assets/linearicon/style.css">
    <!--classic navigation effects-->
    <link rel="stylesheet" href="css/classy-nav.min.css">
    <!--animation stylesheet-->
    <link rel="stylesheet" href="css/animate.css">
    <!-- my own custom stylesheet.-->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
<!--include search wrapper and its content -->
<?php include "includes/search.php" ?>

<!--page preloader effect -->
<div id="preloader">
    <div class="loader"></div>
</div>

<!--===========================header area==========================-->
<header class="header_area">
    <div class="top_header">
        <div class="container">
            <div class="row">
                <div class="top_header_left col-md-6">
                    <div class="contact_info">
                        <h6><i class="fa fa-phone"></i>(+234)7067418807</h6>
                    </div>
                    <div class="contact_info">
                        <h6><i class="fa fa-envelope"></i>info@ubo-agency.com</h6>
                    </div>
                </div>
                <div class="top_header_right col-md-6">
                    <a href="account/register"><i class="lnr lnr-lock"></i>Add Listing</a>
                    <a href="#"><i class="fa fa-sign-in"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
    <!--===include navigation bar Area ===-->
    <?php require "includes/navigation_menu.php" ?>
</header>
<!--===========================end header area==========================-->

<!--===========================banner area==========================-->
<section class="banner_area">
    <div class="banner owl-carousel">
        <!-- single slide -->
        <div class="single_slide bg_img banner_bg_overlay" style="background-image: url('images/bg_img/bg_img1.jpg')">
            <div class="container h-100"><!--note: align-items works with height attribute-->
                <div class="row h-100 align-items-center"><!--note: align-items works with height attribute-->
                    <div class="col-lg-12">
                        <div class="slides_content">
                            <h3 data-animation="fadeInUp" data-delay="100ms">Welcome to amazing grace agent</h3>
                            <p data-animation="fadeInUp" data-delay="400ms">Our team of estate surveyors and
                                professionals are always available to advice you on issues regarding property
                                management, sales and ownership.</p>
                            <p><a href="#" data-animation="fadeInUp" data-delay="700ms">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slide -->
        <div class="single_slide bg_img banner_bg_overlay" style="background-image: url('images/bg_img/bg_img2.jpg')">
            <div class="container h-100"><!--note: align-items works with height attribute-->
                <div class="row h-100 align-items-center"><!--note: align-items works with height attribute-->
                    <div class="col-lg-12">
                        <div class="slides_content">
                            <h3 data-animation="fadeInUp" data-delay="100ms">Find your place with our local life
                                style</h3>
                            <p data-animation="fadeInUp" data-delay="400ms">Search real estate property records, houses,
                                land and more in Abuja, Lagos, Port Harcourt
                                <br>metropolis and its environs.
                            </p>
                            <p><a href="#" data-animation="fadeInUp" data-delay="700ms">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slide -->
        <div class="single_slide bg_img banner_bg_overlay" style="background-image: url('images/bg_img/bg_img3.jpg')">
            <div class="container h-100">
                <div class="row h-100 align-items-center"><!--note: align-items works with height attribute-->
                    <div class="col-lg-12">
                        <div class="slides_content">
                            <h3 data-animation="fadeInUp" data-delay="100ms">Attractive home purchase offers</h3>
                            <p data-animation="fadeInUp" data-delay="400ms">Find property advice from the most
                                comprehensive source data.</p>
                            <p><a href="#" data-animation="fadeInUp" data-delay="700ms">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slide -->
        <div class="single_slide bg_img banner_bg_overlay" style="background-image: url('images/bg_img/bg_img4.jpg')">
            <div class="container h-100"><!--note: align-items works best with height attribute-->
                <div class="row h-100 align-items-center"><!--note: align-items works with height attribute-->
                    <div class="col-lg-12">
                        <div class="slides_content">
                            <h3 data-animation="fadeInUp" data-delay="100ms">Find your new home</h3>
                            <p data-animation="fadeInUp" data-delay="400ms">The joy of home owning with guarantee
                                security, pollution free environment, hangouts and attractive tourism.</p>
                            <p><a href="#" data-animation="fadeInUp" data-delay="700ms">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single slide -->
        <div class="single_slide bg_img banner_bg_overlay" style="background-image: url('images/bg_img/bg_img5.jpg')">
            <div class="container h-100">
                <div class="row h-100 align-items-center"><!--note: align-items works with height attribute-->
                    <div class="col-lg-12">
                        <div class="slides_content">
                            <h3 data-animation="fadeInUp" data-delay="100ms">Move to what moves you</h3>
                            <p data-animation="fadeInUp" data-delay="400ms">No matter your vision in life, a good home
                                to settle with your family will enhance it even more. </p>
                            <p><a href="#" data-animation="fadeInUp" data-delay="700ms">View Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===========================end banner area==========================-->

<!--===========================section for properties==========================-->
<section class="property_area pad_margin">
    <div class="container">
        <div class="section_title text-center">
            <h3>RECENT PROPERTIES</h3>
            <p>Recent properties sold/leased and their respective prices</p>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="property_item" style="background-image: url('images/recent_properties/p1.jpg');">
                    <h5 class="rent">For Rent</h5>
                    <div class="property_detail">
                        <div class="address">
                            <h5>26 Yakubu Gowon Crescent</h5>
                            <p><i class="fa fa-map-marker"></i>AYA, Asokoro Abuja</p>
                        </div>
                        <h5 class="price">&#8358;19,000,000.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="property_item" style="background-image: url('images/recent_properties/p2.jpg');">
                    <h5 class="sale">For Sale</h5>
                    <div class="property_detail">
                        <div class="address">
                            <h5>174 Benema Layout Road C</h5>
                            <p><i class="fa fa-map-marker"></i>Victoria Island, Lagos</p>
                        </div>
                        <h5 class="price">&#8358;100,000,000.00</h5>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <div class="row">
            <div class="col-md-6">
                <div class="property_item" style="background-image: url('images/recent_properties/p3.jpg');">
                    <h5 class="rent">For Rent</h5>
                    <div class="property_detail">
                        <div class="address">
                            <h5>117 Dubai Street, Block 4 El-Kings Estate</h5>
                            <p><i class="fa fa-map-marker"></i>Gwarimpa, Abuja</p>
                        </div>
                        <h5 class="price">&#8358;50,000.00/month</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="property_item" style="background-image: url('images/recent_properties/p4.jpg');">
                    <h5 class="sale">For Sale</h5>
                    <div class="property_detail">
                        <div class="address">
                            <h5>190 Dallas Street East-West Road</h5>
                            <p><i class="fa fa-map-marker"></i>Rumuokoro, Port Harcourt</p>
                        </div>
                        <h5 class="price">&#8358;76,000,000.00</h5>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>
</section>
<!--==================== end property section===========================-->

<!--===================== CORE SERVICES =========================-->
<section class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="service_area_title">
                    <h3>Our Services</h3>
                    <p>We provide perfect service for</p>
                </div>
                <div class="services">
                    <div class="services_offer">
                        <i class="fa fa-home"></i>
                        <div class="service_detail">
                            <h5>Properties Management</h5>
                            <p>We deal directly with prospects and tenants, saving you time and worry over marketing
                                your rentals, collecting rents and responding to tenants complaints.</p>
                        </div>
                    </div>
                    <div class="services_offer">
                        <i class="fa fa-briefcase"></i>
                        <div class="service_detail">
                            <h5>Buying and Selling</h5>
                            <p>We offer traditional marketing services for property owners looking to sell as well as
                                showing and transaction coordination for those looking to purchase real estate
                                properties.</p>
                        </div>
                    </div>
                    <div class="services_offer">
                        <i class="fa fa-comments"></i>
                        <div class="service_detail">
                            <h5>Consultant</h5>
                            <p>We have professionally trained experts in the art and science of estate/property
                                management to direct and supervise an interest in landed properties with the sole aim of
                                obtaining optimum returns</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 img-fluid">
                <img id="service_image" src="images/service12.jpg" alt="Services Image">
            </div>
        </div>
    </div>
</section>
<!--================end services and about us section===============-->

<!--==================available properties===================-->
<section class="available_property pad_margin">
    <div class="container">
        <div class="section_title text-center">
            <h3>Available Properties</h3>
            <h5>browse houses and flats to let or sale in your neighbourhood</h5>
        </div>
        <div class="section_content">
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6">
                    <div class="avail_property_item">
                        <div class="property_feature">
                            <div class="property_pics"
                                 style="background-image: url('images/available_properties/p1.jpg');">
                                <h5 class="sale">For Sale</h5>
                            </div>
                            <div class="property_text">
                                <div class="property_text_title text-center">
                                    <h5>117 Elems Avenue</h5>
                                    <p><i class="fa fa-map-marker"></i>Kubwa, Abuja</p>
                                </div>
                                <div class="property_content">
                                    <div class="room_info d-flex">
                                        <div class="room_info_left">
                                            <p><i class="fa fa-th-large"></i>600 square foot</p>
                                            <p><i class="fa fa-bed"></i>6 bedrooms</p>
                                            <p><i class="fa fa-user"></i> Okopi Oki</p>
                                        </div>
                                        <div class="room_info_right">
                                            <p><i class="fa fa-car"></i>2 Garages</p>
                                            <p><i class="fa fa-bath"></i>6 bathrooms</p>
                                            <p><i class="fa fa-clock-o"></i>6 days ago</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="room_price">&#8358;8900000</a>
                            </div>
                        </div>
                    </div>
                </div><!--end column-->
                <div class="col-lg-4 col-md-6">
                    <div class="avail_property_item">
                        <div class="property_feature">
                            <div class="property_pics"
                                 style="background-image: url('images/available_properties/p2.jpg');">
                                <h5 class="rent">For Rent</h5>
                            </div>
                            <div class="property_text">
                                <div class="property_text_title text-center">
                                    <h5>45 Josh Crescent</h5>
                                    <p><i class="fa fa-map-marker"></i>GRA, Port Harcourt</p>
                                </div>
                                <div class="property_content">
                                    <div class="room_info d-flex">
                                        <div class="room_info_left">
                                            <p><i class="fa fa-th-large"></i>800 square foot</p>
                                            <p><i class="fa fa-bed"></i> 15 bedrooms</p>
                                            <p><i class="fa fa-user"></i> John Duke</p>
                                        </div>
                                        <div class="room_info_right">
                                            <p><i class="fa fa-car"></i>3 Garages</p>
                                            <p><i class="fa fa-bath"></i>8 bathrooms</p>
                                            <p><i class="fa fa-clock-o"></i>6 days ago</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="room_price">&#8358;17500/month</a>
                            </div>
                        </div>
                    </div>
                </div><!--end column-->
                <div class="col-lg-4 col-md-12">
                    <div class="avail_property_item">
                        <div class="property_feature">
                            <div class="property_pics"
                                 style="background-image: url('images/available_properties/p3.jpg');">
                                <h5 class="sale">For Sale</h5>
                            </div>
                            <div class="property_text">
                                <div class="property_text_title text-center">
                                    <h5>Block B Calosmilla Layout</h5>
                                    <p><i class="fa fa-map-marker"></i>Festac, Lagos</p>
                                </div>
                                <div class="property_content">
                                    <div class="room_info d-flex">
                                        <div class="room_info_left">
                                            <p><i class="fa fa-th-large"></i>200 square foot</p>
                                            <p><i class="fa fa-bed"></i>3 bedrooms</p>
                                            <p><i class="fa fa-user"></i> Jude Johnson</p>
                                        </div>
                                        <div class="room_info_right">
                                            <p><i class="fa fa-car"></i>1 Garage</p>
                                            <p><i class="fa fa-bath"></i>4 bathrooms</p>
                                            <p><i class="fa fa-clock-o"></i>2 days ago</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="room_price">&#8358;19000000</a>
                            </div>
                        </div>
                    </div>
                </div><!--end column-->
            </div> <!--end row-->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="avail_property_item">
                        <div class="property_feature">
                            <div class="property_pics"
                                 style="background-image: url('images/available_properties/p4.jpg');">
                                <h5 class="sale">For Sale</h5>
                            </div>
                            <div class="property_text">
                                <div class="property_text_title text-center">
                                    <h5>117 Elems Avenue</h5>
                                    <p><i class="fa fa-map-marker"></i>Kubwa, Abuja</p>
                                </div>
                                <div class="property_content">
                                    <div class="room_info d-flex">
                                        <div class="room_info_left">
                                            <p><i class="fa fa-th-large"></i>600 square foot</p>
                                            <p><i class="fa fa-bed"></i>6 bedrooms</p>
                                            <p><i class="fa fa-user"></i> Tony Bede</p>
                                        </div>
                                        <div class="room_info_right">
                                            <p><i class="fa fa-car"></i>2 Garages</p>
                                            <p><i class="fa fa-bath"></i>6 bathrooms</p>
                                            <p><i class="fa fa-clock-o"></i>6 days ago</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="room_price">&#8358;56000000</a>
                            </div>
                        </div>
                    </div>
                </div><!--end column-->
                <div class="col-lg-4 col-md-6">
                    <div class="avail_property_item">
                        <div class="property_feature">
                            <div class="property_pics"
                                 style="background-image: url('images/available_properties/p5.jpeg');">
                                <h5 class="rent">For Rent</h5>
                            </div>
                            <div class="property_text">
                                <div class="property_text_title text-center">
                                    <h5>45 Josh Crescent</h5>
                                    <p><i class="fa fa-map-marker"></i>GRA, Port Harcourt</p>
                                </div>
                                <div class="property_content">
                                    <div class="room_info d-flex">
                                        <div class="room_info_left">
                                            <p><i class="fa fa-th-large"></i>700 square foot</p>
                                            <p><i class="fa fa-bed"></i>12 bedrooms</p>
                                            <p><i class="fa fa-user"></i> Jerry Smith</p>
                                        </div>
                                        <div class="room_info_right">
                                            <p><i class="fa fa-car"></i>5 Garages</p>
                                            <p><i class="fa fa-bath"></i>12 bathrooms</p>
                                            <p><i class="fa fa-clock-o"></i>1 day ago</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="room_price">&#8358;30000/month</a>
                            </div>
                        </div>
                    </div>
                </div><!--end column-->
                <div class="col-lg-4 col-md-12">
                    <div class="avail_property_item">
                        <div class="property_feature">
                            <div class="property_pics"
                                 style="background-image: url('images/available_properties/p6.jpg');">
                                <h5 class="sale">For Sale</h5>
                            </div>
                            <div class="property_text">
                                <div class="property_text_title text-center">
                                    <h5>Block B Calosmilla Layout</h5>
                                    <p><i class="fa fa-map-marker"></i>Festac, Lagos</p>
                                </div>
                                <div class="property_content">
                                    <div class="room_info d-flex">
                                        <div class="room_info_left">
                                            <p><i class="fa fa-th-large"></i>250 square foot</p>
                                            <p><i class="fa fa-bed"></i>3 bedrooms</p>
                                            <p><i class="fa fa-user"></i> Jude John</p>
                                        </div>
                                        <div class="room_info_right">
                                            <p><i class="fa fa-car"></i>1 Garage</p>
                                            <p><i class="fa fa-bath"></i>4 bathrooms</p>
                                            <p><i class="fa fa-clock-o"></i>10 days ago</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="room_price">&#8358;90000000</a>
                            </div>
                        </div>
                    </div>
                </div><!--end column-->
            </div> <!--end row-->
        </div>
    </div>
</section>
<!--=================end available apartments=======================-->

<!--====================client feedback=============================-->
<section class="testimonial_area">
    <div class="container">
        <div class="row testimonials_inner">
            <div class="col-lg-4 col-md-8 md-offset-4">
                <div class="testi_left_text">
                    <h4>Client’s Feedback</h4>
                    <p>At Amazing Grace Agent we value our customers and strive to provide them with a level of service
                        the other agents simply can't match. We are however never satisfied and are always looking for
                        ways to improve.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="testi_slider owl-carousel">
                    <div class="item">
                        <div class="testi_item">
                            <img src="images/testimonials/oche.png" alt="">
                            <p>Oche and team@AGA have provided excellent service from the day I signed my property over.
                                I have been very happy with everything they have done for me. keep up the good
                                work. </p>
                            <h4>Emmanuel Cletus</h4>
                            <h6>CEO at O.C. Tech. Intl. </h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="images/testimonials/micheal.png" alt="">
                            <p>I challenge my letting agent to Oche at Amazing Grace Agent and they found a suitable
                                tenant in a short period of time and have managed the property in a professional
                                mannner.</p>
                            <h4>Micheal Nicholas</h4>
                            <h6>CEO at Michael Conglomerates</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="images/testimonials/fredrick.png" alt="">
                            <p>In my experience i have found AGA to be the most prompt, professional and adroit. I would
                                highly recommend this company, especially if you value your own personal time and want
                                the best service.</p>
                            <h4>Fredrick Uzor</h4>
                            <h6>Programmer at Gel Links</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="images/testimonials/priye.png" alt="">
                            <p>My partner and I have really appreciated our dealings with AGA. Oche and the team are
                                acutely aware of property market and their advice saves you both time and money.</p>
                            <h4>Priye Mark</h4>
                            <h6>Staff at Show Model International</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="images/testimonials/nzekwe.png" alt="">
                            <p>I have recently contracted Amazing Grace Agent(AGA) to take over the management of my
                                investment of properties in Abuja. Oche is a highly professional and knowledgeable
                                property investment.</p>
                            <h4>Nzekwe Emmanuel</h4>
                            <h6>Programmer at SoftTech</h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi_item">
                            <img src="images/testimonials/jude.png" alt="">
                            <p>Somtoochukwu and I would like to take this opportunity to thank you for your assistance
                                with regards to property managing our investment based in Port Harcourt.</p>
                            <h4>Jude Ikechukwu</h4>
                            <h6>C.E.O IK Oil & Gas</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>
</section>
<!--================end feedback section========================-->

<!--============popular cities in the Nigeria===============-->
<section class="city_area pad_margin">
    <div class="container">
        <div class="main_title">
            <h3>Popular cities in Nigeria</h3>
            <p>We live in a computer age where information technology is
                of crucial importance. Just make your choice of which city you
                want to live in and we will take you there.
            </p>
        </div>
        <div class="row h-100">
            <div class="col-lg-6 mb-4">
                <div class="city_item">
                    <div class="city_item_top">
                        <div class="item_content">
                            <h4>Lagos</h4>
                            <p>870 Properties</p>
                            <a href="#">View</a>
                        </div>
                    </div>
                    <div class="city_item_bottom">
                        <div class="item_content">
                            <h4>Port Harcourt</h4>
                            <p>450 Properties</p>
                            <a href="#">View</a>
                        </div>
                    </div>
                </div>
            </div> <!--end column-->
            <div class="col-lg-6">
                <div class="city_item">
                    <div class="item_content">
                        <h4>Abuja</h4>
                        <p>980 Properties</p>
                        <a href="#">View</a>
                    </div>
                </div>
            </div> <!--end column-->
        </div><!--end row-->
    </div>
</section>
<!--============end popular cities in the Nigeria===============-->

<!--======= why we are the best==================-->
<section class="best">
    <div class="container">
        <div class="best_title">
            <h3>Why We are the best</h3>
            <p>We simply are the best for the following reasons</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="best_item">
                    <h4><i class="lnr lnr-user"></i>Expert Technician</h4>
                    <p>We have well trained technician with more than 10 years knowledge and experience in administering
                        and securing the disposal and aquisition of property and ensuring that it is completed
                        legally.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="best_item">
                    <h4><i class="lnr lnr-phone"></i>Great Support</h4>
                    <p>our toll free lines are availabe 24 hours in a day, 7 days a month, 365 days a year, the welfare
                        of our clients are of paramount importance to us, as such we live upto their expectations
                        anytime</p>
                </div>
            </div>
        </div><!--end row-->
        <div class="row">
            <div class="col-md-6">
                <div class="best_item">
                    <h4><i class="lnr lnr-license"></i>Professional Service</h4>
                    <p>Our major professional services spans from handling enquiries about properties from potential
                        buyers, travelling to properties and conducting viewings. Negotiating the sale and letting
                        properties</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="best_item">
                    <h4><i class="lnr lnr-rocket"></i>Technical Skill</h4>
                    <p>Negotiation and selling skills, ambition drive and charisma, good communication skills and the
                        ability to maintain positive relationship with clients. Willingness to travel and spend time out
                        of the office.</p>
                </div>
            </div>
        </div> <!--end row-->
    </div>
</section>
<!--=======end why we are the best==================-->

<!--==================  include footer==================-->
<?php include "includes/footer.php" ?>

<!-- ##### Javascript Script ##### -->
<!-- jquery 2.2.4 -->
<script src="js/jquery/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- popper js-->
<script src="js/popper.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- some javascript plugins used -->
<script src="js/plugins/plugins.js"></script>
<script src="js/states_cities.js"></script>
<script src="js/custom.js"></script>
</body>
</html>