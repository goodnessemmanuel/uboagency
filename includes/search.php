<?php
    $site_root = "/uboagencies";
?>
<div class="search_wrapper d-flex align-items-center justify-content-center bg_img searchwrapper_bg_overlay"
     style="background-image:url('<?php echo $site_root; ?>/images/bg_img/bg_img4.jpg')">
    <div class="close_icon">
        <i class="fa fa-times"></i>
    </div>
    <!-- Logo top -->
    <a href="#" class="search_logo"><img src="<?php echo $site_root; ?>/images/site-logo.png" alt=""></a>
    <!-- search field -->
    <div class="search_form">
        <form action="" method="GET">
            <select name="state" id="state" onchange="populateCity(this.id, 'cityx')">
                <option value="0">State</option>
                <option value="lagos">Lagos</option>
                <option value="abuja">Abuja</option>
                <option value="rivers">Rivers</option>
            </select>
            <select name="city" id="cityx">
                <option value="city">City</option>
            </select>
            <div class="d-flex">
                <input type="search" id="search" placeholder="Enter a street address">
                <button type="submit"><i class="fa fa-search" aria-hidden="false"></i></button>
            </div>
        </form>
    </div>
    <div class="copyright_text">
        <p> Copyright &copy;2019 UBOA. All rights reserved | powered by <a href="http://www.giftedemmanuel.com" target="_blank"><span style="color: #3aafa9"><strong>Oche-Tech Concepts&reg;</strong></span></a>
        </p>
    </div>
</div>