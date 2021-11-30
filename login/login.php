<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
    
    $mysqli = get_mysql_connection();

    if($mysqli == false){
        print("Failed to connect to database.");
        exit();
    }

    $data = $_POST['data'];
    $username = $data[0];
    $password = $data[1];

    $result = $mysqli->query("SELECT id,username,password,first_name,last_name FROM admin WHERE username = '$username'");

    if (mysqli_num_rows($result) > 0) {
        // Username is found
        // Add session variable and redirect
        while($row = $result->fetch_assoc()){
            if(password_verify($password, $row['password'])){
                // Password matches
                $_SESSION["username"] = $row["username"];
                echo json_encode("true");
            }else{
                echo json_encode("false");
            }
        }
    }else{
        echo json_encode("false");
    }
    mysqli_free_result($result);
    $mysqli->close();
?>