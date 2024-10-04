<?php

//DB CONNECTION

require_once '../utils/su-config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $e_email = $_POST["email"];
    $p_password = $_POST["password"];

    //check email and pw
    $sql = "SELECT * FROM users WHERE email = '$e_email' AND password = '$p_password'";
    $result = mysqli_query($sql,$conn);

    
}