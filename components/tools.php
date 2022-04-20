<?php
    session_start();

    function get_mysql_connection($isTest = false){

        $prod = false;

        if($prod == true){
            $host = "localhost";
            $username = "bobgld";
            $password = "Abernathy4!";
            $dbname = "database";
        }else{
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "database";
        }

        $mysqli = new mysqli($host, $username, $password, $dbname);

        if($mysqli->connect_errno ) {
            return false;
            $log = "Connect failed: ".$mysqli -> connect_error;
            exit();
        }else{
            return $mysqli;
        }
    }

    function logIn($username, $password){

        $mysqli = get_mysql_connection();

        if($mysqli == false){
            print("Failed to connect to database.");
            exit();
        }

        $result = $mysqli->query("SELECT id,username,password,first_name,last_name FROM admin WHERE username = '$username'");

        if (mysqli_num_rows($result) > 0) {
            // Username is found
            while($row = $result->fetch_assoc()){
                if(password_verify($password, $row['password'])){
                    // Password matches
                    $_SESSION["username"] = $row["username"];
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }


        mysqli_free_result($result);
        $mysqli->close();
    }


?>