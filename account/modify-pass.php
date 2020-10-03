<?php
require ('ModelAccount.php');
session_start();
$check_match = false;
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
    header ("Location: login");
}
else
{
    if(isset($_POST['submit'])){
        $user = $_SESSION['user'];
        $stored_secure_pass  = $user['user_password'];
        $old_pass = $_POST['old_pass'];
        $pass = $_POST['pass'];
        $c_pass = $_POST['c_pass'];
        $check_match = password_verify($old_pass, $stored_secure_pass);
        if($check_match)
        {
            if($pass === $c_pass){
                if(strlen($pass)<6)
                { echo "<span class='text-danger'> password length cannot be less than six</span>";}
                else{
                     $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
                     $change_pass = ModelAccount::modify_pass((int)$user['user_id'], $hash_pass);
                     if($change_pass)
                        echo "<span class='text-success'>password update successful</span>";
                     else
                         echo "<span class='text-danger'>error updating password</span>";
                }
            }
            else{
                echo "<span class='text-danger'> password mismatch</span>";
            }
        }
        else
        {
            echo "<span class='text-danger'> old password not correct</span>";
        }
    }
}
