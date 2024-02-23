<?php

    const DB_SERVER = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_DATABASE = 'testDB';

    global $db;
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if(!$db){
        die("Connection failed: " . mysqli_connect_error());
    }
?>