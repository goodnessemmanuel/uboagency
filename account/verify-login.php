<?php
require('ModelAccount.php');
if(isset($_POST['login']))
{
    $username = ModelAccount::test_input($_POST['username']);
    $password = ModelAccount::test_input($_POST['password']);
    $user = ModelAccount::get_user($username);

    if($user)
    {
        $secure_pass = $user['user_password'];
        $valid_pass = password_verify($password, $secure_pass);
        If($valid_pass)
        {
            session_start();
            $_SESSION['login']= "1";
            $_SESSION['user']=  $user;
            echo "<script>alert('login successful'); 
                    window.location.replace('../account');</script>";
        }
        else{
            echo "<span class='text-danger'>invalid username/password! </span>";
            session_start();
            $_SESSION['login']= "";
            $_SESSION['user']= "";
        }

    }
    else {
           echo "<span class='text-danger'>invalid login</span>";
    }
}
else
{
    header("location:  login");
}