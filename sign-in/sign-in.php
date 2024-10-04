<?php
session_start();
include "../utils/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $u_password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row["password"]. $row["email"].$u_password;
        if ($row["password"] == $u_password) {
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: ../user");
            exit();
        } else {
            echo "Incorrect Password";  
        }
    } else {
        echo "User not found";
    }
    
}