<?php

include "../components/tools.php";
    
$mysqli = get_mysql_connection();

if($mysqli == false){
    die("Failed to connect to database.");
}

if(!isset($_POST) or !isset($_SESSION["username"])){
    die("No session or post data");
}else{
    $data = $_POST["data"];

    $stmt = $mysqli->prepare('DELETE FROM reviews WHERE id = ?');

    $stmt->bind_param("i",
        $data["id"]
    );

    if($stmt->execute()){
        echo 0;
    }else{
        echo $stmt->error;
    }
}