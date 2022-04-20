<?php
    include "components/tools.php";
    
    $mysqli = get_mysql_connection();

    if($mysqli == false){
        print("Failed to connect to database.");
        exit();
    }

    $term = $_POST['data'];

    if($term == null){
        $result = $mysqli->query("SELECT id,ad_name,drug_name,score_rating,video_url FROM reviews");
    }else{
        $term = "%".$term."%";
        $result = $mysqli->query("SELECT id,ad_name,drug_name,score_rating,video_url FROM reviews WHERE drug_name LIKE '$term' OR ad_name LIKE '$term'");
    }

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $dbdata[]=$row;
        }
        echo json_encode($dbdata);
    }else{
        echo json_encode(null);
    }
    mysqli_free_result($result);
    $mysqli->close();
?>