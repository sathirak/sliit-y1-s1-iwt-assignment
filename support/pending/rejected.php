<?php
// Check if user is signed in
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['role']) && $_SESSION['role'] != 'support') {
    header("Location: ../../sign-in");
}

include '../../utils/db.php';

if (isset($_POST['ticket_id'])) {
    $ticket_id = $_POST['ticket_id'];

    $sql_update = "UPDATE inquiries SET status = 'rejected' WHERE id = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param('i', $ticket_id);
    $stmt_update->execute();
    $stmt_update->close();

    header("Location: /");
}
