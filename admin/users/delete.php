<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {
    header("Location: ../../sign-in");
}

include "../../utils/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["user_id"];
    $sql = "DELETE FROM user WHERE user_id = $id";
    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    header("Location: /admin/users/");
    exit();
}