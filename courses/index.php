<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../components/layout/html.php";
    include "../utils/db.php";

    $search_query = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

    if (!empty($search_query)) {
        $sql = "SELECT * FROM course WHERE course_name LIKE '%$search_query%'";
    } else {
        $sql = "SELECT * FROM course";
    }

    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }
    ?>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/all-courses.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">
    <link rel="stylesheet" href="../styles/components/loader.css">
</head>

<body>
    <?php
    include "../components/layout/header.php";
    ?>



    <main>
        <h1 class="heading">Browse All Our Courses</h1>


        <form action="" method="GET" class="search-bar search-bar-margin">
            <input type="text" id="search-input" name="search" placeholder="Search Courses..." value="<?= $search_query ?>" oninput="searchCourses()">
            <button id="search-button" type="submit">Search</button>
        </form>

        <div class="loading-spinner" id="loading-spinner"></div>

        <div class="courses-list">
            <div class="course-item">
                <div class="course-container">
                    <div class="course-box">
                        <div class='course-container' id="search-list" class="search-list">
                            <?php if ($result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>

                                    <div class='card mb-3 course-card'>
                                        <div class='row g-0'>
                                            <div class='col-md-12'>
                                                <div class='card-body'>
                                                    <h5 class='card-title'><?= $row['course_name'] ?></h5>
                                                    <p class='card-text'><strong>Course ID:</strong> <?= $row['course_id'] ?></p>
                                                    <p class='card-text course-level'><?= $row['level'] ?></p>
                                                    <p class='card-text description'><strong>Description:</strong> <?= $row['description'] ?></p>
                                                    <p class='card-text'><strong>Published Date:</strong> <?= $row['published_date'] ?></p>
                                                    <p class='card-text'><strong>Price:</strong> \$<?= $row['price'] ?></p>
                                                    <p class='card-text'><strong>Duration:</strong> <?= $row['duration'] ?> Weeks</p>
                                                    <a class='btn btn-primary btn-sm' href='../courses/watch.php?course_id={$row[' course_id']}'>View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>No courses found for your search.</p>
                            <?php endif; ?>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="../scripts/approved.js"></script>
    <script src="../scripts/search.js"></script>

    <?php include "../components/layout/footer.php"; ?>
</body>

</html>