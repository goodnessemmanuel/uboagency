<?php
require('ModelAccount.php');
if(isset($_FILES['image_file'])){
    $array_image_file = $_FILES['image_file'];
    
    $file_extension_error = false;
    //this array of extension types specifies the image file type that will be allowed 
    $allowed_extensions = array('jpg','png','jpeg','gif');
    
    //php file upload errors to be displayed to user when an error occur during upload
    
    $php_file_upload_errors = array(
        0 => 'file upload was successful',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in the php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive specified in the form',
        3 => 'Uploaded file was partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder', 
        7 => 'Fail to write file to disk.',
        8 => 'A PHP extension stopped the file upload.'
    );
    
    $file_ext_array = explode('.', $array_image_file['name']);//split the filename to be uploaded into an array.    
    $image_file_ext = end($file_ext_array);//in the resulting array element the element in the last index of the array;    
   
    troubleshoot_r($array_image_file);
    troubleshoot_r($image_file_ext);
    
    //check if the file extention that is to be uploaded exists in the file extention array;
    if(!in_array($image_file_ext, $allowed_extensions)){
        $file_extension_error = true;
    }
    //if the error of the upload is not equal to zero
    if($array_image_file['error']){
        echo $php_file_upload_errors[$array_image_file['error']];
    }elseif ($file_extension_error) {
        echo 'Invalid file extension!';        
    } else {        
        $targetDestionation = "../../ubohouses/"; //this is the destination i want my file to be uploaded
        //make sure is a valid image which can get width and height
        list($width, $height) = getimagesize($_FILES['image_file']['tmp_name']);
        move_uploaded_file($_FILES['image_file']['tmp_name'], $targetDestionation.$_FILES['image_file']['name']);
        echo 'image upload successful';
    }
 }

 if(isset($_POST['submit_details'])){
     $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);
     $lodge_name = ModelAccount::test_input(filter_input(INPUT_POST, 'lodge_name', FILTER_SANITIZE_STRING));
     $bus_stop = ModelAccount::test_input(filter_input(INPUT_POST, 'bus_stop', FILTER_SANITIZE_STRING));
     $lodge_address = ModelAccount::test_input(filter_input(INPUT_POST, 'lodge_address', FILTER_SANITIZE_STRING));
     $lodge_town = ModelAccount::test_input(filter_input(INPUT_POST, 'lodge_town', FILTER_SANITIZE_STRING));
     $lodge_type = ModelAccount::test_input(filter_input(INPUT_POST, 'lodge_type', FILTER_SANITIZE_STRING));
     $bedroom_no = ModelAccount::test_input(filter_input(INPUT_POST, 'bedroom_no', FILTER_SANITIZE_STRING));
     if(empty( $lodge_name) || empty($bus_stop) || empty($lodge_address) || empty($lodge_town)){
         echo('<span class="text-danger">Ensure all fields are properly filled and not empty</span>');
     }
    else {  
        $date_added = date_create('now')->format('Y-m-d H:i:s');
        ModelAccount::addProperty(array("lodge_name"=>$lodge_name, "bus_stop" => $bus_stop, 
                                "lodge_address"=> $lodge_address, "lodge_town"=> $lodge_town, "lodge_type"=> $lodge_type, 
                                "bedroom_no"=> $bedroom_no, "date_added"=>$date_added, "user_id"=>$user_id));
    }
     
 }
 
function troubleshoot_r($array){
    echo '<pre>';
        print_r($array);
    echo '</pre>';
}
    