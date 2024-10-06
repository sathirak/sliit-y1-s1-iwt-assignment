<?php

// DB config that is used throughout the system

$servername = "sql12.freesqldatabase.com";
$username = "sql12734758";
$password = "f2SmwnMj6g";
$database = "sql12734758";
$port = 3306;

// https://www.phpmyadmin.co/index.php?db=sql12734758&table=course&target=sql.php

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 

