<?php

//DB CONNECTION

include "../utils/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];

    //check email and pw
    $sql = "SELECT * FROM users WHERE email = $email";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if ($row["password"] == $password) {
            echo "Login Successful";
        } else {
            echo "Incorrect Password";
        }
    } else {
        echo "User not found";
    }
    
}