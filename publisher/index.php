<?php
// Check if user is signed in
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'publisher') {
    header("Location: ../sign-in");
}

include "../utils/db.php";

$sql = "SELECT * from subject;";

$subjectResults = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Course with Lessons</title>
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/components.css" />
    <link rel="stylesheet" href="../styles/course/create.css" />
</head>

<body>
    <?php include "../components/header.php"; ?>
    <div class="container">
        <h1>Create New Course with Lessons</h1>
        <form id="courseForm" method="POST" action="publish.php">
            <h2>Course Details</h2>
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="level">Level:</label>
            <select id="level" name="level" required>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required>

            <label for="duration">Total Duration (in hours):</label>
            <input type="number" id="duration" name="duration" min="1" required>


            <select id="level" name="subject" required>
                <?php
                while ($row = $subjectResults->fetch_assoc()) {
                    echo "<option value='" . $row['subject_id'] . "'>" . $row["name"] . "</option>";
                }
                ?>
            </select>

            <h2>Lessons</h2>
            <div id="lessonsContainer"></div>
            <button type="button" id="addLessonBtn">Add Lesson</button>

            <button type="submit">Create Course</button>
        </form>
    </div>

    <script src="../../scripts/create-course.js"></script>

    <?php include "../components/footer.php"; ?>
</body>

</html>