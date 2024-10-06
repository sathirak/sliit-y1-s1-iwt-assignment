<!DOCTYPE html>
<html lang="en">

<head> 
    <?php
        include "../components/layout/html.php";
        include "../utils/db.php";
    ?>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/all-courses.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">
</head>

<body>
    <?php 
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);

        if (!$result) {
            die("Invalid query: " . $conn->error);
        } 
        include "../components/layout/header.php";
    ?>

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
                    <div class="course-box">

                        <?php
                        echo "<div class='course-container'>";
                        while ($row = $result->fetch_assoc()) {
                            echo "
                                <div class='card mb-3 course-card'>
                                    <div class='row g-0'>
                                        <div class='col-md-12'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>{$row['course_name']}</h5>
                                                <p class='card-text'><strong>Course ID:</strong> {$row['course_id']}</p>
                                                <p class='card-text'><strong>Level:</strong> {$row['level']}</p>
                                                <p class='card-text description'><strong>Description:</strong> {$row['description']}</p>
                                                <p class='card-text'><strong>Published Date:</strong> {$row['published_date']}</p>
                                                <p class='card-text'><strong>Price:</strong> \${$row['price']}</p>
                                                <p class='card-text'><strong>Duration:</strong> {$row['duration']} Weeks</p>
                                                <a class='btn btn-primary btn-sm' href='../all-courses/edit.php?id={$row['course_id']}'>View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";

                        
                        }

                        echo "</div>";
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include "../components/layout/footer.php"; ?>
</body>

</html>