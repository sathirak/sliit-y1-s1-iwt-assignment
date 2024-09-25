<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12732310";
$password = "Z8ht7Jsge2";
$database = "sql12732310";
$port = 3306;


$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>