<?php  include "../utils/db.php";   ?>

<?php 
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_title = $_POST['course_title'];
    $course_description = $_POST['course_description'];
    $price = $_POST['price'];
    $subject = $_POST['subject'];
    $duration = $_POST['duration'];
    
    // Insert course into courses table
    $course_sql = "INSERT INTO Courses (title, description, price, subject_id, duration) VALUES ('$course_title', '$course_description', '$price', '$subject', '$duration')";
    if ($conn->query($course_sql) === TRUE) {
        $course_id = $conn->insert_id; // Get the last inserted course_id

        // Loop through lessons and insert them into lessons table
        $lesson_titles = $_POST['lesson_video_url'];
        $lesson_descriptions = $_POST['lesson_description'];
        for ($i = 0; $i < count($lesson_titles); $i++) {
            $lesson_title = $lesson_titles[$i];
            $lesson_description = $lesson_descriptions[$i];
            $lesson_sql = "INSERT INTO Lessons (course_id, title, content, lesson_order) VALUES ('$course_id', '$lesson_title', '$lesson_description', $i+1)";
            if (!$conn->query($lesson_sql)) {
                echo "Error adding lesson: " . $conn->error;
            }
        }

        echo "<p class='success'>Course and lessons added successfully!</p>";
    } else {
        echo "Error adding course: " . $conn->error;
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link rel="stylesheet" href="../styles/course/create-page-styles.css">
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/components.css" /> 

    <script>
        // Function to add new lesson fields
        function addLesson() {
            const lessonsContainer = document.getElementById('lessons-container');
            const lessonIndex = lessonsContainer.children.length;

            const newLesson = `
            <div class="lesson">
                <label for="lesson_video_url">Lesson Video URL</label>
                <input type="url" id="lesson_video_url" name="lesson_video_url[]" required>

                <label for="lesson_description">Lesson Description</label>
                <textarea id="lesson_description" name="lesson_description[]" required></textarea>
            </div>
            `;
            lessonsContainer.insertAdjacentHTML('beforeend', newLesson);
        } 
    </script>
</head>
<body>
    <div class="container">
        <h1>Create a New Course</h1>
        <form method="POST" action="create.php">
            <label for="course_title">Course Title</label>
            <input type="text" id="course_title" name="course_title" required>

            <label for="course_description">Course Description</label>
            <textarea id="course_description" name="course_description" required></textarea>

            <label for="price">Price</label>
            <input type="number" step="0.01" id="price" name="price" required>

            <label for="subject">Subject</label>
            <select id="subject" name="subject" required>
                <?php
                // Fetch subjects from the database
                $subject_sql = "SELECT subject_id, name FROM Subjects;";
                $result = $conn->query($subject_sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["subject_id"] . "'>" . $row["name"] . "</option>";
                    }
                }
                ?>
            </select>

            <label for="duration">Duration (in hours)</label>
            <input type="number" step="0.1" id="duration" name="duration" required>

            <h2>Lesson Details</h2>
            <div id="lessons-container">
                <div class="lesson">
                    <label for="lesson_video_url">Lesson Video URL</label>
                    <input type="url" id="lesson_video_url" name="lesson_video_url[]" required>

                    <label for="lesson_description">Lesson Description</label>
                    <textarea id="lesson_description" name="lesson_description[]" required></textarea>
                </div>
            </div>

            <button type="button" onclick="addLesson()">Add Another Lesson</button>
            <button type="submit">Create Course</button>
        </form>
    </div>
</body>
</html>
