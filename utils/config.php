<?php
$servername = "sql12.freesqldatabase.com";
$username = "root";
$password = "";
$database = "";
$port = 3306;


$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
