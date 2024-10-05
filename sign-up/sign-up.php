<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $dob = $_POST["dob"];
    $h_qualification = $_POST["role"];
    $u_password = $_POST["password"];

    $dobDate = new DateTime($dob);
    $today = new DateTime('today');
    $age = $dobDate->diff($today)->y;

    include '../utils/db.php';

    $sql = "INSERT INTO user (first_name, last_name, contact_no, date_of_birth, highest_qualification, password, email, age) VALUES ('$fname', '$lname', '$contact', '$dob', '$h_qualification', '$u_password', '$email', '$age');";

    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }
} else {
    header('Location: index.php');
}
