<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
    
    $mysqli = get_mysql_connection();

    if($mysqli == false){
        print("Failed to connect to database.");
        exit();
        }
    $result = $mysqli->query("SELECT id,name,score_rating FROM reviews");

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $dbdata[]=$row;
    }
    }else{
        printf('No record found.<br />');
    }
    echo json_encode($dbdata);
    mysqli_free_result($result);
    $mysqli->close();
?>