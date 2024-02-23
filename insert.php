<?php

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, 
    Authorization, X-Requested-With');

    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data['id'];
    $name = $data['name'];

    global $db;
    include 'config.php';

    $sql = "INSERT INTO users(id, name) VALUES({$id}, '{$name}')";


    if (mysqli_query($db, $sql)) {
        echo json_encode(array('message' => 'User Created', 'status' => true));
    }

    else {
        echo json_encode(array('message' => 'User Not Created', 'status' => false));
    }

    mysqli_close($db);
?>