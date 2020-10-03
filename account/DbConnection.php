<?php
require('../../uboconfig/configure.php');

class DbConnection
{
    public static function getConnection(){
        return mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }
}