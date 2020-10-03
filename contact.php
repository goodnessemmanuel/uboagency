<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Amazing Grace Agents</title>
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
    <!-- user feel design.-->
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css">
    <!-- my own custom stylesheet.-->
    <link rel="stylesheet" href="css/custom.css">
    <style>
        .page_section {
            padding-bottom: 100px;
        }

        .form_wrapper {
            position: relative;
            width: 100%;
            max-width: 450px;
            top: 0;
            left: 0;
            margin: 20px 0 30px;
            margin-left: -15px;
            margin-right: auto;
            border: none;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            background-color: #feffff;
            /* text-align: center; */
            -webkit-box-shadow: 25.25px 25.25px 25px 10px rgba(158, 158, 158, 0.3);
            box-shadow: 25.25px 25.25px 25px 10px rgba(158, 158, 158, 0.3);
        }

        @media screen and (max-width: 991px) {
            .form_wrapper {
                margin-top: 0px;
                border-radius: 0;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

        }

        .form_content {
            position: relative;
            padding: 5px 0 20px; /*top left/right bottom*/
            width: 100%;
        }

        .form_content .form_tab {
            width: 100%;
            /*margin: 0 0 40px;top left/right bottom*/
            border: none;
        }

        form.form_detail {
            padding: 0 20px;
        }

        .form_item .form_row {
            width: 100%;
            position: relative;
        }

        .form_item .form_row .form_row_inner {
            width: 100%;
            position: relative;
        }

        .form_item .form_row .form_row_inner .label {
            position: absolute;
            top: 25px;
            left: 10px;
            font-size: 14px;
            color: rgba(0, 0, 0, 0.50);
            font-weight: 400;
            transition: all .2s ease;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;

        }

        .form_item .form_row_inner .eye {
            position: absolute;
            z-index: 2;
            text-align: right;
            width: 50px;
            height: 50px;
            right: 0;
            top: 0;
            left: auto;
            margin-right: 8px;
            margin-top: 10px;
            font-size: 16px;
            font-weight: 600;
        }

        .form_row input {
            width: 100%;
            height: 52px;
            padding: 15px 10px 2px 10px;
            margin-bottom: 10px;
            border: 1px solid #324a4e;
            background: transparent;
            cursor: pointer;
        }

        .form_row input:focus + .label,
        .form_row input:valid + .label { /*if the required(valid) input type in this case text is entered*/
            -webkit-transform: translateY(-26px) scale(0.8);
            transform: translateY(-26px) scale(0.8);
        }

        .form_item .form_row_last .register {
            background-color: #2b7a78;
            border-radius: 15px;
            cursor: pointer;
            margin: 5px auto;
            /* padding: 10px; */
            color: #feffff;
            border: 1px solid #feffff;
            font-weight: 600;
            display: block;
            width: 150px;
            line-height: 38px;
            text-align: center;
        }

        .form_item .form_row_last .register:hover {
            background-color: #3aafa9;
        }

    </style>
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
                    <a href="account/register.php" target="_blank"><i class="fa fa-user-circle-o"></i>Register</a>
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
        <h2>Contact Us</h2>
    </div>
</section>
<!--===========================end sign board==========================-->

<!--===========================page navigator(aka breadcrumb)==========================-->
<section class="page_navigator">
    <div class="container">
        <a href="index.php"><i class="fa fa-home"></i>Home</a>
        <span><i class="fa fa-angle-right"></i>Contact Us</span>
    </div>
</section>
<!--===========================end page navigator==========================-->
<section class="page_section">
    <div class="container">
        <div class="col-md-12 m-0">
            <div class="form_wrapper">
                <div class="form_content">
                    <div id="form_tab" class="form_tab">
                        <form class="form_detail" action="" method="POST">
                            <div class="form_item" id="form_register">
                                <div class="form_row">
                                    <label class="form_row_inner">
                                        <input type="text" name="full_name" id="full_name" required>
                                        <span class="label">Client's Name(e.g John Duke)</span>
                                    </label>
                                </div>
                                <div class="form_row">
                                    <label class="form_row_inner">
                                        <input type="text" name="email" id="email" required>
                                        <span class="label">Email(e.g. duke@gmail.com)</span>
                                    </label>
                                </div>
                                <div class="form_row">
                                    <label class="form_row_inner">
                                        <input type="text" name="phone" id="phone" required>
                                        <span class="label">Phone(e.g. 08067543452)</span>
                                    </label>
                                </div>
                                <div class="form_row_last">
                                    <input type="submit" value="Send" class="register">
                                </div>
                            </div>
                        </form><!--end registration form-->
                    </div> <!--end form tab test-->
                </div>
            </div><!--end form wrapper-->
        </div><!--end column-->
    </div>
</section>

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

</body>
</html>