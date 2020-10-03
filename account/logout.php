<?php
    session_start();
    $_SESSION['login'] = "";
    $_SESSION['user'] = "";
    echo "<script>window.location.replace('../account/login')</script>";