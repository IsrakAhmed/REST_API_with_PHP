<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data['id'];

    global $db;
    include 'config.php';

    $sql = "SELECT * FROM users WHERE id = $id";

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