<?php
session_start();
$check_match = false;
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
    header ("Location: login");
}
else{
    $user = $_SESSION['user'];
}
?>
<!--<!DOCTYPE html>-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | UBO Agencies</title>
    <!-- bootstrap systems -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!--linear icons similar to font icons-->
    <link rel="stylesheet" href="../assets/linearicon/style.css">
    <!--classic navigation effects-->
    <link rel="stylesheet" href="../css/classy-nav.min.css">
    <!--animation stylesheet-->
    <link rel="stylesheet" href="../css/animate.css">
    <!--custom stylesheet.-->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="css/custom.css">
    <style>

    </style>
</head>
<body>
<!--include search wrapper and its content -->
<?php include "../includes/search.php" ?>

<!--page preloader effect -->
<div id="preloader">
    <div class="loader"></div>
</div>
<header class="header_area">
    <div class="header_item row">
        <div class="col-10 m-0">
            <!--===include navigation bar Area ===-->
            <?php require "../includes/navigation_menu.php" ?>
        </div>
        <div class="col-2">
            <div class="profile_pic">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="btn_dropdown" id="dropdown1" data-toggle = "dropdown" aria-expanded="false">
                            <span class="user d-none d-sm-flex">Hi, <?php echo($user['user_name']);?></span>
                            <img class="img-fluid" src="../images/user_img.jpg" alt="">
                            <span class="user_arrow"><i style="" class="rotate fa fa-chevron-up lnr lnr-chevron-up"></i></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="#dropdown1" id="sub_menu1">
                            <li class="dropdown-item"><div class="arrow"></div>
                                <a href="index"><span><i class="lnr lnr-user"></i></span>Client</a>
                            </li>
                            <li class="dropdown-item"><a><span><i class="lnr lnr-cog"></i></span>Edit Account</a></li>
                            <li class="dropdown-item"><a href="property-list"><span><i class="lnr lnr-apartment"></i></span>Properties</a></li>
                            <li class="dropdown-item"><a href="change-password"><span><i class="lnr lnr-lock"></i></span>Change Password</a></li>
                            <li class="dropdown-item"><a href="logout" ><span><i class="lnr lnr-power-switch"></i></span>Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="body_area">
    <div class="content_wrapper">
        <div class="body_sidebar">
            <div class="sidebar_dropdown" id="sidebar_dropdown">
                <ul onclick="switchActiveClass()">
                  <li><a href="index" class="nav-link"><span><i class="lnr lnr-user"></i></span>
                          <span class="d-none d-md-inline">Client</span></a>
                  </li>
                  <li><a href="#" class="nav-link"><span><i class="lnr lnr-cog"></i></span>Edit Account</a></li>
                  <li><a href="property-list" class="nav-link"><span><i class="lnr lnr-apartment"></i></span>Properties</a></li>
                  <li><a href="change-password" class="active nav-link"><span><i class="lnr lnr-lock"></i></span>Change Password</a></li>
                  <li><a href="logout" class="nav-link"><span><i class="lnr lnr-power-switch"></i></span>Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="body_content">
            <div class="container">
                <div class="content_item">
                    <div class="offset-md-1 col-md-10 offset-md-1 pt-4 pb-2 mb-5 border-bottom">
                        <h5>Change Password</h5>
                    </div>
                    <div id="form_response" class="offset-md-1 col-md-10 offset-md-1 pt-4 pb-2 mb-2"></div>
                    <div class="form_area col-md-10 pr-md-2">
                        <form id="form_pass" action="" method="POST">
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label class="offset-md-2 col-md-10">Old Password
                                        <input id="old_pass" name="old_pass" class="form-control" type="password">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label class="offset-md-2 col-md-10">New Password
                                        <input id="pass" name="pass" class="form-control" type="password">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label class="offset-md-2 col-md-10">Confirm New Password
                                        <input id="c_pass" name="c_pass" class="form-control" type="password">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label  class="offset-md-2 col-md-10">
                                        <input id="btn_submit" name="submit" type="submit" value="Reset Password" class="py-1 btn btn-block font-weight-light btn-outline-success" >
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
    function switchActiveClass(event){
        let e = document.querySelector(".active");
        if(e !== null){
            e.classList.remove("active");
        }
        event.target.className = "active";
    }
    $('.header_item .profile_pic #dropdown1').on('click',function(){
        $(".header_item .profile_pic #sub_menu1").fadeToggle();
        $('.rotate').toggleClass("down");
     });

    $(document).ready(function(){
        $("#form_pass").submit(function (event) {
            event.preventDefault();
            let old_pass = $("#old_pass").val(), pass = $("#pass").val(),
                c_pass = $("#c_pass").val(), submit = $("#btn_submit").val();
            $("#form_response").load('modify-pass.php',{
                old_pass: old_pass,
                pass: pass,
                c_pass: c_pass,
                submit: submit
            });
        });

    })
</script>
</body>
</html>