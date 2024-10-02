<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../components/layout/html.php"; ?>
    <title>AcademiX | All Courses</title>                 
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/all-courses.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">
</head>

<body>
    <?php include "../components/layout/header.php"; ?>

    <main>
        <h1 class="heading">Browse All Our Courses</h1>

        <div class="search-bar search-bar-margin">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search Courses...">
                <button id="search-button">Search</button>
            </form>
        </div>

        <div class="courses-list">
            <div class="course-item">
                <div class="course-container">
                    <a class="btn btn-primary" href="../all-courses/create.php" role="button">New Course</a>
                    <br>
                    <div class="course-box">
                        <div class="head">
                                <div>ID</div>
                                <div>User ID</div>
                                <div>Expertise</div>
                                <div>Bio</div>
                                <div>Rate</div>
                                <div>Actions</div>
                    </div>
                        <tbody>
                            <?php
                            $servername = "127.0.0.1";
                            $username = "root";
                            $password = "";
                            $database = "coursereviewer";

                            $conn = new mysqli($servername, $username, $password, $database);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM CourseReviewer"; 
                            $result = $conn->query($sql);
                            
                            if (!$result) {
                                die("Invalid query: " . $conn->error);                    
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo "
                                 <div class='list'>
                                    <div>{$row['reviewer_id']}</div>
                                    <div>{$row['user_id']}</div>
                                    <div>{$row['expertise']}</div>
                                    <div>{$row['bio']}</div>
                                    <div>{$row['rating']}</div>
                                    <div>
                                    <a class='btn btn-primary btn-sm' href='../all-courses/edit.php?id={$row['reviewer_id']}'> Edit</a>
                                    <a class='btn btn-danger btn-sm' href='../all-courses/delete.php?id={$row['reviewer_id']}'> Delete</a>
                                    </div>
                                </div>
                                ";
                            }
                            ?>
                        </tbody>  
                        </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "../components/layout/footer.php"; ?>
</body>
</html>
