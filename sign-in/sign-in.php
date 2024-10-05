<?php
session_start();
include "../utils/db.php";
include "../utils/auth.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u_email = $_POST["email"];
    $u_password = $_POST["password"];



    $user_found = false;

    foreach ($auth_info as $role => $info) {
        $table = $info['table'];
        $id_field = $info['id_field'];
        $redirect = $info['redirect'];

        $sql = "SELECT * FROM $table WHERE email = '$u_email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["password"] == $u_password) {
                $_SESSION['user_id'] = $row[$id_field];
                $_SESSION['role'] = $role;
                header("Location: $redirect");
                exit();
            } else {
                echo "Incorrect Password";
                exit();
            }
        }
    }

    echo "User not found";
}
