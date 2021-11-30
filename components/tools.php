<?php
    session_start();
    function get_mysql_connection(){
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database";

        $id;
        $name;
        $rating;

        $mysqli = new mysqli($host, $username, $password, $dbname);

        if($mysqli->connect_errno ) {
            return false;
            $log = "Connect failed: ".$mysqli -> connect_error;
            exit();
        }else{
            return $mysqli;
        }
    }
?>