<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] != 'user') {
    header("Location: ../sign-in");
}

include "../utils/db.php";

$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../components/layout/html.php";
    ?>
    <title>User Dashboard</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/user-dashboard.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">

</head>

<body>
    <div class="side-bar">
        <div class="name">
            <h1>AcademiX</h1>
        </div>

        <div>
            <ul class="sidebar-container">
                <li>Dashboard</li>
                <li>My Courses</li>
                <li>Explore Courses</li>
                <li>Contact Us</li>
                <li>About Us</li>
                <li>My Account</li>
            </ul>
        </div>
    </div>

    <div class="container">

        <!-- header -->
        <header class="header-user">


            <div class="search-bar">
                <input type="text" placeholder="Search Courses...">
                <button id="search-button">Search</button>
            </div>

            <div class="user">
                <a href="#" class="special-button">Profile</a>
            </div>


        </header>

        <div class="content">

            <div class="content-2">
                <h1>Upcoming Courses</h1>
                <div class="upcome">
                    <div class="welcome">
                        <h4>Welcome back, <?= $user['first_name'] ?></h4>
                    </div>

                    <div class="cards">
                        <div class="card shadow">
                            <div class="box-1">
                                <h2>My Courses</h2>
                                <h3>Course To Do</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/course.png" alt="courses">
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="box-1">
                                <h2>Completed</h2>
                                <h3>Learned Courses</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/completed.webp" alt="complete">
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="box-1">
                                <h2>My Status</h2>
                                <h3>Progress</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/graph.png" alt="graph">
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="box-1">
                                <h2>Watch Time</h2>
                                <h3>Total minutes</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/watch-time.webp" alt="watch-time">
                            </div>
                        </div>
                    </div> <br><br>
                    <div class="content-2">
                        <h1>My Courses</h1>
                        <div class="upcome">
                            <div class="new-event">
                                <h4>Course - 01</h4>
                            </div>
                            <div class="new-event">
                                <h4>Course - 02</h4>
                            </div>
                            <div class="new-event">
                                <h4>Course - 03</h4>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="footer">
                    <?php
                    include "../components/layout/footer.php";
                    ?>
                </div>
            </div>
</body>

</html>