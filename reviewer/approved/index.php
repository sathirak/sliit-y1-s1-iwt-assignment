<?php
// Check if user is signed in
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'reviewer') {
    header("Location: ../../sign-in");
}

?>
<!DOCTYPE html>

<head>
    <?php
    include "../../components/html.php";
    ?>
    <title>AcademiX | Course Reviewer</title>
    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="stylesheet" href="../../styles/components.css">
    <link rel="stylesheet" href="../../styles/course-reviewer.css">
</head>

<body>

    <?php
    include "../../components/header.php";
    include "../../utils/db.php";

    $sql = "SELECT * FROM course WHERE status='Approved'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Invalid query: " . $conn->error);
    }

    ?>
    <script src="../../scripts/approved.js"></script>
    <div class="container">

        <nav class="sidebar">
            <ul>
                <li><a href="/reviewer/pending/">Review</a></li>
                <li><a href="/reviewer/approved/">Approved Courses</a></li>
            </ul>
        </nav>

        <main>

            <h1 class="heading">
                Approved Courses
            </h1>

            <div class="course-grid">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class='card mb-3 course-card'>
                        <div class='row g-0'>
                            <div class='col-md-12'>
                                <div class='card-body'>
                                    <h5 class='card-title'><?= $row['course_name'] ?></h5>
                                    <p class='card-text course-level'><?= $row['level'] ?></p>
                                    <p class='card-text description'><?= $row['description'] ?></p>
                                    <p class='card-text'><strong>Published Date:</strong> <?= $row['published_date'] ?></p>
                                    <p class='card-text'><strong>Price:</strong> $<?= $row['price'] ?></p>
                                    <p class='card-text'> <?= $row['duration'] ?> Weeks</p>
                                    <a class='btn btn-primary btn-sm' href='../course-reviewer/edit.php?id=<?= $row['course_id'] ?>'>View</a>

                                    <form action='reject.php' method='POST' style='display:inline;'>
                                        <input type='hidden' name='course_id' value='<?= $row['course_id'] ?>'>
                                        <button type='submit' class='reject'>Reject</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </main>
    </div>

    <?php
    include "../../components/footer.php";
    ?>

</body>

</html>