<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../components/layout/html.php"; ?>
    <title>CRUD Example</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
</head>
<body>
    <?php


include "../components/layout/header.php";
include "../utils/db.php";
$sql = "SELECT * FROM users";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Username</th><th>Email</th><th>Created At</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["username"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["password"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

include "../components/layout/footer.php";

?>
</body>
</html>

