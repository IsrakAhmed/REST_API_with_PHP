<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

global $db;
include 'config.php';

    $sql = "SELECT * FROM users";

    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {
            $response[] = $row;
        }
        echo json_encode($response);
    } else {
        echo "0 results";
    }

    mysqli_close($db);
?>