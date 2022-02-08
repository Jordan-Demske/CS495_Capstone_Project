<?php
    session_start();
    function get_mysql_connection($isTest = false){
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database";

        if($isTest) {
            $dbname = "test_database";
        }

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

    class SQL_Connection{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "database";

        private $id;
        private $name;
        private $rating;

        function get_mysql_connection(){
            session_start();
            $mysqli = new mysqli($host, $username, $password, $dbname);

            if($mysqli->connect_errno ) {
                return false;
                $log = "Connect failed: ".$mysqli -> connect_error;
                exit();
            }else{
                return $mysqli;
            }
        }
    }
?>