<?php
include "../utils/db.php";
// SQL query foe get all subjects
$sql = "SELECT * from subject;";
// Execute the query
$subjectResults = $conn->query($sql);
// Check if the form is submitted
if ($_POST) {
    try {
        //Get form details
        $course_name = $_POST['course_name'];
        $description = $_POST['description'];
        $level = $_POST['level'];
        $price = $_POST['price'];
        $duration = $_POST['duration'];
        $subject = $_POST['subject'];
        // SQL query to insert course data
        $sql = "INSERT INTO course (course_name, description, level, price, duration, subject_id, status) 
        VALUES ('$course_name', '$description', '$level', '$price', '$duration', $subject, 'pending');";
        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Get the inserted course ID
            $course_id = $conn->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($_POST['lessons']) && is_array($_POST['lessons'])) {
            $values = array();
            foreach ($_POST['lessons'] as $lesson) {
                $lesson_title = $lesson['title'];
                $lesson_description = $lesson['description'];
                $lesson_video_url = $lesson['video_url'];
                array_push($values, "($course_id, '$lesson_title', '$lesson_description', '$lesson_video_url')");
            }
            $sql = "INSERT INTO lesson (course_id, title, description, video_url) VALUES " . join(',', $values) . ";";
            // Execute the query
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        echo "New course created successfully.";
    }
    catch(Exception $e) {
        echo "Course creation failed! Please try again." . $e;
    }
    // Close the database connection
    $conn->close();
}
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
    <?php include "../components/layout/header.php"; ?>
    <div class="container">
        <h1>Create New Course with Lessons</h1>
        <form id="courseForm" method="POST">
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
 
    <script src="../../scripts/createCourse.js"></script>

    <?php include "../components/layout/footer.php"; ?>
</body>
</html>