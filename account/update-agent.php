<?php
require ('ModelAccount.php');
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
    header ("Location: login");
}
elseif(isset($_POST['submit'])){
    $user = $_SESSION['user'];
    $user_id = $user['user_id'];
    $model_account = new ModelAccount();
    $first_name = $model_account->test_input($_POST['firstname']) ;
    $last_name = $model_account->test_input($_POST['lastname']);
    $phone = $model_account->test_input($_POST['phone']);
    $address = $model_account->test_input($_POST['address']);
    $city = $model_account->test_input($_POST['city']);
    if(empty($first_name) || empty($last_name) || empty($address) || empty($city) || empty($phone)){
        echo "fill all fields";
    }else{
        echo "all good!";
    }

}
