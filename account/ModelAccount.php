<?php
require ('DbConnection.php');
class ModelAccount
{
    public function __construct(){}

    public static function test_input($user_input){
        $data = trim($user_input);
        $strip_slashes = stripslashes($data);
        $strip_tag = strip_tags($strip_slashes);
        $result = htmlspecialchars($strip_tag); 
        return $result;
    }

    public static function get_agent(int $user_id){
        try {
            $db_conn = DbConnection::getConnection(); $SQL = null; $rs = null;/* @var $db_conn mysqli*/
            if ($db_conn) {
                $SQL = $db_conn->prepare("CALL spGetAgentInfo(?)");
                        $SQL->bind_param("i", $user_id);
                $SQL->execute() or die("error @" . mysqli_error($db_conn));
                $rs = $SQL->get_result();
                if ($rs->num_rows > 0) {
                    $agent_detail = $rs->fetch_assoc();
                } else {
                    $agent_detail = false;
                }
            } else {
                $agent_detail = false;
                echo "error connecting to database";
            }
        }
        finally {
            if($rs != null){ $rs->close();}
            if($SQL != null){$SQL->close();}
            $db_conn->close();
        }
        return $agent_detail;
    }

    public static function get_user(string $username)
    {
        try{
            $db_conn = DbConnection::getConnection();
            $p_stmt = null;
            $rs = null;
            if($db_conn){
                $p_stmt = $db_conn->prepare("CALL spGetAgent(?)");
                $p_stmt->bind_param('s', $username);
                $p_stmt->execute() or die("error @".mysqli_error($db_conn));
                $rs = $p_stmt->get_result();
                if($rs->num_rows>0)
                {
                    $fields = $rs->fetch_assoc();
                }
                else{
                    $fields = false;
                }
            }
            else{
                $fields = false;
                echo "error connecting to database, try again shortly";
            }
        }
        finally{
            if($p_stmt != null){$p_stmt->close();}
            $db_conn->close();
        }

        return $fields;
    }

    public static function update_agent(int $user_id, string $email, string $first_name, string $last_name, string $phone, string $address, $city)
    {
//        //$status;
        try{
            $db_conn = DbConnection::getConnection();
            $p_stmt = null;
            if($db_conn){
                $p_stmt = $db_conn->prepare("CALL spUpdateAgent(?,?,?,?,?,?,?)");
                $p_stmt->bind_param("ssssssi", $email, $first_name, $last_name, $phone, $city, $address, $user_id);
                $p_stmt->execute() or die("error while inserting agent to database ".mysqli_error($db_conn));
//                if($p_stmt){
//                    $status = true;
//                }
//                else{
//                    $status = false;
//                }
            }
            else{
                $status = false;
                echo "error connecting to database";
            }

        }
        finally{
            if($p_stmt != null){$p_stmt->close();}
            $db_conn->close();
        }
        return $status;
    }
    public static function modify_pass(int $user_id, string $new_pass)
    {
        try{
            $db_conn = DbConnection::getConnection();
            $p_stmt = null;
            if($db_conn){
                $p_stmt = $db_conn->prepare("CALL spModifyUserPass(?,?)");
                $p_stmt->bind_param("is", $user_id, $new_pass);
                $p_stmt->execute() or die("error while inserting agent to database ".mysqli_error($db_conn));
                if($p_stmt){
                    $status = true;
                }
                else{
                    $status = false;
                }
            }
            else{
                $status = false;
                echo "error connecting to database";
            }
        }
        finally{
            if($p_stmt != null){$p_stmt->close();}
            $db_conn->close();
        }
        return $status;
    }
    
    public static function addProperty($array){
        $p_stmt = null;  $bedroom_no = 0; $db_conn = null;
        if($array['lodge_type'] == 2){
                $bedroom_no = $array['bedroom_no'];                
        }
        try {
            $db_conn = DbConnection::getConnection();
            if($db_conn){
                $p_stmt = $db_conn->prepare("CALL spInsertHouse(?,?,?,?,?,?,?,?)");
                $p_stmt->bind_param("sssssisi", $array['lodge_name'], $array['bus_stop'], $array['lodge_address'],$array['lodge_town'],
                        $array['lodge_type'], $bedroom_no, $array['date_added'], $array['user_id']);
                $p_stmt->execute() or die('<span class="text-danger">error adding property to database '.mysqli_error($db_conn).'</span>');
                echo '<span class="text-success">Property added successfully</span>';
            }
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } finally {
           if($p_stmt != null) {$p_stmt->close();}
           $db_conn->close();
        }        
   }
    public static function loadProperties(){
        $property= array();
        try {
            $db_conn = DbConnection::getConnection(); $SQL = null; $rs = null;
            if ($db_conn) {
                $SQL = $db_conn->prepare("CALL spGetHouse()");
                $SQL->execute() or die("error @" . mysqli_error($db_conn));
                $rs = $SQL->get_result();
                $property = ModelAccount::addRowsToArray($property, $rs);
            } else {
                $property = false; 
                echo "error connecting to database";
            }
        }
        finally {
            if($rs != null){ $rs->close();}
            if($SQL != null){$SQL->close();} 
            $db_conn->close();
        }
        return $property;
    }
    //function to return all the rows of the specified result sets in an array
    private static function addRowsToArray(array $array, mysqli_result $result):array {
        if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
                array_push($array, $row);
            }
        }
        return $array;
    }
}