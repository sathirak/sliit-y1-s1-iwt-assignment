<?php



if (isset($_POST["submit"])) {
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $e_email = $_POST["email"];
    $drop_btn = $_POST["dropbtn"];
    $p_password = $_POST["password"];

    require 'su-config.php';

    $lname = $_POST["l_name"];
    $sql = "INSERT INTO users VALUES('$fname', '$lname', '$e_email', '$drop_btn', '$p_password')";

    if ($con->query($sql)) {
        echo "Insert successful";
    } else {
        echo "Error" . $con->error;
    }

} else {
    header('Location:index.php');
}

// $con->close();