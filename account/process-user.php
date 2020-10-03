<?php
require('ModelAccount.php');
require_once('DbConnection.php');
if(isset($_POST['register']))
{
    $username = ModelAccount::test_input($_POST['username']) ;
    $email = ModelAccount::test_input($_POST['email']);
    $password = ModelAccount::test_input($_POST['password']);
    $empty_field = false; $email_error = false; $invalid_name = false; $invalid_pass = false;  $duplicate_user = false;
    $form_arr = Array("username"=>$username, "password"=>$password, "email"=>$email);
    if(empty($username) || empty($email) || empty($password))
    {
        $empty_field = true;
        echo "<span class='text-danger'>fill in all fields</span>";
    }
    elseif(!validate($username))
    {
        $invalid_name = true;
        echo "<span class='text-danger'>invalid entry! length of username must be atleast 4 without special characters like @,&,#,/ e.t.c.</span>";
    }
     elseif(strlen($password)<6)
    {
        $invalid_pass = true;
        echo "<span class='text-danger'>password length cannot be less than six(6)</span>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $email_error = true;
        echo "<span class='text-danger'>Enter a valid email address</span>";
    }
    if($empty_field == false && $email_error == false && $invalid_name == false && $invalid_pass == false)
    {
        $duplicate_user = checkIfUserExists($username, $email);
        if($duplicate_user == false)
        {
            $pass_hash = password_hash($password, PASSWORD_DEFAULT);  //hash the inputed password to enhance security
            $reg_date = date_create('now')->format('Y-m-d H:i:s');
            $conn = new DbConnection();
            $db_conn = $conn->getConnection();
            $SQL = $db_conn->prepare("CALL spInsertUser(?,?,?,?)");
            $SQL->bind_param('ssss', $username, $email, $pass_hash, $reg_date);
            $SQL->execute() or die("error while inserting user to db ".mysqli_error($db_conn));
            if($SQL)
            {
                echo "<script>alert('registration successful'); 
                    window.location.replace('../account/login');</script>";
            }
            $SQL->close();
            $db_conn->close();
        }
        else
        {
            echo "<span class='text-danger'>username or email already in use</span>";
        }

    }
}
else
{
    echo "<span class='text-danger'>An error occurred, try again shortly</span>";
}

function validate($string)
{
    return (bool)
        preg_match('/^[a-z0-9_.-]{4,20}$/', $string) && preg_match('/\w/', $string);
}
function checkIfUserExists($username, $email)
{
    $user_already_exists = false;
    $conn = new DbConnection();
    $db_conn = $conn->getConnection();
    $stmt = $db_conn->prepare("CALL spGetUsers()");
    $stmt->execute() or die("error @".mysqli_error($db_conn));
    $rs = $stmt->get_result();
    if($rs->num_rows>0)
    {
        $fields = $rs->fetch_assoc();
        foreach ($fields as $key => $value){
           if($username==$value || $email==$value){
           $user_already_exists = true;}
        }   
    }
    else{
        $user_already_exists = false;
    }
    $stmt->close();
    $db_conn->close();
    return $user_already_exists;
}
?>
<script>
    let multipleS = $("#username, #email, #password");
    multipleS.removeClass("input_error");

    let email_error = "<?php echo $email_error; ?>";
    let empty_field = "<?php echo $empty_field; ?>";
    let invalidU = "<?php echo $invalid_name; ?>";
    let invalidP = "<?php echo $invalid_pass; ?>";
    let duplicateU = "<?php echo $duplicate_user; ?>";
    let formData = "<?php foreach ($form_arr as $key=>$value){echo'#'.$key;} ?>";
    let key_arr = formData.split("#");
    if(empty_field == true)
    {
       for (let i =1; i<key_arr.length; i++)
        {
            let $this ="";
            let value = "";
            value = key_arr[i].toString();
            switch (value)
            {
                case "username":
                    $this = $("#username");
                    if(($this.val() == null) || ($this.val()===""))
                        $this.addClass("input_error");
                    break;
                case "email":
                    $this = $("#email");
                     if($this.val() == null || $this.val()==="")
                         $this.addClass("input_error");
                     break;
                case "password":
                    $this = $("#password");
                     if(($this.val() == null) || ($this.val()===""))
                         $this.addClass("input_error");
                     break;
            }

        }

    }
    if(invalidU == true)
    {
       $("#username").addClass("input_error");

    }
    if(email_error == true)
    {
        $("#email").addClass("input_error");
    }
    if(invalidP == true)
    {
        $("#password").addClass("input_error");

    }
    if(email_error == false && empty_field == false && invalidU == false && invalidP == false && duplicateU == false)
    {
        multipleS.removeClass("input_error");
        multipleS.val("");
    }
</script>
