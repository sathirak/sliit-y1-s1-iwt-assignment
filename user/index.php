<?php
// Check if user is signed in
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
    header("Location: ../sign-in");
}

include "../utils/db.php";
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE user_id = '$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../components/html.php";
    ?>
    <title>User Dashboard</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/user-dashboard.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">

</head>

<body>


    <div class="side-bar">
        <div class="side-img">
            <a href="../index.php">
            <div class="logo">
                <img src="../assets/images/logo.png" alt="logo">
            </div>
        </a>
        </div>

        <div>
            <ul class="sidebar-container">
                <li>Dashboard</li>
                <li>My Courses</li>
                <li>Privacy Policy</li>
                <li>Contact Us</li>
                <li>About Us</li>
                <li>My Account</li>
            </ul>
        </div>
    </div>

    <div class="container">
       
        <header class="header-user">
            <div class="search-bar">
                <input type="text" placeholder="Search Courses...">
                <button id="search-button">Search</button>
            </div>

            <div class="user">
                <a href="#" class="special-button">
                    <img src="../assets/images/user-img.png" alt="">
                </a>
            </div>
        </header>

        <div class="content">

            <div class="content-2">

                <div class="upcome">
                    <div class="welcome">
                        <h3>Welcome back, <?= $user['first_name'] ?></h3>
                        <header class="dashboard-header">
                            <button class="add-course-btn"><span class="ico-text">+ </span>Add New Course</button>
                        </header>
                    </div>

                    <div class="cards">
                        <div class="card shadow" id="cd-1">
                            <div class="box-1">
                                <h2>My Courses</h2>
                                <h3>Enrolled Courses</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/course.png" alt="courses">
                            </div>
                        </div>
                        </a>
                        <div class="card shadow" id="cd-2">
                            <div class="box-1">
                                <h2>Completed</h2>
                                <h3>Learned Courses</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/completed.webp" alt="complete">
                            </div>
                        </div>

                        <div class="card shadow" id="cd-3">
                            <div class="box-1">
                                <h2>Learning course</h2>
                                <h3>Course To Do</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/watch-time.webp" alt="watch-time">
                            </div>
                        </div>

                        <div class="card shadow" id="cd-4">
                            <div class="box-1">
                                <h2>My Status</h2>
                                <h3>Progress</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/icons/graph.png" alt="graph">
                            </div>
                        </div>
                    </div> <br><br>


                    <div class="content-2">
                        <h1 id="my-courses">My Courses</h1>
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

                    <div class="content-2">
                        <h1 id="completed-courses">Completed Courses</h1>
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

                    <div class="content-2">
                        <h1 id="learning-course">Learning course</h1>
                        <div class="upcome">
                            <div class="new-event">
                                <h4>Course - 01</h4>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="footer">
                    <?php
                    include "../components/footer.php";
                    ?>
                </div>
            </div>
        </div>
        <script src="../scripts/user.js"></script>
    </div>
</body>

</html>