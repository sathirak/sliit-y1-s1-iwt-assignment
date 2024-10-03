<?php

include "../../utils/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["course_id"];
    $sql = "DELETE FROM course WHERE course_id = $id";
    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    header("Location: /admin/users/");
    exit();
}