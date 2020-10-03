<?PHP
include ('ModelAccount.php');
include_once ('Agent.php');
$u_firstname = ""; $u_lastname = ""; $u_phone = ""; $u_address = ""; $u_city = ""; $u_email = "";
$agent_info = Array();
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
    header ("Location: login");
}
else {
    $user = $_SESSION['user'];//get the user attribute stored in the session as an array
    $user_id = (int)$user['user_id'];
    $u_email = $user['user_email'];
    //variable declarations to be used
    $empty_field = false; $row_affected = false;
    $agent_info = ModelAccount::get_agent($user_id);//fetch the user detail if it exists.
    if (isset($_POST['submit'])) {
        $email = ModelAccount::test_input($_POST['email']);
        $first_name = ModelAccount::test_input($_POST['firstname']);
        $last_name = ModelAccount::test_input($_POST['lastname']);
        $phone = ModelAccount::test_input($_POST['phone']);
        $address = ModelAccount::test_input($_POST['address']);
        $city = ModelAccount::test_input($_POST['city']);
        if (empty($first_name) || empty($last_name) || empty($address) || empty($city) || empty($phone)) {
            $empty_field = true;
        }
        else {
            $agent = new Agent($user_id, $email, $first_name, $last_name, $phone, $address, $city);
            $row_affected = ModelAccount::update_agent($user_id, $email, $first_name, $last_name, $phone, $address, $city);
            if($row_affected){
                $agent_info = ModelAccount::get_agent($user_id);
            }

        }
    }
    if($row_affected && $u_email != $email)
    {
        $_SESSION['user']['user_email'] = $email;
        $u_email = $email;
    }
    else
        $u_email = $user['user_email'];
    $u_firstname = $agent_info['user_firstname'];
    $u_lastname = $agent_info['user_lastname'];
    $u_phone = $agent_info['user_phone'];
    $u_address = $agent_info['user_address'];
    $u_city = $agent_info['user_city'];
}
?>
<!--<!DOCTYPE html>-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | UBO Agencies</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/linearicon/style.css">
    <!--classic navigation effects-->
    <link rel="stylesheet" href="../css/classy-nav.min.css">
    <!--animation stylesheet-->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- custom stylesheets.-->
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
                            <li class="dropdown-item"><a href="logout"><span><i class="lnr lnr-power-switch"></i></span>Log out</a></li>
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
                  <li><a href="index" class="active nav-link"><span><i class="lnr lnr-user"></i></span>
                          <span class="d-none d-md-inline">Client</span></a>
                  </li>
                  <li><a href="#" class="nav-link"><span><i class="lnr lnr-cog"></i></span>Edit Account</a></li>
                  <li><a href="property-list" class="nav-link"><span><i class="lnr lnr-apartment"></i></span>Properties</a></li>
                  <li><a href="change-password" class="nav-link"><span><i class="lnr lnr-lock"></i></span>Change Password</a></li>
                  <li><a href="logout" class="nav-link"><span><i class="lnr lnr-power-switch"></i></span>Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="body_content">
            <div class="container">
                <div class="content_item">
                    <div class="offset-md-1 col-md-10 offset-md-1 pt-4 mb-5 border-bottom">
                        <h5>Agent Details</h5>
                        <p>Add your contact information</p>
                    </div>
                    <?php if($row_affected){
                        echo '<div class="offset-md-1 col-md-10 offset-md-1 pt-2 mb-3 alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Record</strong> was added successfully.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                    }
                    ?>
                    <div class="form_area col-md-10 pr-md-2">
                        <form action="index" method="post">
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label class="offset-md-2 col-md-10">First Name
                                        <input class="form-control" name="firstname" type="text" value="<?php echo($u_firstname); ?>">
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-10 offset-md-2">Last Name
                                        <input class="form-control" name="lastname" type="text" value="<?php echo($u_lastname); ?>">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label class="offset-md-2 col-md-10">Phone
                                        <input class="form-control" name="phone" type="text" value="<?php echo($u_phone); ?>">
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-10 offset-md-2">Email
                                        <input class="form-control" type="text" name="email" value="<?php echo($u_email); ?>">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-md-6">
                                    <label class="offset-md-2 col-md-10">Address
                                        <textarea name="address" class="form-control"  placeholder=""><?php echo($u_address); ?></textarea>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-md-10 offset-md-2">City/Town
                                        <input name="city" class="form-control" type="text" value="<?php echo($u_city); ?>">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="offset-md-1 col-md-10 offset-md-1">
                                    <input name="submit" class="ml-3 btn font-weight-light btn-outline-success" type="submit" value="Update Contact">
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
<script src="../js/plugins/jquery.nice-select.min.js"></script>
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

    })
</script>
</body>
</html>