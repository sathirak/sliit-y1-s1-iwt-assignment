<?php
// Include the database connection
include "../utils/db.php";

// Get course ID from query parameter
$course_id = isset($_GET['course_id']) ? $_GET['course_id'] : null;

if (!$course_id) {
    die("Course ID not provided.");
}

// Fetch course details
$course_sql = "SELECT Courses.title, Courses.description, Courses.price, Subjects.name as subject_name, Courses.duration
               FROM Courses
               JOIN Subjects ON Courses.subject_id = Subjects.subject_id
               WHERE Courses.course_id = $course_id";
$course_result = $conn->query($course_sql);

// Check if course exists
if ($course_result->num_rows == 0) {
    die("Course not found.");
}

$course = $course_result->fetch_assoc();

// Fetch lessons for the course
$lessons_sql = "SELECT lesson_id, title, content FROM Lessons WHERE course_id = $course_id ORDER BY lesson_order";
$lessons_result = $conn->query($lessons_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course['title']; ?> - Course View</title>
    <link rel="stylesheet" href="../styles/course/single-course.css">
</head>
<body>
    <div class="container">
        <!-- Course Details Section -->
        <div class="course-details">
            <h1><?php echo $course['title']; ?></h1>
            <p><strong>Subject:</strong> <?php echo $course['subject_name']; ?></p>
            <p><strong>Description:</strong> <?php echo $course['description']; ?></p>
            <p><strong>Price:</strong> $<?php echo $course['price']; ?></p>
            <p><strong>Duration:</strong> <?php echo $course['duration']; ?> hours</p>
        </div>

        <!-- Lesson List -->
        <div class="lesson-list">
            <h2>Lessons</h2>
            <ul>
                <?php
                // Loop through lessons and list them
                if ($lessons_result->num_rows > 0) {
                    while ($lesson = $lessons_result->fetch_assoc()) {
                        echo "<li><a href='#' onclick='switchLesson(" . $lesson['lesson_id'] . ")'>" . $lesson['title'] . "</a></li>";
                    }
                } else {
                    echo "<p>No lessons available for this course.</p>";
                }
                ?>
            </ul>
        </div>

        <!-- Video Player -->
        <div class="video-player">
            <h3>Current Lesson</h3>
            <div id="video-content">
                <p>Please select a lesson to watch the video.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript to switch between lessons -->
    <script>
        // Function to switch between lessons
        function switchLesson(lesson_id) {
            // Make an AJAX request to get the lesson content
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'get-lesson.php?lesson_id=' + lesson_id, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    document.getElementById('video-content').innerHTML = this.responseText;
                } else {
                    document.getElementById('video-content').innerHTML = '<p>Error loading lesson. Please try again later.</p>';
                }
            };
            xhr.send();
        }
    </script>
</body>
</html>
