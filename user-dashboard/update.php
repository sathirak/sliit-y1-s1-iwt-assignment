<?php
//DB CONNECTION
    //DB CONNECTION
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "studentms";

    //CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password, $database);

    //CHECK CONNECTION
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    