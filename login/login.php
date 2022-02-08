<?php

    $data = $_POST['data'];
    $username = $data[0];
    $password = $data[1];

    $result = logIn($username, $password);

    echo json_encode($result);

    function logIn($username, $password){

        include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";

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