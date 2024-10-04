<?php

include '../utils/config-user.php';

if (isset($_POST["submit"])) {
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $role = $_POST["role"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];


    $sql = "INSERT INTO user VALUES('$fname', '$lname', '$email', '$contact', '$role', '$password', ''$$c_password)";

    if ($conn->query($sql) === TRUE) {
        echo "Insert successful";
    } else {
        echo "Error" . $conn->error;
    }

} else {
    header('Location:index.php');


    $con->close();
}