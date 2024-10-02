<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="display.css">
    <title>Document</title>

</head>


<body>

    <?php
    //DB CONNECTION
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "studentms";

    //CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password, $database);

    //CHECK CONNECTION
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //FEATCH DATA FROM USERS TABLE
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if (!$result) {
        die("Invalid query: " . $conn->error);
    } 
    else if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='grid-container'>";
            echo "<table class='table'>";
            echo "<tr>";
            echo "<td>" . $row["user_id"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["registration_date"] . "</td>";
            echo "<td>";
            echo "<button class ='btn btn-primary btn-sm'>Update</button>";
            echo"<br>";
            echo "<button class ='btn btn-danger btn-sm'>Delete</button>";
            echo "</td>";
            echo "</tr>";
            echo "</div>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>

</body>

</html>