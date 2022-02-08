<?php

    include $_SERVER['DOCUMENT_ROOT']."/Capstone/components/tools.php";

    $data = $_POST['data'];
    $username = $data[0];
    $password = $data[1];

    $result = logIn($username, $password);

    echo json_encode($result);

?>