<?php
// Check if user is signed in
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['role']) && $_SESSION['role'] != 'reviewer') {
    header("Location: ../../sign-in");
}

include "../../utils/db.php";

if (isset($_POST["course_id"])) {
    $course_id = $_POST['course_id'];

    $sql = "UPDATE course SET status='Approved' WHERE course_id = $course_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: /reveiwer/review");
        exit;
    } else {
        echo "Error approving course: " . $conn->error;
    }
}

$conn->close();
