<?php
 $site_root = "/uboagencies";
?>
<nav class="nav_area">
    <div class="classy-nav-container">
        <div class="container">
            <!-- nav menu area  -->
            <div class="classy-navbar justify-content-between" id="navMenu">
                <a href="index" class="navbar-brand"><img class="img-fluid" src="<?php echo $site_root; ?>/images/logo.png" alt="UBO Frontend"></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="pr-2" style="font-size: 12px;" aria-labelledby="togglemenu">MENU</span>
                    <span class="navbarToggler" id="togglemenu" style="background-color: transparent !important;">
                        <span></span><span></span><span></span>
                    </span>
                </div>
                <div class="classy-menu">
                    <!-- close button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <div class="classynav">
                        <ul>
                            <li><a href="<?php echo $site_root; ?>/index">HOME</a></li>
                            <li><a href="<?php echo $site_root; ?>/properties">PROPERTIES</a></li>
                            <li><a href="<?php echo $site_root; ?>/about">ABOUT US</a></li>
                            <li><a href="<?php echo $site_root; ?>/team">TEAM</a></li>
                            <li><a href="<?php echo $site_root; ?>/contact">CONTACT</a></li>
                        </ul>

                        <!-- search button area -->
                        <div class="btnsearch">
                            <span><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div><!--end navigation menu-->
        </div>
    </div>
</nav>