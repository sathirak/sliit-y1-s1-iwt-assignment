<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/user-dashboard.css">
    

</head>

<body>
    <div class="side-bar">
        <div class="name">
            <h1>AcademiX</h1>
        </div>

        <div>
            <ul>
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
        <div class="header-2">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search Here">
                    <button type="submit"><img src="../assets/images/search-img.jpg" alt="search icon"></button>
                </div>
                <div class="user">
                    <a href="#" class="special-button">Profile</a>
                    <img src="../assets/images/notifications.png" alt="notifications">
                    <div class="../assets/images/pro-pic">
                        <img src="../assets/images/user-img.png" alt="pro pic">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">

            <div class="content-2">
                <h1>Upcoming Courses</h1>
                <div class="upcome">
                    <div class="new-event">
                        <h4>Welcome back, Thilu</h4>
                    </div>

                    <div class="cards">
                        <div class="card-1">
                            <div class="box-1">
                                <h2>My Courses</h2>
                                <h3>Course To Do</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/images/course.png" alt="courses">
                            </div>
                        </div>

                        <div class="card-1">
                            <div class="box-1">
                                <h2>Completed</h2>
                                <h3>Learned Courses</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/images/completed.webp" alt="complete">
                            </div>
                        </div>

                        <div class="card-1">
                            <div class="box-1">
                                <h2>My Status</h2>
                                <h3>Progress</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/images/graph.png" alt="graph">
                            </div>
                        </div>

                        <div class="card-1">
                            <div class="box-1">
                                <h2>Watch Time</h2>
                                <h3>Total minutes</h3>
                            </div>
                            <div class="icon-case">
                                <img src="../assets/images/watch-time.webp" alt="watch-time">
                            </div>
                        </div>
                    </div> <br><br>
                    <div class="content-2">
                        <h1>Upcoming Courses</h1>
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