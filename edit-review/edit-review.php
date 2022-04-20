<?php

include "../components/tools.php";
    
$mysqli = get_mysql_connection();

if($mysqli == false){
    die("Failed to connect to database.");
}

$error = false;

if(isset($_POST) and isset($_SESSION["username"])){
    $data = $_POST["data"];

    //Check data
    foreach($data as $key => $value){
        if(trim($value) == ""){
            $error = "One or more fields are empty.";
        }
    }
}else{
    $error = "No POST data or no session found.";
}

if(!$error){
    // Data is ok to be inserted into database
    $data = $_POST["data"];

    $stmt = $mysqli->prepare(
        'UPDATE reviews SET 
            ad_name = ?,
            drug_name = ?,
            score_indication = ?,
            score_efficacy = ?,
            score_place = ?,
            score_dosing = ?,
            score_other_agents = ?,
            score_serious_adrs = ?,
            score_common_adrs = ?,
            score_monitoring = ?,
            score_interactions = ?,
            score_cost = ?,
            score_contraindication = ?,
            score_specific_populations = ?,
            score_rating = ?,
            did_right = ?,
            could_improve = ?,
            ad_url = ?,
            video_url = ?
        WHERE id = ?');

    if($stmt == false){
        die("Failed to update review.");
    }

    $stmt->bind_param("ssiiiiiiiiiiiiissssi",
        $data["ad_name"],
        $data["drug_name"],
        $data["indication"],
        $data["efficacy"],
        $data["place"],
        $data["dosing"],
        $data["other_agents"],
        $data["serious_adr"],
        $data["common_adr"],
        $data["monitoring"],
        $data["interactions"],
        $data["cost"],
        $data["contraindication"],
        $data["specific_populations"],
        $data["rating"],
        $data["did_right"],
        $data["could_improve"],
        $data["ad_url"],
        $data["video_url"],
        $data["id"]
    );

    if($stmt->execute()){
        echo 0;
    }else{
        echo $stmt->error;
    }

}else{
    echo $error;
}