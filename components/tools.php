<?php
    session_start();
    function get_mysql_connection($isTest = false){
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database";

<<<<<<< HEAD
        if($isTest) {
            $dbname = "test_database";
        }

        $id;
        $name;
        $rating;

=======
>>>>>>> cccb1f1c6f036059776fc237d3b1985558532c33
        $mysqli = new mysqli($host, $username, $password, $dbname);

        if($mysqli->connect_errno ) {
            return false;
            $log = "Connect failed: ".$mysqli -> connect_error;
            exit();
        }else{
            return $mysqli;
        }
    }

<<<<<<< HEAD
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
=======
    get_mysql_connection();


>>>>>>> cccb1f1c6f036059776fc237d3b1985558532c33
?>