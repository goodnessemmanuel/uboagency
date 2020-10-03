<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | UBO Agencies</title>
    <!-- bootstrap systems -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/linearicon/style.css">
    <link rel="stylesheet" href="../css/classy-nav.min.css">
    <!--animation stylesheet-->
    <link rel="stylesheet" href="../css/animate.css">
    <!--custom stylesheet.-->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="css/custom.css">
    <style>
        input.login{
            height: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
<!--include search wrapper and its content -->
<?php include "../includes/search.php" ?>

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
                    <a href="register" target="_blank"><i class="fa fa-user-circle-o"></i>Register</a>
                    <a href="login" target="_blank"><i class="fa fa-sign-in"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
    <!--===include navigation bar template ===-->
    <?php require "../includes/navigation_menu.php" ?>
</header>
<!--===========================end header area==========================-->
<!--===========================start sign board==========================-->
<section class="page_sign_board text-white">
    <div class="container">
        <h2>Login</h2>
        <div class="page_navigator text-light">
            <a href="../index"><i class="fa fa-home"></i>Home</a>
            <span><i class="fa fa-angle-right"></i>Login</span>
        </div>
    </div>
</section>
<!--===========================end sign board==========================-->

<section class="page_section">
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-6 offset-md-2">
                <div class="form_wrapper">
                    <div class="form_content">
                        <p class="form_response text-center"></p>
                        <form name="register_data" id="register" class="form_detail" action="verify-login" method="POST">
                            <div class="form_item">
                                <div class="form_row form-group">
                                    <label class="form_label">Username(or email)
                                        <input class="login form-control" type="text" name="username" id="username" required>
                                    </label>
                                </div>
                                <div class="form_row form-group">
                                    <label class="form_label">Password
                                        <input class="login form-control" type="password" name="password" id="password" required>
                                        <span class="eye" onclick="showPassword()"><i class="fa fa-eye-slash"></i></span>
                                    </label>
                                </div>
                                <div class="form_row_last form-group">
                                    <input type="submit" name="submit" value="Login" class="register">
                                </div>
                                <div class="form_link form-group">
                                    Click <a>here</a> to register
                                </div>
                            </div>
                        </form><!--end registration form-->
                    </div>
                </div><!--end form wrapper-->
            </div>
        </div><!--end row-->
    </div>
</section>

<!--==================  include footer==================-->
<?php include "../includes/footer.php" ?>

<!-- ##### Javascript Script ##### -->
<!-- jquery 2.2.4 -->
<script src="../js/jquery/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- popper js-->
<script src="../js/popper.js"></script>
<!-- bootstrap js -->
<script src="../js/bootstrap/bootstrap.min.js"></script>
<!-- some javascript plugins used -->
<script src="../js/plugins/plugins.js"></script>
<script src="../js/states_cities.js"></script>
<script src="../js/custom.js"></script>
<script>
    $(document).ready(function() {
        let use = "", pas = "", log = "";
        $('#register').submit(function (event) {
            event.preventDefault();
            use = $("#username").val();
            pas = $("#password").val();
            log = $("input[name='submit']").val();
            $('.form_response').load('verify-login.php',{
                username: use,
                password: pas,
                login: log
            });
        });

    });
</script>
</body>
</html>