<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Amazing Grace Agents</title>
    <!-- bootstrap systems -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- awesome icon fonts-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/linearicon/style.css">
    <!--classic navigation effects-->
    <link rel="stylesheet" href="css/classy-nav.min.css">
    <!--animation stylesheet-->
    <link rel="stylesheet" href="css/animate.css">
    <!-- user feel design.-->
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css">
    <!--custom stylesheets-->
    <link rel="stylesheet" href="css/custom.css">
    <style>
        .page_section {
            padding-bottom: 100px;
        }

        .about_text h5 {
            font-family: 'Roboto', serif;
            font-size: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .about_text .about_text_right {
            text-align: justify;
            margin-left: auto;
            margin-right: 5px;
        }

        .about_text .about_text_left {
            margin-right: auto;
            text-align: justify;
            margin-left: 5px;

        }

        #quality_accordion h5 {
            background-color: #3aafa9 !important;
            outline: none !important;
            border: 2px solid #2b7a78;
            border: none;
        }

    </style>
</head>
<body>
<!--include search wrapper ansd its content -->
<?php include "includes/search.php" ?>

<!--page preloader effect -->
<div id="preloader">
    <div class="loader"></div>
</div>

<!--===========================header area==========================-->
<header class="header_area">
    <div class="top_header">
        <div class="container-fluid">
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
                    <a href="account/register" target="_blank"><i class="fa fa-user-circle-o"></i>Register</a>
                    <a href="#" target="_blank"><i class="fa fa-sign-in"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
    <!--===include navigation bar template ===-->
    <?php require "includes/navigation_menu.php" ?>
</header>
<!--===========================end header area==========================-->
<!--===========================start sign board==========================-->
<section class="page_sign_board text-white">
    <div class="container">
        <h2>About Us</h2>
    </div>
</section>
<!--===========================end sign board==========================-->

<!--===========================page navigator(aka breadcrumb)==========================-->
<section class="page_navigator">
    <div class="container">
        <a href="index"><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i>About Us</span>
    </div>
</section>
<!--===========================end page navigator==========================-->
<section class="page_section">
    <div class="container">
        <div class="mb-5">
            <img src="images/aboutus.jpg" alt="">
        </div>
        <div class="row about_text">
            <div class="col-lg-6 about_text_left">
                <h5>About Us</h5>
                <p>Amazing Grace Agent is an estate firm inspired by the motive to serve at all cost and with true
                    Nigerian set up, every person to enter our sphere is welcomed as a member of a close-knit family.
                    Our staff are friendly and approachable and are always easy to access. Amazing Grace Agent firm is
                    unique in that we introduce our clients to each other and encourage collaboration and camaraderie.
                    Our clients are frequently invited to join in meetings on building issues. Not only does open
                    communication offer clients the opportunity to learn from each other, it allows for brainstorming of
                    best practices and new ideas.
                </p>
            </div>
            <div class="col-lg-5 offset-lg-1 about_text_right">
                <h5>Our Quality</h5>
                <div id="quality_accordion">
                    <h5>Education and Experience</h5>
                    <p>We ensure clients has a proper knowledge of the decision they make to put us incharge of having
                        to managed their properties by ensuring a proper legal proceedings and the helping them keep a
                        target of what they should expect from certain property.</p>
                    <h5>Descretion</h5>
                    <p>maintaining firm boundaries that make their relationships with their employers straightforward
                        and as effective as possible.</p>
                    <h5>Manners</h5>
                    <p>We are able to able to interact with anybody in a polite and deferential manner, greeting guests
                        and handling difficult social situations with tact and poise.</p>
                    <h5>Organization</h5>
                    <p>Our Agents take care of a wide array of issues within the household, so organization is crucial
                        to success. Managing an estate and the life of a family requires the ability to multitask
                        without becoming rattled or forgetful.</p>
                    <h5>Reliabilty</h5>
                    <p>We make sure that everything runs smoothly in the employer's household. This means being
                        trustworthy, reliable and easy-to-reach in the case of a problem or emergency.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!--===================== CORE SERVICES =========================-->
<section class="service_area pad_margin">
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
<!-- jquery UI.-->
<script src="assets/jquery-ui/jquery-ui.js"></script>
<script src="js/states_cities.js"></script>
<script src="js/custom.js"></script>
<script>
    //contact us quality accordion code. with jquery ui
    $("#quality_accordion").accordion({
        animate: 1000,
        active: 1,
        collapsible: true,
        event: 'click',
        heightStyle: 'auto'
    });
</script>
</body>
</html>