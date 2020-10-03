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
    <!-- user feel design.-->
    <link rel="stylesheet" href="../assets/jquery-ui/jquery-ui.css">
    <!--custom stylesheet.-->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="css/custom.css">
    <style>
        input.radio_flat + .flatoptions{
            display: none;
        }
        input.radio_flat:checked + .flatoptions{
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            display: block;
        }
        #property_accordion h5 {
            background-color: #3aafa9 !important;
            outline: none !important;
            border: 2px solid #2b7a78;
            border: none;
        }
        .property_image>img{
            max-height: 150px;
            max-width: 150px;
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
                            <li class="dropdown-item"><a href="#"><span><i class="lnr lnr-lock"></i></span>Change Password</a></li>
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
                    <li><a href="#" class="active nav-link"><span><i class="lnr lnr-apartment"></i></span>Properties</a></li>
                    <li><a href="change-password" class="nav-link"><span><i class="lnr lnr-lock"></i></span>Change Password</a></li>
                    <li><a href="logout" class="nav-link"><span><i class="lnr lnr-power-switch"></i></span>Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="body_content">
            <div class="container">
                <div class="content_item">
                    <div class="row pt-4">
                        <div id="property_accordion" class="col-md-12" id="add_lodge">
                            <h5 class="border-bottom mb-2 pb-2">Add Lodge</h5>
                            <form class="my_ajax" action="upload_image" method="POST">
                                <input type="hidden" name="user_id" value="<?php echo($user['user_id']);?>">
                                <div class="form-group">
                                    <label class="form_label">Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="lodge_name" name="lodge_name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form_label">Nearest bus-stop<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="bus_stop" name="bus_stop" required>
                                </div>
                                <div class="form-group">
                                    <label class="form_label">Town<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="lodge_town" name="lodge_town" required>
                                </div>
                                <div class="form-group">
                                    <label class="form_label">Address<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="lodge_address" name="lodge_address" required>
                                </div>
                                <div class="form-row my-4">
                                    <div class="col-md-3">
                                        <label for="flat">Flat</label>
                                        <input id="flat" class="radio_flat" name="lodge_type" type="radio" checked value="2">
                                        <div class="flatoptions">
                                            <label>Number of Bedrooms</label>
                                            <select class="form-control" name="bedroom_no" id="bedroom_no">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="selfcon">Self Contain</label>
                                        <input id="selfcon" name="lodge_type" type="radio" value="1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="px-3 form-control-sm btn-outline-secondary" name="submit_details" type="submit" value="Save"/>
                                </div>
                                <div class="feedback_response"></div>
                            </form>
                            <h5 class="h4 mb-2 pb-2" id="viewPropertyH5" onclick="loadProperties()">View Properties</h5>
                            <div class="view_property_response"></div>
                            <table class="table table-light table-hover table-sm ">
                                <thead>
                                <tr>
                                    <th scope="col">Lodge Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <div class="">
                                                    Name: <br>
                                                    Nearest bus-stop:
                                                    Town:
                                                    Address:
                                                </div>
                                                <div class="property_image"><img src="../images/aboutus.jpg" alt="Image"></div>
                                                <div>
                                                    <form action="upload_image.php" method="POST" enctype="multipart/form-data" id="upload_images" name="upload_images">
                                                        <input type="hidden" name="property_id"/>
                                                        <div class="form-group">
                                                            <label>Featured Image</label>
                                                            <input class="form-control d-none" id="image_path" type="file" name="image_file" required>
                                                            <button class="btn-sm" type="submit" onclick="document.getElementById('image_path').click(); return false;">Select File</button>
                                                            <label id="display_path"></label>
                                                            <input class="px-3 form-control-sm btn-outline-secondary" type="submit" name="upload_lodge_image" value="Upload" required>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div><!--end container-->
    </div>
    <script src="../js/jquery/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- popper js-->
    <script src="../js/popper.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- some javascript plugins used -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- jquery UI.-->
    <script src="../assets/jquery-ui/jquery-ui.js"></script>
    <script src="../js/states_cities.js"></script>
    <script src="../js/custom.js"></script>
    <script>
        "use strict";
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
            //show only file name to be uploaded and not the absolute path plus the name
            $('input[name="image_file"]').change(function() {
                var fileName = $(this).val();
                $('#display_path').text(fileName.substr(fileName.lastIndexOf('\\') +1));
            });

            $('form.my_ajax').on('submit', function(){
                var currentForm = $(this), url = currentForm.attr('action'),
                    type = currentForm.attr('method'), formData = {};
                var lodge_type =  $('input[name=lodge_type]:checked', currentForm).val();

                currentForm.find('[name]').each(function(){
                    var currentField = $(this),
                        name = currentField.attr('name'),
                        data = currentField.val();
                    formData[name] = data;
                });

                if(formData.hasOwnProperty('lodge_type'))
                    formData['lodge_type'] = lodge_type;

                $.ajax({
                    url: url,
                    type: type,
                    data: formData,
                    success: function(response){
                        $('div.feedback_response').html(response);
                    }
                });
                return false;
            });
            //quality accordion code. with jquery ui
            $("div#property_accordion").accordion({
                animate: 1000,
                active: 0,
                collapsible: true,
                event: 'click',
                heightStyle: 'auto'
            });
        });

        function loadProperties() {
            let viewProperties =  document.getElementById('viewPropertyH5').innerHTML;
            $.ajax({
                url: 'loadproperties.php',
                type: 'GET',
                data: {viewProperties},
                success: function (response) {
                    $('div.view_property_response').html(response);
                }
            });
        }

    </script>
</body>
</html>